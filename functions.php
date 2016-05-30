<?php

function kake_theme_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css');
        /* wp_enqueue_style( 'external.css', 'link/to/external'); */ 
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');   
} 

function kake_theme_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js',
        array('jquery'), '', true); 
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',
        array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'kake_theme_styles');
add_action( 'wp_enqueue_scripts', 'kake_theme_js'); 

