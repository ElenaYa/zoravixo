// Main JavaScript for Zoravixo
(function() {
    'use strict';

    // Navigation
    function initNavigation() {
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');
        const nav = document.getElementById('navbar');
        
        if (navToggle && navMenu) {
            // Initialize ARIA state
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.setAttribute('aria-controls', 'navMenu');

            navToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');

                // Update aria-expanded
                const isExpanded = navMenu.classList.contains('active');
                navToggle.setAttribute('aria-expanded', String(isExpanded));

                // Lock/unlock body scroll
                document.body.classList.toggle('menu-open', isExpanded);

                // Update icon
                const icon = navToggle.querySelector('svg path');
                if (icon) {
                    icon.setAttribute('d', isExpanded ? 'M18 6L6 18M6 6l12 12' : 'M3 12h18M3 6h18M3 18h18');
                }
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!nav.contains(e.target) && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('menu-open');
                    const iconPath = navToggle.querySelector('svg path');
                    if (iconPath) iconPath.setAttribute('d', 'M3 12h18M3 6h18M3 18h18');
                }
            });
            
            // Close menu when pressing Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('menu-open');
                    navToggle.focus();
                }
            });

            // Close on nav-link click (for single-page anchors)
            navMenu.addEventListener('click', function(e) {
                const target = e.target;
                if (target && target.closest('a')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('menu-open');
                    const iconPath = navToggle.querySelector('svg path');
                    if (iconPath) iconPath.setAttribute('d', 'M3 12h18M3 6h18M3 18h18');
                }
            });

            // Reset on resize to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 1024 && navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                    document.body.classList.remove('menu-open');
                    const iconPath = navToggle.querySelector('svg path');
                    if (iconPath) iconPath.setAttribute('d', 'M3 12h18M3 6h18M3 18h18');
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

                    // Trigger count-up for metrics
                    const nums = entry.target.querySelectorAll('.metric-num');
                    if (nums && nums.length) {
                        nums.forEach(function(el){
                            startCountUp(el);
                        });
                    }
                }
            });
        }, observerOptions);

        // Observe elements with animation class
        const animatedElements = document.querySelectorAll('.animate-on-scroll');
        animatedElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    // Count-up utility
    function startCountUp(element) {
        if (element.dataset.counted === 'true') return;
        const target = parseFloat(element.getAttribute('data-count-to') || '0');
        const duration = parseInt(element.getAttribute('data-duration') || '1000', 10);
        const suffix = element.getAttribute('data-suffix') || '';
        const decimals = parseInt(element.getAttribute('data-decimals') || '0', 10);
        const startTime = performance.now();

        function easeOutQuad(t){ return t*(2-t); }

        function frame(now){
            const progress = Math.min(1, (now - startTime) / duration);
            const eased = easeOutQuad(progress);
            const value = target * eased;
            element.textContent = value.toFixed(decimals) + suffix;
            if (progress < 1) {
                requestAnimationFrame(frame);
            } else {
                element.dataset.counted = 'true';
            }
        }
        requestAnimationFrame(frame);
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

                    // Count-up for metrics on load if visible
                    const nums = element.querySelectorAll('.metric-num');
                    if (nums && nums.length) {
                        nums.forEach(function(el){
                            startCountUp(el);
                        });
                    }
                }
            });
        });
    }

    // Calculator logic
    function initCalculator() {
        const form = document.getElementById('calc-form');
        if (!form) return;

        const ordersEl = document.getElementById('calc-orders');
        const aovEl = document.getElementById('calc-aov');
        const marginEl = document.getElementById('calc-margin');
        const efficiencyEl = document.getElementById('calc-efficiency');
        const profitUpliftEl = document.getElementById('calc-profit-uplift');
        const timeEl = document.getElementById('calc-time');

        const revenueOut = document.getElementById('calc-revenue');
        const profitOut = document.getElementById('calc-profit');
        const profitIncOut = document.getElementById('calc-profit-increase');
        const profitNewOut = document.getElementById('calc-profit-new');
        const hoursOut = document.getElementById('calc-hours-saved');
        const resetBtn = document.getElementById('calc-reset');

        function toNumber(el){
            const v = parseFloat((el && el.value) || '0');
            return isNaN(v) ? 0 : v;
        }

        function formatCurrency(num){
            return new Intl.NumberFormat('ru-RU', { style: 'currency', currency: 'EUR', maximumFractionDigits: 0 }).format(num);
        }

        function animateText(el, from, to, formatter, duration){
            const start = performance.now();
            function frame(now){
                const p = Math.min(1, (now - start) / duration);
                const eased = p*(2-p);
                const val = from + (to - from) * eased;
                el.textContent = formatter(val);
                if (p < 1) requestAnimationFrame(frame);
            }
            requestAnimationFrame(frame);
        }

        function recalc(){
            const orders = toNumber(ordersEl);
            const aov = toNumber(aovEl);
            const marginPct = toNumber(marginEl) / 100;
            const effPct = toNumber(efficiencyEl) / 100;
            const profitUpliftPct = toNumber(profitUpliftEl) / 100;
            const minutesPerOrder = toNumber(timeEl);

            const revenue = orders * aov;
            const profit = revenue * marginPct;
            const profitIncrease = profit * profitUpliftPct;
            const profitNew = profit + profitIncrease;
            const hoursSaved = (orders * minutesPerOrder * effPct) / 60;

            const currentRevenue = parseFloat(revenueOut.dataset.value || '0');
            const currentProfit = parseFloat(profitOut.dataset.value || '0');
            const currentProfitInc = parseFloat(profitIncOut.dataset.value || '0');
            const currentProfitNew = parseFloat(profitNewOut.dataset.value || '0');
            const currentHours = parseFloat(hoursOut.dataset.value || '0');

            revenueOut.dataset.value = String(revenue);
            profitOut.dataset.value = String(profit);
            profitIncOut.dataset.value = String(profitIncrease);
            profitNewOut.dataset.value = String(profitNew);
            hoursOut.dataset.value = String(hoursSaved);

            animateText(revenueOut, currentRevenue, revenue, v => formatCurrency(v), 600);
            animateText(profitOut, currentProfit, profit, v => formatCurrency(v), 600);
            animateText(profitIncOut, currentProfitInc, profitIncrease, v => formatCurrency(v), 600);
            animateText(profitNewOut, currentProfitNew, profitNew, v => formatCurrency(v), 600);
            animateText(hoursOut, currentHours, hoursSaved, v => `${v.toFixed(1)} ч/мес`, 600);
        }

        // Initialize outputs
        revenueOut.textContent = '—';
        profitOut.textContent = '—';
        profitIncOut.textContent = '—';
        profitNewOut.textContent = '—';
        hoursOut.textContent = '—';

        // Recalculate on input
        [ordersEl, aovEl, marginEl, efficiencyEl, profitUpliftEl, timeEl].forEach(function(input){
            input.addEventListener('input', recalc);
            input.addEventListener('change', recalc);
        });

        // Reset button
        if (resetBtn) {
            resetBtn.addEventListener('click', function(){
                ordersEl.value = '1000';
                aovEl.value = '50';
                marginEl.value = '30';
                efficiencyEl.value = '40';
                profitUpliftEl.value = '25';
                timeEl.value = '10';
                revenueOut.dataset.value = '0';
                profitOut.dataset.value = '0';
                profitIncOut.dataset.value = '0';
                profitNewOut.dataset.value = '0';
                hoursOut.dataset.value = '0';
                recalc();
            });
        }

        // Lazy initialize when panel becomes visible
        const panel = document.getElementById('calc-form');
        if (panel) {
            const rect = panel.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                recalc();
            } else {
                const io = new IntersectionObserver(function(entries){
                    entries.forEach(function(entry){
                        if (entry.isIntersecting) {
                            recalc();
                            io.disconnect();
                        }
                    });
                }, { threshold: 0.1 });
                io.observe(panel);
            }
        }
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
        initCalculator();
    }

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();