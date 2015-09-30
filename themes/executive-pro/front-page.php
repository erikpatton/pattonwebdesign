<?php
/**
 * This file adds the Home Page to the Executive Pro Theme.
 *
 * @author StudioPress
 * @package Executive Pro
 * @subpackage Customizations
 */
 
add_action( 'genesis_meta', 'executive_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function executive_home_genesis_meta() {

	if ( is_active_sidebar( 'home-slider' ) || is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-cta' ) || is_active_sidebar( 'home-middle' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_loop', 'executive_home_sections' );
		


		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
		add_filter( 'body_class', 'executive_add_home_body_class' );

	}
	
}

function executive_home_sections() {

	genesis_widget_area( 'home-slider', array(
		'before' => '<div class="home-slider widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-top', array(
		'before' => '<div class="home-top widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-divider', array(
		'before' => '<div class="divider widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-middle', array(
		'before' => '<div class="home-middle widget-area">',
		'after'  => '</div>',
	) );
	
	genesis_widget_area( 'home-divider3', array(
		'before' => '<div class="divider widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-photo', array(
		'before' => '<div class="homephoto widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-divider4', array(
		'before' => '<div class="divider widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-hosting', array(
		'before' => '<div class="homehosting widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-divider2', array(
		'before' => '<div class="divider widget-area">',
		'after'  => '</div>',
	) );

	genesis_widget_area( 'home-cta', array(
		'before' => '<div class="home-cta widget-area">',
		'after'  => '</div>',
	) );

}

//* Add body class to home page		
function executive_add_home_body_class( $classes ) {

	$classes[] = 'executive-pro-home';
	return $classes;
	
}

genesis();



