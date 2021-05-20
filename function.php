<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_assets() {
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'main.css', 
        get_template_directory_uri(),
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_style', 'register_assets');

// function lepays_scripts()
// {
//     wp_enqueue_style('lepays-style', get_stylesheet_uri(), array(), _S_VERSION);
//     wp_style_add_data('lepays-style', 'rtl', 'replace');
// }
// add_action('wp_enqueue_scripts', 'lepays_scripts');

//Déclare un emplacement de menu
register_nav_menus( array(
	'main' => 'menu principal',
	'footer' => 'Bas de page',
) );
