<?php 
/*
template name:targetpage
*/


// include('home.php');

?>
					<?php 

	     if(!empty($_POST['keyword']))
		 {
	$loaction = $_POST['keyword'];
	$budget = $_POST['budget'];
	$house_types = $_POST['house_type'];
	

	
	
	$args = array(
    'post_type' => 'residence',
    'posts_per_page' => 3,
	'taxonomy'=>'residence_tex',
	'term'=> $loaction,
		'meta_query'    => array(
    'relation' => 'OR',
    array(
        'key'       => 'budget',
        'value'     => $budget,
        'compare'   => 'LIKE',
    ),
			 array(
        'key'       => 'house_type',
        'value'     => $house_types,
        'compare'   => 'LIKE',
    ),
   
)
   
	
	

);
// 	echo "<pre>";
// 	print_r($args);
// 	echo "</pre>";
// 	
 	global $wp_query;
			$wp_query = new WP_Query( $args );
						echo "<pre>";
			//	print_r($the_query);
						echo "</pre>";
						
						if ( $wp_query->have_posts() ){ while($wp_query->have_posts()): $wp_query->the_post(); 
							
						?><div>
					<div class="title"><?php  the_title();?></div>
						<div class="content"><?php  the_content();?></div>
			  
					</div>	
				<?php 			
					endwhile;}
			 else{
				 
				 echo " not data available";
			 }
			?>
						
						

	
					

              </div>
<?php } 
else{
	echo "No city Found";
}?>
<?php get_footer();?>