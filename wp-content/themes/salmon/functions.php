<?php 


function enqueue_function() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'font-awseom', get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style( 'icons', get_template_directory_uri().'/css/line-icons.css');
    wp_enqueue_style( 'carousel' ,get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri().'/css/owl.theme.css');
    wp_enqueue_style( 'lightbox', get_template_directory_uri().'/css/nivo-lightbox.css');
    wp_enqueue_style( 'popup', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style( 'nav', get_template_directory_uri().'/css/slicknav.css');
    wp_enqueue_style( 'animate',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style( 'main css', get_template_directory_uri().'/css/main.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style( 'font','https://fonts.googleapis.com/css?family=Poppins:400,700');


     wp_enqueue_script( 'jquery',get_template_directory_uri() . 'js/jquery-min.js');
     wp_enqueue_script( 'popper', get_template_directory_uri() . 'js/popper.min.js');
     wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js');
     wp_enqueue_script( 'mix', get_template_directory_uri() . 'js/jquery.mixitup.js');
     wp_enqueue_script( 'lightbox', get_template_directory_uri() . 'js/nivo-lightbox.js');
     wp_enqueue_script( 'carousel', get_template_directory_uri() . 'js/owl.carousel.js');    
     wp_enqueue_script( 'stellar', get_template_directory_uri() . 'js/jquery.stellar.min.js');    
     wp_enqueue_script( 'nav', get_template_directory_uri() . 'js/jquery.nav.js');    
     wp_enqueue_script( 'scrolling nav', get_template_directory_uri() . 'js/scrolling-nav.js');    
     wp_enqueue_script( 'easing', get_template_directory_uri() . 'js/jquery.easing.min.js');    
     wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . 'js/smoothscroll.js');    
     wp_enqueue_script( 'slicknav', get_template_directory_uri() . 'js/jquery.slicknav.js');     
     wp_enqueue_script( 'wow', get_template_directory_uri() . 'js/wow.js');   
     wp_enqueue_script( 'vide', get_template_directory_uri() . 'js/jquery.vide.js');
     wp_enqueue_script( 'counterup', get_template_directory_uri() . 'js/jquery.counterup.min.js');    
     wp_enqueue_script( 'magnific', get_template_directory_uri() . 'js/jquery.magnific-popup.min.js');    
     wp_enqueue_script( 'waypoints', get_template_directory_uri() . 'js/waypoints.min.js');    
     wp_enqueue_script( 'form validator', get_template_directory_uri() . 'js/form-validator.min.js');
     wp_enqueue_script( 'contact-form', get_template_directory_uri() . 'js/contact-form-script.js');   
     wp_enqueue_script( 'main-js', get_template_directory_uri() . 'js/main.js');


};

add_action( 'wp_enqueue_scripts', 'enqueue_function' );
// wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );

function register_resources(){

	//register a menu
    register_nav_menu('main-menu','Main Menu');
    
    //register section
	$args = array(
      'public' => true,
	  'label'  => 'Sections',
	//   'show_in_rest' => true,
	//   'supports' => array('editor')
    );
    register_post_type( 'section', $args );

	//register section taxonomy
	$args = array(
		'label'            => 'Type',
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'type' ),
	);
	register_taxonomy( 'type', 'section', $args );

}
add_action('init','register_resources');
?>


   