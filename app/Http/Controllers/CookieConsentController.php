<?php

namespace App\Http\Controllers;

use App\Models\UserConsent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CookieConsentController extends Controller
{
    /**
     * Enregistrer le consentement de l'utilisateur
     * Conforme RGPD : consentement libre, éclairé et explicite
     */
    public function store(Request $request)
    {
        $request->validate([
            'consent' => 'required|in:accepted,refused',
            'timestamp' => 'required|date',
        ]);

        // Enregistrer le consentement dans la base de données
        UserConsent::create([
            'user_id' => Auth::id(), // null si utilisateur non connecté
            'consent_type' => 'cookies',
            'consent_status' => $request->input('consent'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'consent_date' => $request->input('timestamp'),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Consentement enregistré avec succès'
        ]);
    }

    /**
     * Retirer le consentement (droit de retrait)
     */
    public function withdraw(Request $request)
    {
        if (Auth::check()) {
            UserConsent::where('user_id', Auth::id())
                ->where('consent_type', 'cookies')
                ->delete();
        }

        return response()->json([
            'success' => true,
            'message' => 'Consentement retiré avec succès'
        ]);
    }
}
