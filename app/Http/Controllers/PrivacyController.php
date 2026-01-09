<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Afficher la page de politique de confidentialité
     * Conforme aux exigences RGPD
     */
    public function index()
    {
        return view('privacy.index');
    }
}
