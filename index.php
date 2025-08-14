<?php
$page_title = "Главная";
$page_description = "Zoravixo - современная платформа автоматизации заказов и продвинутой аналитики для онлайн-бизнеса. Увеличьте эффективность и прибыль с помощью умных решений.";
$page_keywords = "автоматизация заказов, аналитика онлайн-бизнеса, e-commerce решения, управление заказами, бизнес-аналитика, zoravixo";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="section-hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 4rem;">
            <div class="hero-content animate-on-scroll">
                <h1 class="mb-lg" style="font-size: 3.6rem;">
                    Автоматизация заказов и <span class="text-accent-2">аналитика</span> для вашего онлайн-бизнеса
                </h1>
                <p class="mb-xl" style="font-size: 1.125rem; color: var(--muted);">
                    Современная платформа, которая объединяет управление заказами, продвинутую аналитику и автоматизацию процессов. Увеличьте эффективность на 40% и прибыль на 25%.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="/contacts.php" class="btn btn-primary">
                        Начать бесплатно
                        <svg class="icon icon-sm" viewBox="0 0 24 24">
                            <path d="M5 12h14m-7-7 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#features" class="btn btn-secondary">
                        Узнать больше
                    </a>
                </div>
            </div>
            <div class="animate-on-scroll" style="position: relative;">
                <img src="img/hero.webp" alt="Дашборд Zoravixo" style="width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);">
                
                <!-- Floating metrics cards -->
                <div class="panel" style="position: absolute; top: 20px; right: 20px; padding: 1rem; background: rgba(255, 183, 3, 0.95); color: var(--bg); min-width: 120px;">
                    <div style="font-size: 1.5rem; font-weight: 700;">+40%</div>
                    <div style="font-size: 0.875rem;">Эффективность</div>
                </div>
                
                <div class="panel" style="position: absolute; bottom: 20px; left: 20px; padding: 1rem; background: rgba(33, 158, 188, 0.95); color: var(--bg); min-width: 120px;">
                    <div style="font-size: 1.5rem; font-weight: 700;">+25%</div>
                    <div style="font-size: 0.875rem;">Прибыль</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="section">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Мощные инструменты для роста бизнеса</h2>
            <p class="text-muted" style="font-size: 1.125rem; max-width: 600px; margin: 0 auto;">
                Полный набор решений для автоматизации и оптимизации вашего онлайн-бизнеса
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="panel panel-accent-1 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-1" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="mb-md">Автоматизация заказов</h3>
                <p class="text-muted mb-lg">
                    Полная автоматизация процесса обработки заказов от поступления до доставки. Умные алгоритмы распределения и контроля качества.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Автоматическое распределение заказов</li>
                    <li style="margin-bottom: 0.5rem;">✓ Интеграция с популярными CMS</li>
                    <li style="margin-bottom: 0.5rem;">✓ Контроль качества и статусов</li>
                </ul>
            </div>
            
            <div class="panel panel-accent-2 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-2" viewBox="0 0 24 24">
                        <path d="M3 3v18h18M8 17l4-4 4 4 6-6"/>
                    </svg>
                </div>
                <h3 class="mb-md">Продвинутая аналитика</h3>
                <p class="text-muted mb-lg">
                    Глубокая аналитика продаж, поведения клиентов и эффективности каналов. Прогнозирование и рекомендации на основе ИИ.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Анализ LTV и конверсий</li>
                    <li style="margin-bottom: 0.5rem;">✓ Прогнозирование спроса</li>
                    <li style="margin-bottom: 0.5rem;">✓ Персонализированные дашборды</li>
                </ul>
            </div>
            
            <div class="panel panel-accent-3 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-3" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="mb-md">Интеграции</h3>
                <p class="text-muted mb-lg">
                    Простая интеграция с популярными платформами электронной коммерции, CRM-системами и службами доставки.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Shopify, WooCommerce, Magento</li>
                    <li style="margin-bottom: 0.5rem;">✓ CRM и системы учета</li>
                    <li style="margin-bottom: 0.5rem;">✓ API для кастомных решений</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- How it works -->
<section class="color-block color-block-2">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Как это работает</h2>
            <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto;">
                Простая интеграция и быстрый старт за 3 шага
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="text-center animate-on-scroll">
                <div style="width: 80px; height: 80px; background: rgba(15, 16, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg);">
                    <span style="font-size: 2rem; font-weight: 700; color: var(--bg);">1</span>
                </div>
                <h3 class="mb-md">Подключение</h3>
                <p>Интегрируйте Zoravixo с вашим магазином за 15 минут. Поддерживаем все популярные платформы.</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div style="width: 80px; height: 80px; background: rgba(15, 16, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg);">
                    <span style="font-size: 2rem; font-weight: 700; color: var(--bg);">2</span>
                </div>
                <h3 class="mb-md">Настройка</h3>
                <p>Настройте правила автоматизации и аналитики под ваши бизнес-процессы с помощью простого интерфейса.</p>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div style="width: 80px; height: 80px; background: rgba(15, 16, 32, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-lg);">
                    <span style="font-size: 2rem; font-weight: 700; color: var(--bg);">3</span>
                </div>
                <h3 class="mb-md">Результат</h3>
                <p>Получайте подробную аналитику, автоматизированные процессы и рост прибыли уже с первого дня.</p>
            </div>
        </div>
    </div>
</section>

<!-- Integrations -->
<section class="section">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Интеграции с популярными платформами</h2>
            <p class="text-muted" style="font-size: 1.125rem;">
                Работаем с ведущими решениями для электронной коммерции
            </p>
        </div>
        
        <div class="grid grid-4 animate-on-scroll">
            <div class="panel text-center">
                <svg class="icon" viewBox="0 0 24 24" aria-label="Shopify" role="img" style="width: 60px; height: 60px; color: var(--c4); margin-bottom: 1rem;">
                    <path d="M6 7h12l-1 12H7L6 7z"/>
                    <path d="M9 7a3 3 0 0 1 6 0" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h4>Shopify</h4>
                <p class="text-muted">Полная интеграция с магазинами Shopify</p>
            </div>
            
            <div class="panel text-center">
                <svg class="icon" viewBox="0 0 24 24" aria-label="WooCommerce" role="img" style="width: 60px; height: 60px; color: var(--c3); margin-bottom: 1rem;">
                    <path d="M4 4h16v10H7l-3 3V4z"/>
                    <path d="M8 7l2 6 2-4 2 4 2-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h4>WooCommerce</h4>
                <p class="text-muted">Поддержка WordPress + WooCommerce</p>
            </div>
            
            <div class="panel text-center">
                <svg class="icon" viewBox="0 0 24 24" aria-label="Magento" role="img" style="width: 60px; height: 60px; color: var(--c1); margin-bottom: 1rem;">
                    <path d="M12 2l8 4v8l-8 4-8-4V6z"/>
                    <path d="M8 7v8M16 7v8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <h4>Magento</h4>
                <p class="text-muted">Интеграция с Magento 2.x</p>
            </div>
            
            <div class="panel text-center">
                <svg class="icon" viewBox="0 0 24 24" aria-label="OpenCart" role="img" style="width: 60px; height: 60px; color: var(--c2); margin-bottom: 1rem;">
                    <path d="M6 6h14l-2 8H8L6 6z"/>
                    <circle cx="9" cy="18" r="1.5"/>
                    <circle cx="17" cy="18" r="1.5"/>
                </svg>
                <h4>OpenCart</h4>
                <p class="text-muted">Поддержка OpenCart платформы</p>
            </div>
        </div>
    </div>
</section>

<!-- Metrics -->
<section class="color-block color-block-4">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Результаты наших клиентов</h2>
            <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto;">
                Цифры, которые говорят сами за себя
            </p>
        </div>
        
        <div class="grid grid-4">
            <div class="text-center animate-on-scroll">
                <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--bg);">500+</div>
                <div style="font-size: 1.125rem; color: rgba(15, 16, 32, 0.8);">Активных клиентов</div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--bg);">40%</div>
                <div style="font-size: 1.125rem; color: rgba(15, 16, 32, 0.8);">Рост эффективности</div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--bg);">25%</div>
                <div style="font-size: 1.125rem; color: rgba(15, 16, 32, 0.8);">Увеличение прибыли</div>
            </div>
            
            <div class="text-center animate-on-scroll">
                <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; color: var(--bg);">99.9%</div>
                <div style="font-size: 1.125rem; color: rgba(15, 16, 32, 0.8);">Время работы системы</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="panel" style="text-align: center; background: linear-gradient(135deg, var(--c3), rgba(142, 50, 255, 0.8)); color: var(--bg); padding: 4rem 2rem;">
            <div class="animate-on-scroll">
                <h2 class="mb-lg">Готовы увеличить прибыль?</h2>
                <p style="font-size: 1.125rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Присоединяйтесь к сотням успешных онлайн-магазинов, которые уже используют Zoravixo для автоматизации и роста бизнеса.
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="/contacts.php" class="btn" style="background: var(--bg); color: var(--fg);">
                        Начать бесплатно
                        <svg class="icon icon-sm" viewBox="0 0 24 24">
                            <path d="M5 12h14m-7-7 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="/about.php" class="btn" style="background: transparent; border-color: var(--bg); color: var(--bg);">
                        Узнать больше
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>