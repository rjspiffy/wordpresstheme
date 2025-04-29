<?php
// Enqueue main style and polaroid style
function theme_enqueue_styles() {
    // Main Theme Styles
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // Polaroid Gallery Styles
    wp_enqueue_style('polaroid-style', get_template_directory_uri() . '/polaroid.css', array('main-style'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Register Menus and Widgets
function theme_setup() {
    // Enable support for navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme-name')
    ));

    // Enable support for widgets
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'theme_setup');
?>
