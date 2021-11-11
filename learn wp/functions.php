<?php

function load_scripts(){
    //For bootstrap scripts
 wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '5.1.3',true); 

 //For bootsrap scripts
 wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3','all');  
 wp_enqueue_style('template', get_template_directory_uri() .'/css/template.css',array(), '1.0','all');

}

add_action('wp_enqueue_scripts','load_scripts');




function learnwp_config(){
register_nav_menus(array(
    'my_main_menu'=>'Main Menu',
    'my_footer_menu' => 'footer_menu'
));

$args = array(
    'height' => 225,
    'width' => 1920
);

add_theme_support('custom-header', $args);
}
 
add_action('after_setup_theme', 'learnwp_config', 0);