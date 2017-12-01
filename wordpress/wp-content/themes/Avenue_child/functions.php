<?php 

	function avenue_child_enqueue_style() {
		wp_register_style('parent_style', get_parent_theme_file_uri('style.css'), null, null);
		wp_register_style('font_awesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', null, null);
		wp_register_style('contact_style', get_theme_file_uri('assets/css/contact_style.css'), null, null);

		wp_enqueue_style( 'parent_style' );
		wp_enqueue_style( 'font_awesome' );
		if (is_page('contacto')) {
			wp_enqueue_style( 'contact_style' );
		}
  	}

	add_action( 'wp_enqueue_scripts', 'avenue_child_enqueue_style' );

	function avenue_chid_enqueue_scripts() {
		wp_register_script( 'bxslider', get_template_directory_uri('assets/js/jquery.bxSlider.min.js'), null, 'Version', true );
	    wp_register_script( 'superfish', get_template_directory_uri('assets/js/superfish.js'), null, 'Version', true );
	    wp_register_script( 'effects', get_template_directory_uri('assets/js/effects.js'), null, 'Version', true );
	    
	    wp_enqueue_script( 'bxslider' );
	    wp_enqueue_script( 'superfish' );
	    wp_enqueue_script( 'effects' );
	}

	add_action( 'wp_enqueue_scripts', 'avenue_chid_enqueue_scripts' );

?>