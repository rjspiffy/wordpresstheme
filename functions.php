<?php
function rwj_photo_2_setup() {
    add_theme_support('custom-background', ['default-color' => 'ffffff']);
    add_theme_support('title-tag');
    register_nav_menus(['primary' => __('Primary Menu', 'rwj-photo-2')]);
}
add_action('after_setup_theme', 'rwj_photo_2_setup');

function rwj_photo_2_scripts() {
    wp_enqueue_style('rwj-photo-2-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_script('rwj-photo-2-script', get_template_directory_uri() . '/js/script.js', [], filemtime(get_template_directory() . '/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'rwj_photo_2_scripts');