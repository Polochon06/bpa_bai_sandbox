{{-- Bandeau cookies RGPD conforme --}}
<div id="cookie-banner" style="display: none; position: fixed; bottom: 0; left: 0; right: 0; background: #1f2937; color: white; padding: 20px; z-index: 9999; box-shadow: 0 -2px 10px rgba(0,0,0,0.3);">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap;">

        <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">🍪 Utilisation des cookies</h3>
            <p style="font-size: 14px; color: #d1d5db; margin: 0;">
                Nous utilisons des cookies pour assurer le bon fonctionnement de notre site et améliorer votre expérience.
                En continuant, vous acceptez notre utilisation des cookies conformément à notre
                <a href="{{ route('privacy') }}" style="color: #60a5fa; text-decoration: underline;">politique de confidentialité</a>.
            </p>
            <p style="font-size: 12px; color: #9ca3af; margin-top: 8px;">
                <strong>Finalités :</strong> Authentification, sécurité, amélioration du service.
            </p>
        </div>

        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <button id="cookie-accept" style="background: #10b981; padding: 12px 24px; border: none; border-radius: 8px; color: white; font-weight: bold; cursor: pointer; font-size: 14px; transition: background 0.3s;">
                Accepter
            </button>
            <button id="cookie-refuse" style="background: #6b7280; padding: 12px 24px; border: none; border-radius: 8px; color: white; font-weight: bold; cursor: pointer; font-size: 14px; transition: background 0.3s;">
                Refuser
            </button>
        </div>

    </div>
</div>

{{-- Script JavaScript pour gérer le consentement --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const refuseBtn = document.getElementById('cookie-refuse');

    // Hover effects
    acceptBtn.addEventListener('mouseover', function() {
        this.style.background = '#059669';
    });
    acceptBtn.addEventListener('mouseout', function() {
        this.style.background = '#10b981';
    });

    refuseBtn.addEventListener('mouseover', function() {
        this.style.background = '#4b5563';
    });
    refuseBtn.addEventListener('mouseout', function() {
        this.style.background = '#6b7280';
    });

    // Vérifier si un choix a déjà été fait
    const cookieConsent = localStorage.getItem('cookie_consent');

    if (!cookieConsent) {
        // Afficher le bandeau avec une animation
        setTimeout(function() {
            banner.style.display = 'block';
            banner.style.animation = 'slideUp 0.5s ease-out';
        }, 1000);
    }

    // Fonction pour envoyer le consentement au serveur
    function envoyerConsentement(status) {
        fetch('/cookie-consent', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                consent: status,
                timestamp: new Date().toISOString()
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Consentement enregistré:', data);
        })
        .catch(error => {
            console.error('Erreur lors de l\'enregistrement:', error);
        });
    }

    // Clic sur Accepter
    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('cookie_consent', 'accepted');
        localStorage.setItem('cookie_consent_date', new Date().toISOString());
        envoyerConsentement('accepted');

        // Animation de fermeture
        banner.style.animation = 'slideDown 0.5s ease-out';
        setTimeout(function() {
            banner.style.display = 'none';
        }, 500);
    });

    // Clic sur Refuser
    refuseBtn.addEventListener('click', function() {
        localStorage.setItem('cookie_consent', 'refused');
        localStorage.setItem('cookie_consent_date', new Date().toISOString());
        envoyerConsentement('refused');

        // Animation de fermeture
        banner.style.animation = 'slideDown 0.5s ease-out';
        setTimeout(function() {
            banner.style.display = 'none';
        }, 500);
    });
});

// Animations CSS
const style = document.createElement('style');
style.textContent = `
    @keyframes slideUp {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideDown {
        from {
            transform: translateY(0);
            opacity: 1;
        }
        to {
            transform: translateY(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
</script>
