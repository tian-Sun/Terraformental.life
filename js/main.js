// Handle random game selection
function selectRandomGame() {
    const gameCards = document.querySelectorAll('.game-card');
    const randomIndex = Math.floor(Math.random() * gameCards.length);
    gameCards[randomIndex].click();
}

// Handle fullscreen functionality
function toggleFullscreen(element) {
    if (!document.fullscreenElement) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.webkitRequestFullscreen) { // Safari
            element.webkitRequestFullscreen();
        } else if (element.mozRequestFullScreen) { // Firefox
            element.mozRequestFullScreen();
        } else if (element.msRequestFullscreen) { // IE11
            element.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { // Safari
            document.webkitExitFullscreen();
        } else if (document.mozCancelFullScreen) { // Firefox
            document.mozCancelFullScreen();
        } else if (document.msExitFullscreen) { // IE11
            document.msExitFullscreen();
        }
    }

    // Update button icon
    const fullscreenBtn = document.querySelector('.fullscreen-btn');
    if (fullscreenBtn) {
        const icon = fullscreenBtn.querySelector('i');
        if (!document.fullscreenElement) {
            icon.classList.remove('fa-compress');
            icon.classList.add('fa-expand');
        } else {
            icon.classList.remove('fa-expand');
            icon.classList.add('fa-compress');
        }
    }
}

// Initialize fullscreen button
document.addEventListener('DOMContentLoaded', () => {
    const fullscreenBtn = document.querySelector('.fullscreen-btn');
    const gameContainer = document.querySelector('.game-container');
    
    if (fullscreenBtn && gameContainer) {
        fullscreenBtn.addEventListener('click', () => {
            toggleFullscreen(gameContainer);
        });
    }

    // Update fullscreen button icon when fullscreen state changes
    document.addEventListener('fullscreenchange', () => {
        if (fullscreenBtn) {
            const icon = fullscreenBtn.querySelector('i');
            if (document.fullscreenElement) {
                icon.classList.remove('fa-expand');
                icon.classList.add('fa-compress');
            } else {
                icon.classList.remove('fa-compress');
                icon.classList.add('fa-expand');
            }
        }
    });
});

// Initialize tooltips
document.addEventListener('DOMContentLoaded', () => {
    // Initialize any third-party libraries or additional functionality here
}); 