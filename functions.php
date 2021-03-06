 <?php
/*
 *  Author: Erik Mattheis | @erikmatthies
 *  Based on: html5blank.com | @html5blank
 */

if (version_compare ($wp_version , "4.1") < 0) {
    die("<h1>This theme requires WordPress version 4.1 or greater");
}

/* Uncomment to limit width of images in posts to $content_width.

The compression will result in a bigger file than necessary so
only use this feature if necessary

if (!isset($content_width))
{
    $content_width = 900;
}
*/

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

register_sidebar(array(
    'name' => 'Top Bar Widgets',
    'description' => 'Typically this area contains sign in, shopping cart and search elements.',
    'id' => 'widget-area-1',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

function gsn_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function gsn_footer_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, null, true);
        wp_enqueue_script('jquery');

        wp_register_script('angular', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js', false, null, true);
        wp_enqueue_script('angular');

        wp_register_script('handlebars', '//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.3.0/handlebars.min.js', false, null, true);
        wp_enqueue_script('handlebars');

        wp_register_script('blueimp-gallery', '//cdnjs.cloudflare.com/ajax/libs/blueimp-gallery/2.15.2/js/jquery.blueimp-gallery.min.js', false, null, true);
        wp_enqueue_script('blueimp-gallery');

        wp_register_script('store-config', '//clientapix.gsn2.com/api/v1/store/siteconfig/119?callback=globalConfigCallback', false, null, true); // 
        wp_enqueue_script('store-config');

        wp_register_script('angular-sanitize', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-sanitize.min.js', false, null, true);
        wp_enqueue_script('angular-sanitize');

        wp_register_script('angular-route', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-route.min.js', false, null, true);
        wp_enqueue_script('angular-route');

        wp_register_script('angular-animate', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-animate.min.js', false, null, true);
        wp_enqueue_script('angular-animate');

        wp_register_script('angular-touch', '//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular-touch.min.js', false, null, true);
        wp_enqueue_script('angular-touch');

        wp_register_script('infinite-scroll', get_template_directory_uri() . '/js/ng-infinite-scroll.min.js', false, null, true);
        wp_enqueue_script('infinite-scroll');

        wp_register_script('loading-bar', get_template_directory_uri() . '/js/loading-bar.min.js', false, null, true);
        wp_enqueue_script('loading-bar');

        wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', false, null, true);
        wp_enqueue_script('bootstrap');

        wp_register_script('ui-bootstrap', '//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js', false, null, true);
        wp_enqueue_script('ui-bootstrap');

        wp_register_script('bootstrap-image-gallery', get_template_directory_uri() . '/js/bootstrap-image-gallery.min.js', false, null, true);
        wp_enqueue_script('bootstrap-image-gallery');

        wp_register_script('gsndfp', '//cdn.gsngrocers.com/script/gsndfp/gsndfp.min.js', false, null, true);
        wp_enqueue_script('gsndfp');

        wp_register_script('ui-map', get_template_directory_uri() . '/js/ui-map.min.js', false, null, true);
        wp_enqueue_script('ui-map');

        wp_register_script('ui-utils', get_template_directory_uri() . '/js/ui-utils.min.js', false, null, true);
        wp_enqueue_script('ui-utils');

        wp_register_script('fastclick', get_template_directory_uri() . '/js/fastclick.js', false, null, true);
        wp_enqueue_script('fastclick');

        wp_register_script('gsn-core', '//cdn.gsngrocers.com/script/gsncore/1.4.10/gsncore.min.js', false, null, true);
        wp_enqueue_script('gsn-core');

        wp_register_script('store-app', '//cdn.gsngrocers.com/asset/119/storeApp.js', false, null, true);
        wp_enqueue_script('store-app');

        wp_register_script('gsn', get_template_directory_uri() . '/js/site.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('gsn');

        wp_register_script('gsn-store-app', get_template_directory_uri() . '/js/storeApp.js', array('angular', 'angular-route', 'angular-touch'), '1.0.0', true);
        wp_enqueue_script('gsn-store-app');

    }
}
add_action('init', 'gsn_footer_scripts');

function gsn_styles()
{

    /*
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');
    */

    wp_register_style('bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', array(), '', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css', array(), '', 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('wordpress', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('wordpress');

    /*
    wp_register_style('gsn', get_template_directory_uri() . '/css/styles.min.css', array(), '1.0', 'all');
    wp_enqueue_style('gsn');
    */
    
    wp_register_style('gsn-override', get_template_directory_uri() . '/css/overrides.css', array(), '1.0', 'all');
    wp_enqueue_style('gsn-override');

    wp_register_style('gsn-home', get_template_directory_uri() . '/css/home.css', array(), '1.0', 'all');
    wp_enqueue_style('gsn-home');

    wp_register_style('gsn-media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), '1.0', 'all');
    wp_enqueue_style('gsn-media-queries');
    
}
add_action('wp_enqueue_scripts', 'gsn_styles');

function gsn_register_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'html5blank')
    ));
}
add_action('init', 'gsn_register_menu');


function gsn_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}
add_filter('wp_nav_menu_args', 'gsn_nav_menu_args');



// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function gsn_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}
add_filter('nav_menu_css_class', 'gsn_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'gsn_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'gsn_css_attributes_filter', 100, 1);

// Remove invalid rel attribute values in the categorylist
function gsn_remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}
add_filter('the_category', 'gsn_remove_category_rel_from_category_list');





// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)


add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions


add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);



// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
