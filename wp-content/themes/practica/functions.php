<?php 

function init_template(){
		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');

		register_nav_menus(array('top_menu' => 'Menu principal'));
}

add_action('after_setup_theme','init_template');


function assets(){
	wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css','','5.1.3','all');
	wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap','','1.0','all');

	wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0','all');

	wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js','','1.16.0', true);

	wp_enqueue_script('bootstraps','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js',array('jquery','popper'),'5.1.3',true);


	wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js','','1.0',true);

}

add_action('wp_enqueue_scripts','assets');



?>
