<?php function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

add_theme_support('post-thumbnails');


function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'bootstrap',
    get_template_directory_uri().'/static/external/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/static/external/font-awesome/css/font-awesome.css');
    wp_enqueue_style('carousel', get_stylesheet_directory_uri().'/static/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/static/css/style.css');
    wp_enqueue_script( 'jquery', get_template_directory_uri().'/static/external/jquery/dist/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script('carousel', get_template_directory_uri().'static/external/OwlCarousel2-2.2.1/dist/owl.carousel.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
