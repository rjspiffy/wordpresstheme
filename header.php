<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="elegant-header">
        <div class="logo-wrapper">
            <a href="<?php echo home_url(); ?>" class="logo-placeholder"></a>
        </div>
        <nav class="elegant-nav">
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_id' => 'primary-menu',
            ]); ?>
        </nav>
    </header>
    <main>