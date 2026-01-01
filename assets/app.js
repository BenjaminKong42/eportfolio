import './styles/app.css';

// ===== MODE JOUR/NUIT =====

document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const html = document.documentElement;

    // Sécurité (évite erreurs si l'élément n'existe pas)
    if (!themeToggle || !themeIcon) {
        return;
    }

    // Récupération du thème sauvegardé
    const savedTheme = localStorage.getItem('theme') || 'light';

    // ✅ APPLIQUER le thème au chargement
    if (savedTheme === 'dark') {
        html.classList.add('dark-mode');
    }

    // Mettre à jour l'icône selon le thème
    updateIcon(savedTheme);

    // Écouter le clic sur le bouton
    themeToggle.addEventListener('click', function() {
        if (html.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });

    function enableDarkMode() {
        html.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        updateIcon('dark');
    }

    function disableDarkMode() {
        html.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        updateIcon('light');
    }

    function updateIcon(theme) {
        if (theme === 'dark') {
            themeIcon.classList.remove('bi-moon-fill');
            themeIcon.classList.add('bi-sun-fill');
        } else {
            themeIcon.classList.remove('bi-sun-fill');
            themeIcon.classList.add('bi-moon-fill');
        }
    }
});
