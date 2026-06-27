/**
 * Pterodactyl Panel - Liquid Glass Theme with Music Player
 * Version: 1.0
 * GitHub: https://github.com/yourusername/pterodactyl-theme
 * 
 * Features:
 * - Auto-play background music (looping)
 * - Smooth card animations
 * - Button ripple effects
 * - Music toggle indicator
 * 
 * Usage:
 * <script src="https://raw.githubusercontent.com/yourusername/pterodactyl-theme/main/pterodactyl-theme.js"></script>
 */

(function() {
    'use strict';

    // ===== BACKGROUND MUSIC PLAYER =====
    const setupBackgroundMusic = () => {
        // Create audio element
        const audio = document.createElement('audio');
        audio.id = 'pterodactyl-bg-music';
        audio.src = '/themes/custom/bg-music.mp3';
        audio.volume = 0.3; // 30% volume
        audio.loop = true; // Auto looping
        audio.autoplay = true; // Auto play
        audio.preload = 'auto';
        audio.style.display = 'none';
        
        document.body.appendChild(audio);

        // Try to play (might fail due to browser autoplay policy)
        const playPromise = audio.play();
        if (playPromise !== undefined) {
            playPromise.catch(() => {
                console.log('🎵 Autoplay blocked. Music will play on user interaction.');
                // Music akan play setelah user interact
                document.addEventListener('click', () => {
                    audio.play().catch(err => console.log('Music play error:', err));
                }, { once: true });
            });
        }

        // Create music indicator
        const indicator = document.createElement('div');
        indicator.className = 'music-indicator';
        indicator.textContent = 'Auto-Playing BGM';
        indicator.title = 'Click to toggle music';
        
        // Toggle music on click
        indicator.addEventListener('click', (e) => {
            e.stopPropagation();
            if (audio.paused) {
                audio.play();
                indicator.style.opacity = '1';
                indicator.textContent = '🎵 Music ON';
            } else {
                audio.pause();
                indicator.style.opacity = '0.5';
                indicator.textContent = '🎵 Music OFF';
            }
            setTimeout(() => {
                indicator.textContent = 'Auto-Playing BGM';
            }, 2000);
        });
        
        document.body.appendChild(indicator);

        console.log('%c🎵 Background Music Initialized', 'color: #0a7eff; font-size: 14px; font-weight: bold;');
        return audio;
    };

    // ===== SMOOTH SCROLL & PAGE TRANSITIONS =====
    const setupSmoothTransitions = () => {
        // Smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Page load animation
        document.body.style.opacity = '0';
        setTimeout(() => {
            document.body.style.transition = 'opacity 0.8s ease-out';
            document.body.style.opacity = '1';
        }, 100);

        console.log('%c✨ Smooth transitions initialized', 'color: #00d4ff; font-size: 12px;');
    };

    // ===== INTERACTIVE CARD EFFECTS =====
    const setupCardEffects = () => {
        document.querySelectorAll('.card, [class*="card"], .panel, [class*="panel"]').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

            // Parallax effect
            card.addEventListener('mousemove', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const rotateX = (y - rect.height / 2) / 20;
                const rotateY = (x - rect.width / 2) / 20;

                this.style.perspective = '1000px';
                this.style.transform = `translateY(-8px) scale(1.02) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotateX(0) rotateY(0)';
            });
        });

        console.log('%c✨ Card effects initialized', 'color: #00d4ff; font-size: 12px;');
    };

    // ===== BUTTON RIPPLE EFFECT =====
    const setupRippleEffect = () => {
        document.querySelectorAll('.btn, button, [class*="btn"]').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const rect = this.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const ripple = document.createElement('span');
                ripple.style.cssText = `
                    position: absolute;
                    left: ${x}px;
                    top: ${y}px;
                    width: 0;
                    height: 0;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
                    transform: scale(1);
                    animation: ripple-animation 0.6s ease-out;
                    pointer-events: none;
                `;

                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);

                setTimeout(() => ripple.remove(), 600);
            });
        });

        console.log('%c✨ Button ripple effects initialized', 'color: #00d4ff; font-size: 12px;');
    };

    // ===== ANIMATED ELEMENTS ON SCROLL =====
    const setupScrollAnimations = () => {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'slideInUp 0.6s ease-out forwards';
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.card, .btn, [class*="alert"]').forEach(el => {
                observer.observe(el);
            });

            console.log('%c✨ Scroll animations initialized', 'color: #00d4ff; font-size: 12px;');
        }
    };

    // ===== RESPONSIVE ADJUSTMENTS =====
    const setupResponsive = () => {
        const mediaQuery = window.matchMedia('(max-width: 768px)');
        
        const handleMediaChange = (e) => {
            if (e.matches) {
                // Mobile adjustments
                document.documentElement.style.setProperty('--glass-blur', '15px');
            } else {
                // Desktop adjustments
                document.documentElement.style.setProperty('--glass-blur', '20px');
            }
        };

        mediaQuery.addEventListener('change', handleMediaChange);
        handleMediaChange(mediaQuery);

        console.log('%c📱 Responsive setup initialized', 'color: #00d4ff; font-size: 12px;');
    };

    // ===== INITIALIZE ALL =====
    const init = () => {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                setupBackgroundMusic();
                setupSmoothTransitions();
                setupCardEffects();
                setupScrollAnimations();
                setupRippleEffect();
                setupResponsive();

                console.log('%c✨ Pterodactyl Liquid Glass Theme Loaded Successfully!', 'color: #0a7eff; font-size: 16px; font-weight: bold;');
            });
        } else {
            setupBackgroundMusic();
            setupSmoothTransitions();
            setupCardEffects();
            setupScrollAnimations();
            setupRippleEffect();
            setupResponsive();

            console.log('%c✨ Pterodactyl Liquid Glass Theme Loaded Successfully!', 'color: #0a7eff; font-size: 16px; font-weight: bold;');
        }
    };

    // Start initialization
    init();
})();

// ===== CSS ANIMATION DEFINITIONS =====
const styleSheet = document.createElement('style');
styleSheet.textContent = `
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    @keyframes pulseMusic {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    .music-indicator {
        position: fixed !important;
        bottom: 20px !important;
        right: 20px !important;
        z-index: 10000 !important;
        font-size: 12px !important;
        color: #a0a0a0 !important;
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        background: rgba(255, 255, 255, 0.1) !important;
        padding: 8px 12px !important;
        border-radius: 20px !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        cursor: pointer !important;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) !important;
        font-weight: 600 !important;
        letter-spacing: 0.5px !important;
    }

    .music-indicator:hover {
        background: rgba(255, 255, 255, 0.15) !important;
        color: #0a7eff !important;
        transform: scale(1.05);
    }

    .music-indicator::before {
        content: '🎵' !important;
        animation: pulseMusic 1s ease-in-out infinite;
    }

    [class*="btn"], button {
        position: relative !important;
    }
`;

document.head.appendChild(styleSheet);

console.log('%c━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', 'color: #0a7eff; font-size: 12px;');
console.log('%c🎨 Pterodactyl Liquid Glass Theme v1.0', 'color: #0a7eff; font-size: 14px; font-weight: bold;');
console.log('%c🎵 Music Player: Active & Looping', 'color: #34c759; font-size: 12px;');
console.log('%c✨ Smooth Animations: Enabled', 'color: #00d4ff; font-size: 12px;');
console.log('%c━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', 'color: #0a7eff; font-size: 12px;');
