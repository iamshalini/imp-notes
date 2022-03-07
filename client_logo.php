// cpt Our Clients

add_action( 'init', 'wpb_register_cpt_ourclients' );

function wpb_register_cpt_ourclients() {

$labels = array(
'name' => _x( 'Our Clients', 'ourclients' ),
'singular_name' => _x( 'ourclients', 'ourclients' ),
'add_new' => _x( 'Add New Client', 'ourclients' ),
'add_new_items' => _x( 'Add New Client', 'ourclients' ),
 
'new_items' => _x( 'New Client', 'ourclients' ),
 
'search_items' => _x( 'Search Client', 'ourclients' ),
 
'parent_items_colon' => _x( 'Parent Client:', 'ourclients' ),
'menu_name' => _x( 'Our Client', 'ourclients' ),
);

$args = array(
'labels' => $labels,
'hierarchical' => false,
'supports' => array( 'title', 'thumbnail', 'editor' , 'editor', 'page-attributes' ),
'show_in_menu' => true,
'query_var' => true,
'can_export' => true,
'menu_icon' => 'dashicons-screenoptions',
'rewrite' => false,
'capability_type' => 'post',
'public' => false,  
'publicly_queryable' => false,   
'show_ui' => true,  
'exclude_from_search' => true,   
'show_in_nav_menus' => false, 
'has_archive' => false,  
    );
register_post_type( 'ourclients', $args );
flush_rewrite_rules();
}

function ourclients() {
  register_taxonomy(
    'our_clients',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    'ourclients',       //post type name
    array(
      'hierarchical'    => true,
      'label'     => 'Clients Category',  
      'query_var'     => true,
      'rewrite'   => array(
      'slug'      => 'our_clients', 
        'with_front'  => false,
      
          )
      )
    );
}

add_action( 'init', 'ourclients');

add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'ourclients';
    remove_post_type_support( $post_type, 'editor');
}
 add_action( 'admin_head', 'meta_rename' );
function meta_rename() {
    remove_meta_box( 'postimagediv', 'ourclients', 'side' );
    add_meta_box('postimagediv', __('Add a client image'), 'post_thumbnail_meta_box', 'ourclients', 'side', 'high');
}


// our Clients layout


function shortcode_pagegrid() {
   $page_id= get_the_ID();?>
  
        <section class="client-part ourclient_page">
    <div class="container">
                <?php         
                  $cat_args = array( 
                'posts_per_page' => -1,
                 'order' => 'ASC', 
                'hide_empty' => false,);
                $terms = get_terms('our_clients', $cat_args);
                $category = $terms->slug; ?>
                <div class="row justify-content-center"> 
                    <div class="col-lg-12">

                      <div class="filter text-center">
                       
                          <a  class="filterlink allpost active" href="#all">All</a>    
                             <?php 
                             foreach($terms as $taxonomy){
                              $term_slug = $taxonomy->slug;
                             $cat_name = $taxonomy->name;  
                             $category_link = get_category_link($taxonomy->term_id);  ?>
                               <a data-id ="<?php echo $term_slug; ?>" class=" filterlink" href ="#<?php echo $term_slug; ?>"> <?php print_r($cat_name); ?></a>  
                               
                                <?php } ?>
                               
                       </div>
                    </div>
                </div>
		 
                <section class="clientlogo no-padding sets">
                  <div class="container">
                     <div class="row client-logo-row">
        
                    <?php
                    $args = array(
                        'post_type' => 'ourclients',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, );
                      $posts = new WP_Query($args);
                     $counter = 1; 
      if(!empty($posts)){
                      while ( $posts->have_posts() ){ 
                        $posts->the_post(); 
                        $img = get_the_post_thumbnail_url(get_the_ID(),'medium');        
                        $termsw = get_the_terms(get_the_ID() , 'our_clients' );    
                         
                        foreach($termsw as $term) {
                        $slug = $term->slug;
                      ?>
                          <div class="col-sm-3 col-lg-3 col-md-3 col-xs-6 filterGalleryGrid <?php echo $slug;?> "   data-order="<?php echo $counter; ?>">
                            <div class="vc-column-innner-wrapper">
                              <div class="client-logo-outer">
                                <div class="client-logo-inner">
                                  <img src="<?php echo $img ;?>" class="attachment-full size-full" alt="" loading="lazy"></div>
                                </div>
                            </div>
                          </div>
      
                    <?php       
            } $counter++;  }
      }else{
        echo"No Post";
      }?>
        </div>
     </div>
 </section>
<style>
		.hide_client .client-logo-outer {
    border: none !important;
}</style>
    <?php   
}
add_shortcode('pagegrid', 'shortcode_pagegrid');


