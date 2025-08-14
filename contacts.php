<?php
$page_title = "Контакты";
$page_description = "Свяжитесь с командой Zoravixo для получения консультации по автоматизации заказов и аналитике. Офис в Варшаве, Польша.";
$page_keywords = "контакты zoravixo, консультация, офис варшава польша, связаться с zoravixo, техническая поддержка";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="section-hero section-hero--compact">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="text-center">
            <div class="hero-content animate-on-scroll">
                <h1 class="mb-lg">
                    Давайте обсудим ваш <span class="text-accent-4">проект</span>
                </h1>
                <p class="mb-xl" style="font-size: 1.125rem; color: var(--muted); max-width: 600px; margin-left: auto; margin-right: auto;">
                    Свяжитесь с нами для бесплатной консультации и узнайте, как Zoravixo может помочь вашему бизнесу.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 4rem; align-items: start;">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <div class="panel">
                    <h2 class="mb-lg">Отправить сообщение</h2>
                    <p class="text-muted mb-xl">
                        Заполните форму ниже, и наш эксперт свяжется с вами в течение 24 часов.
                    </p>
                    
                    <form data-validate>
                        <div class="form-group">
                            <label for="name" class="form-label">Имя *</label>
                            <input type="text" id="name" name="name" class="form-input" required placeholder="Ваше имя">
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" id="email" name="email" class="form-input" required placeholder="your@email.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="+48 123 456 789">
                        </div>
                        <div class="form-group">
                            <label for="service_interest" class="form-label">Интересующие услуги</label>
                            <select id="service_interest" name="service_interest" class="form-select">
                                <option value="">Выберите услугу</option>
                                <option value="automation">Автоматизация заказов</option>
                                <option value="analytics">Продвинутая аналитика</option>
                                <option value="integration">Интеграции</option>
                                <option value="consulting">Консультации</option>
                                <option value="all">Все услуги</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Сообщение *</label>
                            <textarea id="message" name="message" class="form-textarea" required placeholder="Расскажите о вашем проекте и задачах, которые нужно решить..."></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                <input type="checkbox" required style="margin: 0;">
                                <span style="font-size: 0.875rem;">
                                    Я согласен с <a href="/privacy-policy.php" class="text-accent-2">политикой конфиденциальности</a> и 
                                    <a href="/terms-of-use.php" class="text-accent-2">условиями использования</a>
                                </span>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Отправить сообщение
                            <svg class="icon icon-sm" viewBox="0 0 24 24">
                                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="animate-on-scroll">
                <div class="panel panel-accent-4 mb-xl">
                    <h3 class="mb-lg">Контактная информация</h3>
                    
                    <div class="mb-lg">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--c4); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg class="icon text-bg" viewBox="0 0 24 24">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-sm">Офис</h4>
                                <p class="text-muted mb-0"><a href="https://maps.app.goo.gl/1234567890" target="_blank">ul. Prosta 32<br>00-838 Warszawa, Poland</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-lg">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--c2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg class="icon text-bg" viewBox="0 0 24 24">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-sm">Телефон</h4>
                                <p class="mb-0"><a href="tel:+48223079458" class="text-accent-2">+48 22 307 94 58</a></p>
                                <p class="text-muted" style="font-size: 0.875rem;">Пн-Пт: 9:00-18:00 CET</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-lg">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 50px; height: 50px; background: var(--c1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg class="icon text-bg" viewBox="0 0 24 24">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-sm">Email</h4>
                                <p class="mb-0"><a href="mailto:info@zoravixo.com" class="text-accent-2">info@zoravixo.com</a></p>
                                <p class="text-muted" style="font-size: 0.875rem;">Ответим в течение 2 часов</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Contact Options -->
                <div class="panel">
                    <h4 class="mb-lg">Быстрая связь</h4>
                    
                    <div class="grid grid-2" style="gap: 1rem;">
                        <a href="tel:+48223079458" class="btn btn-secondary" style="justify-content: center;">
                            <svg class="icon icon-sm" viewBox="0 0 24 24">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            Позвонить
                        </a>
                        
                        <a href="mailto:info@zoravixo.com" class="btn btn-ghost" style="justify-content: center;">
                            <svg class="icon icon-sm" viewBox="0 0 24 24">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="color-block color-block-2">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Часто задаваемые вопросы</h2>
            <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto var(--space-xl);">
                Ответы на популярные вопросы о наших услугах
            </p>
        </div>
        
        <div class="grid grid-2" style="gap: 2rem; align-items: start;">
            <div class="animate-on-scroll">
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Сколько времени занимает внедрение?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Базовая интеграция занимает 1-2 недели. Полное внедрение с настройкой всех процессов — 4-6 недель в зависимости от сложности.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Какие платформы вы поддерживаете?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Shopify, WooCommerce, Magento, OpenCart и многие другие. Также можем создать кастомную интеграцию через API.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Есть ли тестовый период?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Да, предоставляем 14-дневный тестовый период для всех планов. Возможность полноценно протестировать все функции.
                    </p>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Какая поддержка предоставляется?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        24/7 техническая поддержка, персональный менеджер для Enterprise клиентов, обучение команды и документация.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Безопасны ли мои данные?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Да, используем шифрование данных, соответствуем GDPR, регулярные бэкапы. SOC 2 Type II сертификация.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 1rem;">Можно ли масштабировать план?</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Конечно! Вы можете изменять план в любое время в зависимости от роста вашего бизнеса.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Location -->
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 4rem; align-items: center;">
            <div class="animate-on-scroll">
                <h2 class="mb-lg">Наш офис в Варшаве</h2>
                <p class="mb-md" style="font-size: 1.125rem;">
                    Удобное расположение в деловом центре Варшавы с отличной транспортной доступностью.
                </p>
                <p class="text-muted mb-lg">
                    Приглашаем на очную встречу для обсуждения вашего проекта. Рядом есть парковка и кафе для комфортного общения.
                </p>
                
                <div class="panel panel-accent-1">
                    <h4 class="text-accent-1 mb-md">Часы работы офиса:</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.5rem;">📅 Понедельник - Пятница: 9:00 - 18:00</li>
                        <li style="margin-bottom: 0.5rem;">📅 Суббота: 10:00 - 15:00</li>
                        <li style="margin-bottom: 0.5rem;">📅 Воскресенье: по договоренности</li>
                    </ul>
                    <p class="text-muted mt-md" style="font-size: 0.875rem;">
                        *Рекомендуем записаться на встречу заранее
                    </p>
                </div>
            </div>
            
            <div class="animate-on-scroll">
                <!-- Map placeholder -->
                <div style="background: linear-gradient(135deg, var(--c4), rgba(42, 157, 143, 0.8)); border-radius: var(--radius-xl); height: 400px; display: flex; align-items: center; justify-content: center; color: var(--bg); text-align: center; position: relative; overflow: hidden;">
                    <div style="position: relative; z-index: 2;">
                        <svg class="icon icon-lg mb-md" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <h4 class="mb-sm">ul. Prosta 32</h4>
                        <p>00-838 Warszawa, Poland</p>
                        <a href="https://maps.app.goo.gl/Gip8Tb7etZzsEoaf9" target="_blank" rel="noopener" class="btn mt-md" style="background: var(--bg); color: var(--c4);">
                            Открыть в картах
                            <svg class="icon icon-sm" viewBox="0 0 24 24">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Background pattern -->
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; z-index: 1;">
                        <svg width="100%" height="100%" viewBox="0 0 400 400" style="object-fit: cover;">
                            <defs>
                                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="currentColor" stroke-width="1"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>