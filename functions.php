<?php
/**
 * storeags functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package storeags
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function storeags_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on storeags, use a find and replace
		* to change 'storeags' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'storeags', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'storeags' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'storeags_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	//add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'storeags_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function storeags_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'storeags_content_width', 640 );
}
add_action( 'after_setup_theme', 'storeags_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function storeags_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'storeags' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'storeags' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'storeags_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function storeags_scripts() {
	wp_enqueue_style( 'storeags-style', get_stylesheet_uri(), array(), _S_VERSION );

	//The main.css is best for development, main.min.css is best for production, but i need to
	//compile with live sass compiler
	wp_enqueue_style( 'storeags-style-main', get_template_directory_uri() . '/css/main.css' );
	//wp_enqueue_style( 'storeags-style-main-mini', get_template_directory_uri() . '/css/main.min.css');
	
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' );
	
	//Here goes the javascript scripts
	wp_style_add_data( 'storeags-main', 'rtl', 'replace' );

	//The javascript for navigation
	wp_enqueue_script( 'storeags-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	//The javascript for bootstrap
	wp_enqueue_script( 'bootstrap-poper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'storeags-script', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'storeags_scripts' );


/**
 * Implement the custom fonts.
 * 
 *  * font-family: 'Poppins', sans-serif;
 */
function enque_custom_fonts() {
	if(! is_admin()) {
		wp_register_style( 'source_poppins_font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap' );
		wp_enqueue_style( 'source_poppins_font' );
	}
}
add_action( 'wp_enqueue_scripts', 'enque_custom_fonts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> – <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}



/**
 * Footer Widget 1
*/
function custom_footer_widget_one() {
	$args = [
		'id'            => 'footer_widget-col-one',
		'name'          => __( 'Footer Column One', 'storeags'),
		'description'   => __( 'Column One', 'storeags'),
		'before_title'  => '<h4 class="title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	];
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_one' );

/**
 * Footer Widget 2
*/
function custom_footer_widget_two() {
	$args = [
		'id'            => 'footer_widget-col-two',
		'name'          => __( 'Footer Column Two', 'storeags'),
		'description'   => __( 'This is the second widget for the footer', 'storeags'),
		'before_title'  => '<h4 class="title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget %2%s">',
		'after_widget'  => '</div>'
	];
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_two' );

/**
 * Footer Widget 3
*/
function custom_footer_widget_three() {
	$args = [
		'id'            => 'footer_widget-col-three',
		'name'          => __( 'Footer Column Three', 'storeags'),
		'description'   => __( 'Column Three', 'storeags'),
		'before_title'  => '<h4 class="title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget %2%s">',
		'after_widget'  => '</div>'
	];
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_footer_widget_three' );



/**Woocommerce Functionality */
add_theme_support( 'woocommerce' );
