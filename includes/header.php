<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Zoravixo">
    
    <?php if (isset($page_title)): ?>
    <title><?= htmlspecialchars($page_title) ?> | Zoravixo</title>
    <?php else: ?>
    <title>Zoravixo - Автоматизация заказов и аналитика для онлайн-бизнеса</title>
    <?php endif; ?>
    
    <?php if (isset($page_description)): ?>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    <?php else: ?>
    <meta name="description" content="Современная платформа автоматизации заказов и продвинутой аналитики для онлайн-бизнеса. Увеличьте эффективность и прибыль с помощью умных решений Zoravixo.">
    <?php endif; ?>
    
    <?php if (isset($page_keywords)): ?>
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
    <?php else: ?>
    <meta name="keywords" content="автоматизация заказов, аналитика онлайн-бизнеса, e-commerce решения, управление заказами, бизнес-аналитика">
    <?php endif; ?>
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?= isset($page_title) ? htmlspecialchars($page_title) . ' | Zoravixo' : 'Zoravixo - Автоматизация заказов и аналитика для онлайн-бизнеса' ?>">
    <meta property="og:description" content="<?= isset($page_description) ? htmlspecialchars($page_description) : 'Современная платформа автоматизации заказов и продвинутой аналитики для онлайн-бизнеса.' ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://zoravixo.com<?= $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:image" content="https://zoravixo.com/img/og-image.webp">
    <meta property="og:site_name" content="Zoravixo">
    <meta property="og:locale" content="ru_RU">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= isset($page_title) ? htmlspecialchars($page_title) . ' | Zoravixo' : 'Zoravixo - Автоматизация заказов и аналитика для онлайн-бизнеса' ?>">
    <meta name="twitter:description" content="<?= isset($page_description) ? htmlspecialchars($page_description) : 'Современная платформа автоматизации заказов и продвинутой аналитики для онлайн-бизнеса.' ?>">
    <meta name="twitter:image" content="https://zoravixo.com/img/og-image.webp">
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    
    <!-- Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Zoravixo",
      "url": "https://zoravixo.com",
      "logo": "https://zoravixo.com/img/logo.svg",
      "description": "Современная платформа автоматизации заказов и продвинутой аналитики для онлайн-бизнеса",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "ul. Prosta 32",
        "addressLocality": "Warszawa",
        "postalCode": "00-838",
        "addressCountry": "PL"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+48-22-307-94-58",
        "contactType": "customer service",
        "email": "info@zoravixo.com"
      },
      "sameAs": []
    }
    </script>
</head>
<body>
    <!-- Cookie Banner -->
    <div id="cookieBanner" class="cookie-banner">
        <div class="cookie-content">
            <div>
                <p class="cookie-text">Мы используем файлы cookie для улучшения вашего опыта на сайте. <a href="/cookies-policy.php">Подробнее</a></p>
            </div>
            <div class="cookie-actions">
                <button type="button" class="btn btn-ghost btn-sm" onclick="acceptCookies()">Принять</button>
                <button type="button" class="btn btn-secondary btn-sm" onclick="declineCookies()">Отклонить</button>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="nav" id="navbar">
        <div class="nav-container">
            <a href="/" class="logo">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                Zoravixo
            </a>
            
            <ul class="nav-menu" id="navMenu">
                <li><a href="/" class="nav-link <?= $current_page === 'index' ? 'active' : '' ?>">Главная</a></li>
                <li><a href="/about.php" class="nav-link <?= $current_page === 'about' ? 'active' : '' ?>">О нас</a></li>
                <li><a href="/services.php" class="nav-link <?= $current_page === 'services' ? 'active' : '' ?>">Услуги</a></li>
                <li><a href="/contacts.php" class="nav-link <?= $current_page === 'contacts' ? 'active' : '' ?>">Контакты</a></li>
                <li><a href="/services.php#pricing" class="btn btn-primary">Начать</a></li>
            </ul>
            
            <button class="nav-toggle" id="navToggle" aria-label="Открыть меню навигации">
                <svg class="icon" viewBox="0 0 24 24">
                    <path d="M3 12h18M3 6h18M3 18h18"/>
                </svg>
            </button>
        </div>
    </nav>

    <main id="main-content">