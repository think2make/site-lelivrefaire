<?php 

// Change-Detector-XXXX - for Espresso.app


function custom_register_styles() {
	
	
	wp_enqueue_style( 
		'parent-style', // $handle
		get_template_directory_uri() . '/style.css' // $src 
	);
	
	wp_enqueue_script( 
	// the main JavaScript file
			'faire-js',
			get_stylesheet_directory_uri() . '/scripts.js',
			array('jquery'), // dependencies
			'1.2.7', // version
			true // in footer
	);
	
}
add_action( 'wp_enqueue_scripts', 'custom_register_styles', 9 );


// Header Cleanup

remove_action('wp_head', 'wp_generator');


/*
 * Admin CSS
 *
 * For all users accessing the admin interface
*/

function greyscale_admin_css() {
  echo '<style>
        
    #setting-error-ippo {
    	/* display: none; */
    }
   
  </style>';
}
add_action('admin_head', 'greyscale_admin_css');


// Custom Title
// Note: Automatic site title output generated in template-tags.php

/**
 * Site title and logo
 */
function atomic_title_logo() { ?>
	<div class="site-title-wrap" itemscope itemtype="http://schema.org/Organization">
		
		<div class="titles-wrap">
			<?php if ( is_front_page() && is_home() ) { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Faire</a></h1>
 			<?php } else { ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Faire</a></p>
 			<?php } ?>

			<?php if ( get_bloginfo( 'description' ) ) { ?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php } ?>
		</div>
	</div><!-- .site-title-wrap -->
<?php }



// WooCommerce

