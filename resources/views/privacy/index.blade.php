@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded-lg p-8 max-w-5xl mx-auto">

    <h1 class="text-4xl font-bold mb-6 text-gray-900">Politique de confidentialité et Charte RGPD</h1>

    <div class="prose prose-blue max-w-none">

        {{-- 1. Responsable de traitement --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">1. Identité du responsable de traitement</h2>
            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>Nom de l'organisation :</strong> BTSSIOBloc3.com</p>
                <p><strong>Adresse :</strong> [À compléter]</p>
                <p><strong>Email :</strong> contact@btsssiobloc3.com</p>
                <p><strong>Téléphone :</strong> [À compléter]</p>
            </div>
            <p class="mt-4 text-gray-700">
                La société BTSSIOBloc3.com est responsable du traitement des données personnelles collectées
                sur cette application de Boîte à Idées (BAI).
            </p>
        </section>

        {{-- 2. Données collectées --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">2. Données personnelles collectées</h2>
            <p class="text-gray-700 mb-4">
                Conformément au principe de <strong>minimisation des données</strong>, nous ne collectons que
                les informations strictement nécessaires au fonctionnement de l'application :
            </p>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li><strong>Nom et prénom</strong> : pour l'identification de l'utilisateur</li>
                <li><strong>Adresse email</strong> : pour l'authentification et les notifications</li>
                <li><strong>Mot de passe</strong> : stocké de manière sécurisée (hashé)</li>
                <li><strong>Idées et commentaires</strong> : contenus publiés par l'utilisateur</li>
                <li><strong>Logs de connexion</strong> : pour la sécurité et la traçabilité</li>
                <li><strong>Adresse IP</strong> : pour la sécurité et le suivi des consentements</li>
                <li><strong>Cookies</strong> : pour la gestion de session et le consentement</li>
            </ul>
        </section>

        {{-- 3. Finalités du traitement --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">3. Finalités du traitement</h2>
            <p class="text-gray-700 mb-4">
                Vos données sont collectées pour les finalités suivantes :
            </p>
            <div class="space-y-3">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-800">Authentification des utilisateurs</h3>
                    <p class="text-gray-600">Permettre l'accès sécurisé à votre compte</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-800">Gestion de la boîte à idées</h3>
                    <p class="text-gray-600">Création, modification et suppression d'idées et commentaires</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-800">Sécurité de l'application</h3>
                    <p class="text-gray-600">Traçabilité des actions pour prévenir les abus</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-gray-800">Amélioration du service</h3>
                    <p class="text-gray-600">Analyse des fonctionnalités utilisées pour améliorer l'expérience</p>
                </div>
            </div>
        </section>

        {{-- 4. Durée de conservation --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">4. Durée de conservation des données</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700 border-b">Type de données</th>
                        <th class="px-4 py-3 text-left font-semibold text-gray-700 border-b">Durée de conservation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-4 py-3">Données de compte utilisateur actif</td>
                        <td class="px-4 py-3">Durée d'utilisation du service</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-3">Logs de connexion et de sécurité</td>
                        <td class="px-4 py-3">6 mois maximum</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-3">Données après suppression du compte</td>
                        <td class="px-4 py-3">Suppression immédiate</td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-3">Preuve de consentement (cookies)</td>
                        <td class="px-4 py-3">Durée du traitement + 3 ans</td>
                    </tr>
                </tbody>
            </table>
        </section>

        {{-- 5. Droits des utilisateurs --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">5. Vos droits (RGPD)</h2>
            <p class="text-gray-700 mb-4">
                Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez des droits suivants :
            </p>

            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit à l'information</h3>
                    <p class="text-gray-600">Être informé de manière claire sur l'utilisation de vos données</p>
                </div>

                <div class="border-l-4 border-green-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit d'accès</h3>
                    <p class="text-gray-600">Obtenir une copie de toutes vos données personnelles</p>
                </div>

                <div class="border-l-4 border-yellow-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit de rectification</h3>
                    <p class="text-gray-600">Corriger ou mettre à jour vos informations</p>
                </div>

                <div class="border-l-4 border-red-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit à l'effacement (droit à l'oubli)</h3>
                    <p class="text-gray-600">Demander la suppression de toutes vos données</p>
                </div>

                <div class="border-l-4 border-purple-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit à la limitation du traitement</h3>
                    <p class="text-gray-600">Suspendre temporairement le traitement de vos données</p>
                </div>

                <div class="border-l-4 border-indigo-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit d'opposition</h3>
                    <p class="text-gray-600">Vous opposer à certains traitements de vos données</p>
                </div>

                <div class="border-l-4 border-pink-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit à la portabilité</h3>
                    <p class="text-gray-600">Récupérer vos données dans un format structuré et lisible</p>
                </div>

                <div class="border-l-4 border-orange-500 pl-4">
                    <h3 class="font-semibold text-gray-800">✓ Droit de retrait du consentement</h3>
                    <p class="text-gray-600">Retirer votre consentement à tout moment (notamment pour les cookies)</p>
                </div>
            </div>
        </section>

        {{-- 6. Exercer vos droits --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">6. Comment exercer vos droits ?</h2>
            <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <p class="text-gray-700 mb-3">
                    Pour exercer l'un de vos droits, vous pouvez nous contacter par email à :
                </p>
                <p class="text-xl font-bold text-green-700">dpo@btsssiobloc3.com</p>
                <p class="text-gray-600 mt-3 text-sm">
                    Nous nous engageons à répondre à votre demande dans un délai maximum de <strong>1 mois</strong>.
                </p>
            </div>
        </section>

        {{-- 7. Cookies --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">7. Utilisation des cookies</h2>
            <p class="text-gray-700 mb-4">
                Nous utilisons des cookies pour améliorer votre expérience sur notre site. Un cookie est un petit
                fichier texte stocké sur votre terminal.
            </p>

            <h3 class="text-xl font-semibold mb-3 text-gray-800">Types de cookies utilisés :</h3>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li><strong>Cookies essentiels :</strong> Nécessaires au fonctionnement du site (session, authentification)</li>
                <li><strong>Cookies de préférence :</strong> Mémorisation de vos choix (langue, consentement)</li>
            </ul>

            <p class="mt-4 text-gray-700">
                Conformément à la réglementation, votre consentement est requis pour les cookies non essentiels.
                Vous pouvez retirer votre consentement à tout moment via le bandeau cookies ou en nous contactant.
            </p>

            <p class="mt-4">
                <a href="https://www.cnil.fr/fr/cookies-et-autres-traceurs"
                   target="_blank"
                   class="text-blue-600 hover:text-blue-800 underline">
                    En savoir plus sur les cookies (CNIL)
                </a>
            </p>
        </section>

        {{-- 8. Sécurité --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">8. Sécurité des données</h2>
            <p class="text-gray-700">
                Nous mettons en œuvre les mesures techniques et organisationnelles appropriées pour protéger
                vos données contre la perte, l'utilisation abusive, l'accès non autorisé, la divulgation,
                l'altération ou la destruction.
            </p>
            <ul class="list-disc pl-6 space-y-2 text-gray-700 mt-3">
                <li>Mots de passe hashés (bcrypt)</li>
                <li>Connexion HTTPS sécurisée</li>
                <li>Traçabilité des accès via logs</li>
                <li>Accès restreint aux données par les administrateurs</li>
            </ul>
        </section>

        {{-- 9. Contact --}}
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">9. Contact et réclamation</h2>
            <p class="text-gray-700 mb-4">
                Si vous avez des questions concernant cette politique de confidentialité ou le traitement
                de vos données personnelles, contactez-nous :
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p><strong>Email :</strong> dpo@btsssiobloc3.com</p>
                <p><strong>Adresse :</strong> [À compléter]</p>
            </div>
            <p class="text-gray-700 mt-4">
                Vous avez également le droit d'introduire une réclamation auprès de la CNIL (Commission Nationale
                de l'Informatique et des Libertés) si vous estimez que vos droits ne sont pas respectés :
            </p>
            <p class="mt-2">
                <a href="https://www.cnil.fr/fr/plaintes"
                   target="_blank"
                   class="text-blue-600 hover:text-blue-800 underline">
                    Déposer une plainte auprès de la CNIL
                </a>
            </p>
        </section>

        <div class="bg-gray-100 p-4 rounded-lg text-center text-sm text-gray-600 mt-8">
            <p><strong>Dernière mise à jour :</strong> {{ now()->format('d/m/Y') }}</p>
        </div>

    </div>

</div>
@endsection
