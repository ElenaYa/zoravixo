<?php
$page_title = "Услуги";
$page_description = "Полный спектр услуг Zoravixo: автоматизация заказов, продвинутая аналитика, интеграции и консультации для вашего онлайн-бизнеса.";
$page_keywords = "услуги zoravixo, автоматизация заказов, аналитика e-commerce, интеграции, консультации онлайн-бизнеса";

include 'includes/header.php';
?>

<section class="section-hero section-hero--compact">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="text-center">
            <div class="hero-content animate-on-scroll">
                <h1 class="mb-lg">
                    Комплексные решения для <span class="text-accent-3">роста</span> вашего бизнеса
                </h1>
                <p class="mb-xl" style="font-size: 1.125rem; color: var(--muted); max-width: 600px; margin-left: auto; margin-right: auto;">
                    От автоматизации заказов до глубокой аналитики — всё что нужно для масштабирования онлайн-бизнеса.
                </p>
                <a href="#services" class="btn btn-primary">
                    Изучить услуги
                    <svg class="icon icon-sm" viewBox="0 0 24 24">
                        <path d="M7 17L17 7M17 7H7M17 7v10"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="section">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Что мы предлагаем</h2>
            <p class="text-muted" style="font-size: 1.125rem; max-width: 600px; margin: 0 auto; margin-bottom: var(--space-xl);">
                Полный стек технологий для автоматизации и оптимизации вашего онлайн-бизнеса
            </p>
        </div>
        
        <div class="grid grid-2 services-overview-grid">
            <div id="automation" class="panel panel-accent-1 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-1" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3 class="mb-md">Автоматизация заказов</h3>
                <p class="text-muted mb-lg">
                    Полная автоматизация жизненного цикла заказа — от поступления до выполнения и доставки клиенту.
                </p>
                
                <h4 class="mb-md text-accent-1">Возможности:</h4>
                <ul style="list-style: none; padding: 0; color: var(--muted); margin-bottom: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;">✓ Автоматическое распределение заказов</li>
                    <li style="margin-bottom: 0.5rem;">✓ Управление запасами в реальном времени</li>
                    <li style="margin-bottom: 0.5rem;">✓ Интеграция с службами доставки</li>
                    <li style="margin-bottom: 0.5rem;">✓ Уведомления и отслеживание статусов</li>
                    <li style="margin-bottom: 0.5rem;">✓ Обработка возвратов и обменов</li>
                </ul>
                
                <div class="panel" style="background: rgba(255, 183, 3, 0.1); border-color: var(--c1);">
                    <strong>Результат:</strong> Сокращение времени обработки заказов на 60% и снижение ошибок на 85%
                </div>
            </div>
            
            <div id="analytics" class="panel panel-accent-2 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-2" viewBox="0 0 24 24">
                        <path d="M3 3v18h18M8 17l4-4 4 4 6-6"/>
                    </svg>
                </div>
                <h3 class="mb-md">Продвинутая аналитика</h3>
                <p class="text-muted mb-lg">
                    Глубокие инсайты о вашем бизнесе с помощью машинного обучения и предиктивной аналитики.
                </p>
                
                <h4 class="mb-md text-accent-2">Возможности:</h4>
                <ul style="list-style: none; padding: 0; color: var(--muted); margin-bottom: 1.5rem;">
                    <li style="margin-bottom: 0.5rem;">✓ Анализ LTV и когортной аналитики</li>
                    <li style="margin-bottom: 0.5rem;">✓ Прогнозирование спроса и продаж</li>
                    <li style="margin-bottom: 0.5rem;">✓ Сегментация клиентов</li>
                    <li style="margin-bottom: 0.5rem;">✓ A/B тестирование и оптимизация</li>
                    <li style="margin-bottom: 0.5rem;">✓ Персонализированные дашборды</li>
                </ul>
                
                <div class="panel" style="background: rgba(33, 158, 188, 0.1); border-color: var(--c2);">
                    <strong>Результат:</strong> Увеличение конверсии на 35% и ROI маркетинга на 45%
                </div>
            </div>

            <div id="integration" class="panel panel-accent-3 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-3" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="mb-md">Интеграции и API</h3>
                <p class="text-muted mb-lg">
                    Соединяем ваш стек: CMS, CRM, ERP, маркетплейсы и доставку. Открытый API и вебхуки.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Shopify, WooCommerce, Magento, OpenCart</li>
                    <li style="margin-bottom: 0.5rem;">✓ Salesforce, HubSpot, AmoCRM, Bitrix24</li>
                    <li style="margin-bottom: 0.5rem;">✓ Вебхуки и SDK для разработчиков</li>
                </ul>
                <div class="panel" style="background: rgba(142, 50, 255, 0.1); border-color: var(--c3);">
                    <strong>Результат:</strong> Бесшовная синхронизация данных и сокращение ручных операций на 70%
                </div>
            </div>

            <div id="reporting" class="panel panel-accent-4 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-4" viewBox="0 0 24 24">
                        <path d="M3 3v18h18"/>
                        <rect x="7" y="12" width="3" height="6" rx="1"/>
                        <rect x="12" y="9" width="3" height="9" rx="1"/>
                        <rect x="17" y="6" width="3" height="12" rx="1"/>
                    </svg>
                </div>
                <h3 class="mb-md">Отчетность и мониторинг</h3>
                <p class="text-muted mb-lg">
                    Автоматические отчеты, алерты и мониторинг SLA в реальном времени.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Плановые отчеты на Email/Slack</li>
                    <li style="margin-bottom: 0.5rem;">✓ Алерты по KPI и инцидентам</li>
                    <li style="margin-bottom: 0.5rem;">✓ Экспорт в CSV/BI-системы</li>
                </ul>
                <div class="panel" style="background: rgba(42, 157, 143, 0.1); border-color: var(--c4);">
                    <strong>Результат:</strong> Быстрая реакция на отклонения и контроль SLA в реальном времени
                </div>
            </div>
        </div>
    </div>
</section>

<section class="color-block color-block-4">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 4rem;">
            <div class="animate-on-scroll">
                <h2 class="mb-lg">Интеграции и API</h2>
                <p class="mb-md" style="font-size: 1.125rem;">
                    Соединяем ваши системы в единую экосистему для максимальной эффективности.
                </p>
                <p style="color: rgba(15, 16, 32, 0.8); margin-bottom: 2rem;">
                    Наша платформа легко интегрируется с популярными CMS, CRM-системами, маркетплейсами и службами доставки.
                </p>
                
                <div class="grid grid-2" style="gap: 1rem;">
                    <div class="panel" style="background: rgba(15, 16, 32, 0.1);">
                        <h4 style="color: var(--bg); margin-bottom: 0.5rem;">E-commerce платформы</h4>
                        <p style="color: rgba(15, 16, 32, 0.8); font-size: 0.875rem;">Shopify, WooCommerce, Magento, OpenCart</p>
                    </div>
                    <div class="panel" style="background: rgba(15, 16, 32, 0.1);">
                        <h4 style="color: var(--bg); margin-bottom: 0.5rem;">CRM системы</h4>
                        <p style="color: rgba(15, 16, 32, 0.8); font-size: 0.875rem;">Salesforce, HubSpot, AmoCRM, Bitrix24</p>
                    </div>
                    <div class="panel" style="background: rgba(15, 16, 32, 0.1);">
                        <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Маркетплейсы</h4>
                        <p style="color: rgba(15, 16, 32, 0.8); font-size: 0.875rem;">Amazon, eBay, Ozon, Wildberries</p>
                    </div>
                    <div class="panel" style="background: rgba(15, 16, 32, 0.1);">
                        <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Доставка</h4>
                        <p style="color: rgba(15, 16, 32, 0.8); font-size: 0.875rem;">DHL, FedEx, СДЭК, Почта России</p>
                    </div>
                </div>
            </div>
            <div class="animate-on-scroll">
                <img src="img/integrations.webp" alt="Интеграции" style="width: 100%; border-radius: var(--radius-xl);">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Консультационные услуги</h2>
            <p class="text-muted" style="font-size: 1.125rem;">
                Экспертная поддержка на всех этапах развития вашего бизнеса
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="panel panel-accent-3 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-3" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                        <path d="M12 17h.01"/>
                    </svg>
                </div>
                <h3 class="mb-md">Стратегический консалтинг</h3>
                <p class="text-muted mb-lg">
                    Анализ бизнес-процессов и разработка стратегии оптимизации для максимального ROI.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">• Аудит текущих процессов</li>
                    <li style="margin-bottom: 0.5rem;">• Разработка roadmap'а</li>
                    <li style="margin-bottom: 0.5rem;">• KPI и метрики эффективности</li>
                </ul>
            </div>
            
            <div class="panel panel-accent-1 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-1" viewBox="0 0 24 24">
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                    </svg>
                </div>
                <h3 class="mb-md">Техническая поддержка</h3>
                <p class="text-muted mb-lg">
                    Круглосуточная поддержка, обучение команды и помощь в настройке системы под ваши нужды.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">• 24/7 техническая поддержка</li>
                    <li style="margin-bottom: 0.5rem;">• Обучение персонала</li>
                    <li style="margin-bottom: 0.5rem;">• Персональный менеджер</li>
                </ul>
            </div>
            
            <div class="panel panel-accent-2 animate-on-scroll">
                <div class="mb-lg">
                    <svg class="icon icon-lg text-accent-2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h3 class="mb-md">Кастомизация</h3>
                <p class="text-muted mb-lg">
                    Разработка индивидуальных решений и функций специально под требования вашего бизнеса.
                </p>
                <ul style="list-style: none; padding: 0; color: var(--muted);">
                    <li style="margin-bottom: 0.5rem;">• Кастомные интеграции</li>
                    <li style="margin-bottom: 0.5rem;">• Индивидуальные отчеты</li>
                    <li style="margin-bottom: 0.5rem;">• Персонализированный UI</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="color-block color-block-1">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Чего мы ищем в партнерах</h2>
            <p style="font-size: 1.125rem; max-width: 600px; margin: 0 auto;">
                Идеальные клиенты для долгосрочного сотрудничества и взаимного роста
            </p>
        </div>
        
        <div class="grid grid-2" style="gap: 4rem; align-items: center;">
            <div class="animate-on-scroll">
                <img src="img/ideal-client.webp" alt="Идеальный клиент" style="width: 100%; border-radius: var(--radius-xl);">
            </div>
            
            <div class="animate-on-scroll">
                <h3 class="mb-lg"></h3>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Амбициозность</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Стремление к росту и готовность инвестировать в технологии для достижения целей.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Масштаб</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Онлайн-бизнес с оборотом от €50k в месяц или планами достичь этого уровня.
                    </p>
                </div>
                
                <div class="panel mb-lg" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Открытость к инновациям</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Готовность внедрять новые решения и оптимизировать процессы.
                    </p>
                </div>
                
                <div class="panel" style="background: rgba(15, 16, 32, 0.1);">
                    <h4 style="color: var(--bg); margin-bottom: 0.5rem;">Долгосрочное партнерство</h4>
                    <p style="color: rgba(15, 16, 32, 0.8);">
                        Ориентация на построение долгосрочных отношений и совместный рост.
                    </p>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="section">
    <div class="container">
        <div class="text-center mb-2xl animate-on-scroll">
            <h2 class="mb-lg">Тарифные планы</h2>
            <p class="text-muted" style="font-size: 1.125rem;">
                Выберите план, который подходит вашему бизнесу
            </p>
        </div>
        
        <div class="grid grid-3">
            <div class="panel animate-on-scroll">
                <div class="text-center mb-lg">
                    <h3 class="text-accent-2 mb-sm">Starter</h3>
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">€299</div>
                    <p class="text-muted">в месяц</p>
                </div>
                
                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-2" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        До 1,000 заказов/месяц
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-2" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Базовая аналитика
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-2" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        5 интеграций
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-2" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Email поддержка
                    </li>
                </ul>
                
                <a href="/contacts.php" class="btn btn-secondary" style="width: 100%; justify-content: center;">Выбрать план</a>
            </div>
            
            <div class="panel panel-accent-3 animate-on-scroll" style="position: relative;">
                <div style="position: absolute; top: -10px; right: 20px; background: var(--c3); color: var(--bg); padding: 0.25rem 1rem; border-radius: var(--radius); font-size: 0.875rem; font-weight: 600;">
                    Популярный
                </div>
                
                <div class="text-center mb-lg">
                    <h3 class="text-accent-3 mb-sm">Professional</h3>
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">€799</div>
                    <p class="text-muted">в месяц</p>
                </div>
                
                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-3" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        До 10,000 заказов/месяц
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-3" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Продвинутая аналитика + ИИ
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-3" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Неограниченные интеграции
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-3" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Приоритетная поддержка 24/7
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-3" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Персональный менеджер
                    </li>
                </ul>
                
                <a href="/contacts.php" class="btn btn-primary" style="width: 100%; justify-content: center;">Выбрать план</a>
            </div>
            
            <div class="panel animate-on-scroll">
                <div class="text-center mb-lg">
                    <h3 class="text-accent-1 mb-sm">Enterprise</h3>
                    <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem;">Индивидуально</div>
                    <p class="text-muted">под ваши нужды</p>
                </div>
                
                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-1" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Неограниченные заказы
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-1" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Кастомные решения
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-1" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Выделенная инфраструктура
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-1" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        Dedicated команда
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: center;">
                        <svg class="icon icon-sm text-accent-1" style="margin-right: 0.5rem;" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        SLA 99.99%
                    </li>
                </ul>
                
                <a href="/contacts.php" class="btn btn-ghost" style="width: 100%; justify-content: center;">Связаться</a>
            </div>
        </div>
    </div>
</section>

<section class="color-block color-block-3">
    <div class="container">
        <div class="text-center animate-on-scroll">
            <h2 class="mb-lg">Готовы начать?</h2>
            <p style="font-size: 1.125rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                Получите бесплатную консультацию и узнайте, как Zoravixo может трансформировать ваш бизнес.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="/contacts.php" class="btn" style="background: var(--bg); color: var(--fg);">
                    Бесплатная консультация
                    <svg class="icon icon-sm" viewBox="0 0 24 24">
                        <path d="M5 12h14m-7-7 7 7-7 7"/>
                    </svg>
                </a>
                <a href="#services" class="btn" style="background: transparent; border-color: var(--bg); color: var(--bg);">
                    Изучить подробнее
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>