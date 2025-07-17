<?php

// Theme functions here

add_action('after_setup_theme', function () {
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
        'menu_mobile' => 'Menu Mobile'
    ));
});


function nautilo_enqueue_scripts() {
    // CSS
    wp_enqueue_style('nautilo-style', get_template_directory_uri() . '/assets/css/header.css');

}

add_action('wp_enqueue_scripts', 'nautilo_enqueue_scripts');
