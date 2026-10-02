<?php
// Valors per defecte si la pàgina no defineix les seves pròpies variables
$meta_title = isset($page_title) ? $page_title : 'SoundEvent - Producción de Eventos, Sonido e Iluminación Profesional';
$meta_desc  = isset($page_desc)  ? $page_desc  : 'SoundEvent: Especialistas en alquiler de sonido, iluminación profesional, DJ, escenarios y producción técnica para eventos y espectáculos.';
$meta_url   = isset($page_url)   ? $page_url   : 'https://www.soundevent.es' . $_SERVER['REQUEST_URI'];
$meta_img   = isset($page_img)   ? $page_img   : 'https://www.soundevent.es/assets/images/og-image.jpg';
?>

<!-- ==============================================
Basic Page Needs & SEO
=============================================== -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo htmlspecialchars($meta_title); ?></title>
<meta name="title" content="<?php echo htmlspecialchars($meta_title); ?>">
<meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
<meta name="subject" content="Producción de eventos, sonido, iluminación y espectáculos">
<meta name="author" content="SoundEvent">

<!-- ==============================================
Open Graph / Social Media Preview (WhatsApp, LinkedIn, Twitter)
=============================================== -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($meta_url); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($meta_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($meta_img); ?>">
<meta property="og:site_name" content="SoundEvent">
<meta property="og:locale" content="es_ES">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo htmlspecialchars($meta_url); ?>">
<meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($meta_img); ?>">

<!-- ==============================================
Favicons
=============================================== -->
<link rel="shortcut icon" href="assets/images/favicon.ico">
<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

<!-- ==============================================
Vendor Stylesheets
=============================================== -->
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendor/slider.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/vendor/icons.min.css">
<link rel="stylesheet" href="assets/css/vendor/icons-fa.min.css">
<link rel="stylesheet" href="assets/css/vendor/animation.min.css">
<link rel="stylesheet" href="assets/css/vendor/gallery.min.css">
<link rel="stylesheet" href="assets/css/vendor/cookie-notice.min.css">

<!-- ==============================================
Custom Stylesheets
=============================================== -->
<link rel="stylesheet" href="assets/css/default.css">

<!-- ==============================================
Theme Color & Settings
=============================================== -->
<meta name="theme-color" content="#21333e">

<style>
    :root {
        --hero-bg-color: #080d10;

        --section-1-bg-color: #ffffff;
        --section-2-bg-color: #111117;
        --section-3-bg-color: #eef4ed;
        --section-4-bg-color: #111117; 
        --section-4-bg-image: url('assets/images/bg-10.jpg');
        --section-5-bg-color: #111117;
        --section-6-bg-color: #ffffff;
    }
</style>