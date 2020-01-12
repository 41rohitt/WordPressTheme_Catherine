<?php 

function my_styles(){

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    //Boostrap stylesheet
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    //Semantic UI stylesheet
    wp_register_style( 'sui-style', get_template_directory_uri(  ) . '/css/semantic.min.css');
    wp_enqueue_style('sui-style');

    //Custom stylesheet
    wp_register_style( 'main', get_template_directory_uri(  ) . '/css/main.css');
    wp_enqueue_style('main');


}
add_action('wp_enqueue_scripts', 'my_styles');


function my_scripts(){

    wp_enqueue_script('jquery');

    wp_register_script( 'bootstrap', get_template_directory_uri(  ) . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'bootstrap');

    wp_register_script( 'sui-script', get_template_directory_uri(  ) . '/js/semantic.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'sui-script');

    wp_register_script( 'main', get_template_directory_uri(  ) . '/js/main.js', array(), false, true);
    wp_enqueue_script( 'main');

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

//Theme Support Options
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');

//Menus
register_nav_menus( 

    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
 );



?>