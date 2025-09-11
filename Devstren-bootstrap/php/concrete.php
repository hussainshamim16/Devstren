<?php
// custom fnc applying defer in script tag start
function applyingdefer(){

	// Defering default scripts 
	wp_script_add_data('jquery-core','strategy','defer'); 
	wp_script_add_data('jquery-migrate','strategy','defer'); 
	wp_script_add_data('utils','strategy','defer'); 
	wp_script_add_data('moxiejs','strategy','defer'); 
	wp_script_add_data('plupload','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-templates-modal__header','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-templates-modal__header__logo','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-finder','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-finder-results-container','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-finder__results__category','strategy','defer'); 
	wp_script_add_data('tmpl-elementor-finder__results__item','strategy','defer'); 
	wp_script_add_data('tmpl-media-frame','strategy','defer'); 
	wp_script_add_data('tmpl-media-modal','strategy','defer'); 
	wp_script_add_data('tmpl-uploader-window','strategy','defer'); 
	wp_script_add_data('tmpl-uploader-editor','strategy','defer'); 
	wp_script_add_data('tmpl-uploader-inline','strategy','defer'); 
	wp_script_add_data('tmpl-media-library-view-switcher','strategy','defer'); 
	wp_script_add_data('tmpl-uploader-status','strategy','defer'); 
	wp_script_add_data('tmpl-uploader-status-error','strategy','defer'); 
	wp_script_add_data('tmpl-edit-attachment-frame','strategy','defer'); 
	wp_script_add_data('tmpl-attachment-details-two-column','strategy','defer'); 
	wp_script_add_data('tmpl-attachment','strategy','defer'); 
	wp_script_add_data('tmpl-attachment-details','strategy','defer'); 
	wp_script_add_data('tmpl-media-selection','strategy','defer'); 
	wp_script_add_data('tmpl-attachment-display-settings','strategy','defer'); 
	wp_script_add_data('tmpl-gallery-settings','strategy','defer'); 
	wp_script_add_data('tmpl-playlist-settings','strategy','defer'); 
	wp_script_add_data('tmpl-embed-link-settings','strategy','defer'); 
	wp_script_add_data('tmpl-embed-image-settings','strategy','defer'); 
	wp_script_add_data('tmpl-image-details','strategy','defer'); 
	wp_script_add_data('tmpl-image-editor','strategy','defer'); 
	wp_script_add_data('tmpl-audio-details','strategy','defer'); 
	wp_script_add_data('tmpl-video-details','strategy','defer'); 
	wp_script_add_data('tmpl-editor-gallery','strategy','defer'); 
	wp_script_add_data('tmpl-crop-content','strategy','defer'); 
	wp_script_add_data('tmpl-site-icon-preview-crop','strategy','defer'); 
	wp_script_add_data('jquery-ui-core','strategy','defer'); 
	wp_script_add_data('jquery-ui-mouse','strategy','defer'); 
	wp_script_add_data('jquery-ui-draggable','strategy','defer'); 
	wp_script_add_data('underscore','strategy','defer'); 
	wp_script_add_data('backbone','strategy','defer'); 
	wp_script_add_data('backbone-marionette','strategy','defer'); 
	wp_script_add_data('backbone-radio','strategy','defer'); 
	wp_script_add_data('elementor-common-modules','strategy','defer'); 
	wp_script_add_data('elementor-web-cli','strategy','defer'); 
	wp_script_add_data('elementor-dialog','strategy','defer'); 
	wp_script_add_data('elementor-web-cli-js-before','strategy','defer'); 
	wp_script_add_data('wp-api-request-js-extra','strategy','defer'); 
	wp_script_add_data('elementor-dev-tools-js-before','strategy','defer'); 
	wp_script_add_data('wp-api-request-js','strategy','defer'); 
	wp_script_add_data('elementor-dev-tools','strategy','defer'); 
    wp_script_add_data( 'logohero', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-util', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-backbone', 'strategy' , 'defer', true );
    wp_script_add_data( 'media-models', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-plupload', 'strategy' , 'defer', true );
    wp_script_add_data( 'jquery-ui-sortable', 'strategy' , 'defer', true );
    wp_script_add_data( 'mediaelement-core', 'strategy' , 'defer', true );
    wp_script_add_data( 'mediaelement-migrate', 'strategy' , 'defer', true );
    wp_script_add_data( 'mediaelement', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-mediaelement', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-dom-ready', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-a11y', 'strategy' , 'defer', true );
    wp_script_add_data( 'clipboard', 'strategy' , 'defer', true );
    wp_script_add_data( 'media-views', 'strategy' , 'defer', true );
    wp_script_add_data( 'media-editor', 'strategy' , 'defer', true );
    wp_script_add_data( 'media-audiovideo', 'strategy' , 'defer', true );
    wp_script_add_data( 'wpaas-stock-photos', 'strategy' , 'defer', true );
    wp_script_add_data( 'lodash', 'strategy' , 'defer', true );
    wp_script_add_data( 'react', 'strategy' , 'defer', true );
    wp_script_add_data( 'react-dom', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-polyfill', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-url', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-api-fetch', 'strategy' , 'defer', true );
    wp_script_add_data( 'react-jsx-runtime', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-blob', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-block-serialization-default-parser', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-autop', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-deprecated', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-dom', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-escape-html', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-element', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-is-shallow-equal', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-keycodes', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-priority-queue', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-compose', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-private-apis', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-redux-routine', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-data', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-html-entities', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-rich-text', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-shortcode', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-warning', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-blocks', 'strategy' , 'defer', true );
    wp_script_add_data( 'moment', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-date', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-primitives', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-components', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-keyboard-shortcuts', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-commands', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-notices', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-preferences-persistence', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-preferences', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-style-engine', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-token-list', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-block-editor', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-core-data', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-media-utils', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-patterns', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-plugins', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-server-side-render', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-viewport', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-wordcount', 'strategy' , 'defer', true );
    wp_script_add_data( 'wp-editor', 'strategy' , 'defer', true );

    // GoDaddy plugin script (sanitised handle)
    wp_script_add_data( 'godaddy-wordpress-plugins-launch-publishguidepublish-guide-script', 'strategy' , 'defer', true );

    // Elementor & related
    wp_script_add_data( 'elementor-webpack-runtime', 'strategy' , 'defer', true );
    wp_script_add_data( 'elementor-frontend-modules', 'strategy' , 'defer', true );
    wp_script_add_data( 'elementor-frontend', 'strategy' , 'defer', true );
    wp_script_add_data( 'elementor-admin-bar', 'strategy' , 'defer', true );

    // Other theme / plugin scripts
    wp_script_add_data( 'jquery-numerator', 'strategy' , 'defer', true );
    wp_script_add_data( 'swiper', 'strategy' , 'defer', true );
    wp_script_add_data( 'cute-alert', 'strategy' , 'defer', true );
    wp_script_add_data( 'hello-theme-frontend', 'strategy' , 'defer', true );

    // Yoast related
    wp_script_add_data( 'yoast-seo-feature-flag-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-analysis-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-prop-types-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-styled-components-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-helpers-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-style-guide-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-components-new-package', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-en-language', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-frontend-inspector-resources', 'strategy' , 'defer', true );
    wp_script_add_data( 'yoast-seo-premium-frontend-inspector', 'strategy' , 'defer', true );

    wp_script_add_data( 'master-js', 'strategy' , 'defer', true );
    wp_script_add_data( 'hfe-frontend-js', 'strategy' , 'defer', true );
    wp_script_add_data( 'font-awesome-4-shim', 'strategy' , 'defer', true );
    wp_script_add_data( 'hoverintent-js', 'strategy' , 'defer', true );
    wp_script_add_data( 'admin-bar', 'strategy' , 'defer', true );
	
}

add_action('wp_enqueue_scripts', 'applyingdefer');  
// custom fnc applying defer in script tag end





<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

require_once get_stylesheet_directory() . '/inc/services-custom-fields.php';

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	if (is_singular('service') || is_single()) {
        // Bootstrap CSS
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

        // Bootstrap JS (with Popper)
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
    }
	wp_enqueue_script('jquery');
	wp_enqueue_script('master-js', get_stylesheet_directory_uri() . '/master.js', array('jquery'), null, true);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );





// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );

    // Remove classic-themes CSS for backwards compatibility for button blocks.
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );


function show_services_shortcode($atts) {
    ob_start();

    // Shortcode attribute handle karna
    $atts = shortcode_atts(array(
        'count' => '', // Default blank
    ), $atts);

    // Agar blank ho to all posts, warna given value
    $posts_per_page = ($atts['count'] === '') ? -1 : intval($atts['count']);

    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $posts_per_page,
        'order' => 'ASC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="service-container">';
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="service-item">
				<a href="<?php the_permalink(); ?>">
                <img 
					 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
					 alt="<?php the_title(); ?>"
				>
                <h3 class="service-title"><?php the_title(); ?></h3>
				</a>
                <p class="service-short-description"><?php echo get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="view-btn">View Details</a>
            </div>
            <?php
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No services found.</p>';
    }

    return ob_get_clean();
}
add_shortcode('show_services', 'show_services_shortcode');




function show_blog_shortcode($atts) {
    ob_start();

    // Get current page number
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="post-container">';
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <div class="post-item">
				<a href="<?php the_permalink(); ?>">
                <img 
					 src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
					 alt="<?php the_title(); ?>"
				>
                <h3 class="post-title"><?php echo mb_strimwidth(get_the_title(), 0, 30, '...'); ?></h3>
				</a>
                <p class="post-short-description"><?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?></p>
                <a href="<?php the_permalink(); ?>" class="post-btn view-btn">View Details</a>
            </div>
        <?php }
        echo '</div>';

        // ✅ Show pagination only if total posts > 9
        if ($query->found_posts > 9) {
            echo '<div class="custom-pagination">';
            echo paginate_links(array(
                'total'   => $query->max_num_pages,
                'current' => $paged,
                'type'    => 'list', // you can change to 'plain' if you want
            ));
            echo '</div>';
        }

        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }

    return ob_get_clean();
}
add_shortcode('show_blogs', 'show_blog_shortcode');

// custom fnc applying defer in script tag start
function applyingdefer(){

	// Defering default scripts 
	wp_script_add_data('jquery-core','strategy','defer'); 
	
}

add_action('wp_enqueue_scripts', 'applyingdefer');  
// custom fnc applying defer in script tag end

// Register Custom Post Type Services
function create_services_cpt() {

	$labels = array(
		'name' => _x( 'Service', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Services', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Service', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Services', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Services Archives', 'textdomain' ),
		'attributes' => __( 'Services Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Services:', 'textdomain' ),
		'all_items' => __( 'All Service', 'textdomain' ),
		'add_new_item' => __( 'Add New Services', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Services', 'textdomain' ),
		'edit_item' => __( 'Edit Services', 'textdomain' ),
		'update_item' => __( 'Update Services', 'textdomain' ),
		'view_item' => __( 'View Services', 'textdomain' ),
		'view_items' => __( 'View Service', 'textdomain' ),
		'search_items' => __( 'Search Services', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Services', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Services', 'textdomain' ),
		'items_list' => __( 'Service list', 'textdomain' ),
		'items_list_navigation' => __( 'Service list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Service list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Services', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

	// Register Category Taxonomy
    register_taxonomy('service_category', 'service', array(
        'labels' => array(
            'name' => 'Service Categories',
            'singular_name' => 'Service Category',
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'service-category'),
        'show_in_rest' => true,
    ));

}
add_action( 'init', 'create_services_cpt', 0 );


function ga_code(){
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G1Y66FSY4N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G1Y66FSY4N');
</script> 
<?php
}
add_action('wp_head','ga_code');
?>


