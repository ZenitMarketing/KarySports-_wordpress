<?php

function load_assets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_register_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap', array(), '1.0.0', 'all');
    wp_register_style('styles', get_stylesheet_uri(), array('bootstrap', 'lato'), '1.0', 'all');

    wp_enqueue_style('styles');

    wp_register_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/bootstrap.bundle.min.js', array(), '5.0.2', true);
    wp_register_script('index', get_template_directory_uri().'/js/index.js', array('bootstrap'), '1.0', true);

    wp_enqueue_script('index');
}

function init_template() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'top_menu' => 'Top Menu',
            'languages_menu' => 'Lan Menu'
        )
    );
}

// function products_type() {
//     $labels = array(
//         'name' => 'Products',
//         'singular_name' => 'Product',
//         'menu_name' => 'Products',
//     );

//     $args = array(
//         'label' => 'Products',
//         'description' => 'Netfish Products',
//         'labels' => $labels,
//         'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
//         'public' => true,
//         'show_in_menu' => true,
//         'menu_position' => 5,
//         'menu_icon' => 'dashicons-products',
//         'can_export' => true,
//         'publicly_queryable' => true,
//         'rewrite' => true,
//         'show_in_rest' => true,
//     );

//     register_post_type('product', $args);
// }

add_action('wp_enqueue_scripts', 'load_assets');
add_action('after_setup_theme', 'init_template');
// add_action('init', 'products_type');
