<?php
// Add custom JS script
function naada_scripts() {
	wp_enqueue_script('parallax-scroll', get_stylesheet_directory_uri() . '/js/jquery.parallax.js', true);
  wp_enqueue_script( 'naada-custom', get_stylesheet_directory_uri() . '/js/naada-custom.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js');
	wp_enqueue_script( 'jqueryUI', '//code.jquery.com/ui/1.11.4/jquery-ui.js');
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css');
	wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick-theme.css' );

	// Homepage in both languages
	if (is_front_page() || is_page('7') || is_page('7285')) {
 	 wp_enqueue_script('naada-homepage', get_stylesheet_directory_uri() . '/js/naada-homepage.js', array(), '1.0.0', true);
  }

	// Clinic Pages
	global $post;
	if (is_page('therapeutic-clinic') || '8403' == $post->post_parent) {
		wp_enqueue_script('clinic', get_stylesheet_directory_uri() . '/js/clinic.js', true);
	}
	// All this because the above code wont work for french parent pages..
	elseif (is_page('8612') || is_page('8611') || is_page('8827') || is_page('8829') || is_page('9630') || is_page('10344')) {
		wp_enqueue_script('clinic', get_stylesheet_directory_uri() . '/js/clinic.js', true);
	}

	// NYTT Course Template
	if (is_page_template('template-nytt.php')) {
		wp_enqueue_style('responsive-tabs-css', get_stylesheet_directory_uri() . '/css/responsive-tabs/responsive-tabs.css');
		wp_enqueue_script('responsive-tabs-js', get_stylesheet_directory_uri() . '/js/jquery.responsiveTabs.min.js');
		wp_enqueue_script('accordion-js', get_stylesheet_directory_uri() . '/js/accordion/jquery-ui.min.js');
		wp_enqueue_style('accordion-css', get_stylesheet_directory_uri() . '/css/accordion/jquery-ui.min.css');
		wp_enqueue_script('nytt', get_stylesheet_directory_uri() . '/js/nytt-landing.js');
	}

	// Contact Pages
	if (is_page('38') || is_page('5151')) {
		wp_enqueue_script('responsive-tabs-js', get_stylesheet_directory_uri() . '/js/jquery.responsiveTabs.min.js');
		wp_enqueue_style('responsive-tabs-css', get_stylesheet_directory_uri() . '/css/responsive-tabs/responsive-tabs.css');
	}

}

add_action( 'wp_enqueue_scripts', 'naada_scripts' );
?>
