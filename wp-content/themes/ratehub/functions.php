<?php
function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );

function register_menu() {
    register_nav_menus( array(
    	'menu-header-left' => 'Menu Header Left',
    	'menu-header-right' => 'Menu Header Right'
    ) );
}
add_action('init', 'register_menu');

function get_excerpt($count,$txt){
  $excerpt =$txt;
   if($count>strlen($excerpt)){
     return $excerpt;
 }else{          
    $excerpt = strip_tags($excerpt);
     $excerpt = substr($excerpt, 0, $count);
     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
     $excerpt = $excerpt.'...';
     return $excerpt;
 }
}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'slidehome' ) ); // Posts and Movies

$post->post_excerpt;
function reg_widgets_init() {

register_sidebar( array(
'name' => __( 'Footer Area', 'FooterArea' ),
'id' => 'sidebar-footer',
'before_widget' => '<div class="col-md-2">',
'after_widget' => "</div",
'before_title' => '<h3>',
'after_title' => '</h3>',
) );


}
add_action( 'widgets_init', 'reg_widgets_init' );