// Main JavaScript for Zoravixo
(function() {
    'use strict';

    // Navigation
    function initNavigation() {
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');
        const nav = document.getElementById('navbar');
        
        if (navToggle && navMenu) {
            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                
                // Update aria-expanded
                const isExpanded = navMenu.classList.contains('active');
                navToggle.setAttribute('aria-expanded', isExpanded);
                
                // Update icon
                const icon = navToggle.querySelector('svg path');
                if (isExpanded) {
                    icon.setAttribute('d', 'M18 6L6 18M6 6l12 12');
                } else {
                    icon.setAttribute('d', 'M3 12h18M3 6h18M3 18h18');
                }
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!nav.contains(e.target) && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    navToggle.querySelector('svg path').setAttribute('d', 'M3 12h18M3 6h18M3 18h18');
                }
            });
            
            // Close menu when pressing Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    navToggle.focus();
                }
            });
        }
        
        // Navbar scroll effect
        if (nav) {
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', function() {
                const currentScrollY = window.scrollY;
                
                if (currentScrollY > 100) {
                    nav.style.background = 'rgba(15, 16, 32, 0.98)';
                    nav.style.boxShadow = '0 4px 6px -1px rgb(0 0 0 / 0.1)';
                } else {
                    nav.style.background = 'rgba(15, 16, 32, 0.95)';
                    nav.style.boxShadow = 'none';
                }
                
                lastScrollY = currentScrollY;
            });
        }
    }

    // Scroll animations
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe elements with animation class
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    // Form validation
    function initFormValidation() {
        const forms = document.querySelectorAll('form[data-validate]');
        
        forms.forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateForm(form)) {
                    // Show success message
                    showModal('Спасибо!', 'Ваше сообщение успешно отправлено. Мы свяжемся с вами в ближайшее время.');
                    form.reset();
                    clearFormErrors(form);
                }
            });
            
            // Real-time validation
            const inputs = form.querySelectorAll('input, textarea, select');
            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    validateField(input);
                });
                
                input.addEventListener('input', function() {
                    clearFieldError(input);
                });
            });
        });
    }

    function validateForm(form) {
        const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;
        
        inputs.forEach(function(input) {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        
        return isValid;
    }

    function validateField(field) {
        const value = field.value.trim();
        const type = field.type;
        const name = field.name;
        let isValid = true;
        let errorMessage = '';
        
        // Required validation
        if (field.hasAttribute('required') && !value) {
            errorMessage = 'Это поле обязательно для заполнения';
            isValid = false;
        }
        
        // Email validation
        else if (type === 'email' && value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(value)) {
                errorMessage = 'Введите корректный email адрес';
                isValid = false;
            }
        }
        
        // Phone validation
        else if (type === 'tel' && value) {
            const phonePattern = /^[\+]?[\d\s\-\(\)]{10,}$/;
            if (!phonePattern.test(value)) {
                errorMessage = 'Введите корректный номер телефона';
                isValid = false;
            }
        }
        
        // Name validation
        else if (name === 'name' && value) {
            if (value.length < 2) {
                errorMessage = 'Имя должно содержать минимум 2 символа';
                isValid = false;
            }
        }
        
        // Message validation
        else if (name === 'message' && value) {
            if (value.length < 10) {
                errorMessage = 'Сообщение должно содержать минимум 10 символов';
                isValid = false;
            }
        }
        
        // Display error
        if (!isValid) {
            showFieldError(field, errorMessage);
        } else {
            clearFieldError(field);
        }
        
        return isValid;
    }

    function showFieldError(field, message) {
        clearFieldError(field);
        
        field.style.borderColor = '#ef4444';
        
        const errorDiv = document.createElement('div');
        errorDiv.className = 'form-error';
        errorDiv.textContent = message;
        
        field.parentNode.appendChild(errorDiv);
    }

    function clearFieldError(field) {
        field.style.borderColor = '';
        
        const errorDiv = field.parentNode.querySelector('.form-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    function clearFormErrors(form) {
        const errorDivs = form.querySelectorAll('.form-error');
        errorDivs.forEach(function(div) {
            div.remove();
        });
        
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(function(input) {
            input.style.borderColor = '';
        });
    }

    // Modal functionality
    function initModal() {
        // Create modal HTML if it doesn't exist
        if (!document.getElementById('modal')) {
            const modalHTML = `
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <button type="button" class="modal-close" onclick="closeModal()" aria-label="Закрыть">&times;</button>
                        <h3 id="modalTitle"></h3>
                        <div id="modalBody"></div>
                    </div>
                </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalHTML);
        }
        
        // Close modal on overlay click
        const modal = document.getElementById('modal');
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });
        }
        
        // Close modal on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    }

    window.showModal = function(title, content) {
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modalTitle');
        const modalBody = document.getElementById('modalBody');
        
        if (modal && modalTitle && modalBody) {
            modalTitle.textContent = title;
            modalBody.innerHTML = content;
            modal.classList.add('active');
            
            // Focus trap
            const closeButton = modal.querySelector('.modal-close');
            if (closeButton) {
                closeButton.focus();
            }
        }
    };

    window.closeModal = function() {
        const modal = document.getElementById('modal');
        if (modal) {
            modal.classList.remove('active');
        }
    };

    // Cookie banner
    function initCookieBanner() {
        const cookieBanner = document.getElementById('cookieBanner');
        
        if (cookieBanner) {
            // Check if user has already made a choice
            const cookieConsent = localStorage.getItem('cookieConsent');
            
            if (!cookieConsent) {
                // Show banner after a short delay
                setTimeout(function() {
                    cookieBanner.classList.add('show');
                }, 2000);
            }
        }
    }

    window.acceptCookies = function() {
        localStorage.setItem('cookieConsent', 'accepted');
        hideCookieBanner();
    };

    window.declineCookies = function() {
        localStorage.setItem('cookieConsent', 'declined');
        hideCookieBanner();
    };

    function hideCookieBanner() {
        const cookieBanner = document.getElementById('cookieBanner');
        if (cookieBanner) {
            cookieBanner.classList.remove('show');
        }
    }

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = link.getAttribute('href');
                
                if (href === '#') {
                    e.preventDefault();
                    return;
                }
                
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Parallax effect for hero sections
    function initParallax() {
        const parallaxElements = document.querySelectorAll('.hero-bg');
        
        if (parallaxElements.length > 0) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                parallaxElements.forEach(function(element) {
                    element.style.transform = `translateY(${rate}px)`;
                });
            });
        }
    }

    // Panel hover effects
    function initPanelEffects() {
        const panels = document.querySelectorAll('.panel');
        
        panels.forEach(function(panel) {
            panel.addEventListener('mouseenter', function() {
                panel.style.transform = 'translateY(-4px) scale(1.02)';
            });
            
            panel.addEventListener('mouseleave', function() {
                panel.style.transform = 'translateY(-2px) scale(1)';
            });
        });
    }

    // Loading animation
    function initLoadingAnimation() {
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            // Trigger animations for visible elements
            const visibleElements = document.querySelectorAll('.animate-on-scroll');
            visibleElements.forEach(function(element) {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    element.classList.add('animated');
                }
            });
        });
    }

    // Initialize all functionality
    function init() {
        initNavigation();
        initScrollAnimations();
        initFormValidation();
        initModal();
        initCookieBanner();
        initSmoothScrolling();
        initParallax();
        initPanelEffects();
        initLoadingAnimation();
    }

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();