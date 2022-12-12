<?php
    /**
    * Template Name: Front Page
    */
$pageid = get_the_id();
?>

<?php get_header(); ?>


<!-----------------------banner---------------------------------->
<!--hero section start-->
<section class="ptb-60 main-banner">
    <div class="container-fluid">
        <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="hero-slider-content text-white">
                        <h1>Find Real Estate <br/>That Suits You</h1>
                        <h5 class="font-weight-light">Take your business places with high-quality real
                            estate<br/>
                            marketing services.</h5>
                        <div class="row  mt-4">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div>
                                    <img class="img-fluid" src="./images/icons/assets-black.png" height="50" width="50">
                                    <div class="mt-3">
                                        <h5 class="mb-0">1000 Cr</h5>
                                        <span style="color: #202020">Assets Managed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div>
                                    <img class="img-fluid" src="./images/icons/agreement-black.png" height="50"
                                         width="50">
                                    <div class="mt-3">
                                        <h5 class="mb-0">20+ Years</h5>
                                        <span style="color: #202020">Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div>
                                    <img class="img-fluid" src="./images/icons/investor-black.png" height="50"
                                         width="50">
                                    <div class="mt-3">
                                        <h5 class="mb-0">12,650+</h5>
                                        <span style="color: #202020">Digital Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 enquiry-form">
                    <!--                        <div class="form-div px-5">-->
                    <!--                            <h4 class="text-center">How can we help you ?</h4>-->
                    <!--                            <p class="text-center font-weight-light">Lorem ipsum is placeholder text used commonly</p>-->
                    <!--                            <form>-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <label for="name">Name <span style="color: #3074cc">*</span></label>-->
                    <!--                                    <input type="email" class="form-control" id="name" aria-describedby="emailHelp"-->
                    <!--                                           placeholder="Enter name">-->
                    <!--                                </div>-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <label for="email">Email <span style="color: #3074cc">*</span></label>-->
                    <!--                                    <input type="password" class="form-control" id="email" placeholder="Enter email">-->
                    <!--                                </div>-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <label for="phone">Phone</label>-->
                    <!--                                    <input type="password" class="form-control" id="phone" placeholder="Enter phone">-->
                    <!--                                </div>-->
                    <!--                                <div class="form-group">-->
                    <!--                                    <label for="message">Message</label>-->
                    <!--                                    <textarea class="form-control" id="message" rows="3"></textarea>-->
                    <!--                                </div>-->
                    <!--                                <button type="submit" class="btn btn-primary my-2">Submit Now</button>-->
                    <!--                            </form>-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<section class="pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12 search-bar">
                <h4 class="ml-2">Search the price you looking for</h4>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-12">
							<?php 	$args = array(
    'post_type' => 'residence',
    'posts_per_page' => 10,
    'order'             => 'ASC',
	'taxonomy' => 'residence_tex',
	
	

);
			$the_query = new WP_Query( $args );
						echo "<pre>";
// 						print_r($the_query);
						echo "</pre>";
						
						if ( $the_query->have_posts() ) {
			$post_id =	get_the_ID()
									
   ?>
                     <form method="post" action="http://122.160.61.100/dev/nk/test_prohject/index.php/demo/">
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar-form" id="location" placeholder="Enter Location" id="location"  name="keyword">
									<ul id="datafetch">
										
									</ul> 
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                  <select class="form-control search-bar-form" id="housetype" name="house_type">
									<?php 
						
while ( $the_query->have_posts() ) : $the_query->the_post();?><option  ><?php $variable = get_field('house_type', $post->ID); echo $variable; ?><?php  echo   $types = $term_single->name;?></option><?php endwhile;?>
									  </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="form-group">
                                <select class="form-control search-bar-form" id="budget" name="budget">
									
								<?php	$all_posts = array(); while ( $the_query->have_posts() ) : $the_query->the_post();?><?php $terms = get_terms('residence_tex');
						
?><option><?php $variable = get_field('budget'); 
							
					echo $variable;
										
										

								
										?></option><?php endwhile;?>
									  </select>
                                </div>
                            </div>
                        </div>
						  <div class="col-lg-2 col-md-2 col-12">
                        <input type="submit" id="searchh" class="btn btn-primary search-bar-button" name="submit" value="search">
                    </div>
                    </form>
						<?php } ?>
                    </div>
                   
					
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
 if (isset($_POST['submit'])) 
					
{ 
	echo "hdjshd";		   
	
		   
		   }

?>
<!------------------------------------services--------------------------------------------->

<section style="padding-bottom: 70px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                <h3 class="ml-2">Our Popular Residence</h3>
                <div class="row d-inline-flex">
                    <div class="col-lg-10 col-md-10 col-12">
                <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna
                    aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco<br/></p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12 text-right">
                        <a class="btn btn-outline-secondary  prev" href="javascript:void(0)"
                           title="Previous">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn btn-outline-secondary  next" href="javascript:void(0)"
                           title="Next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                <div class="row mt-5">
                    <div id="myListingCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto">
                            <div class="carousel-item col-md-4 active">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">801 Rose Avenue</h4>
                                        <div class="d-inline-flex">
                                        <p class="card-text mr-3">4 Beds </p>
                                        <p class="card-text mr-3"> 2 Bathroom </p>
                                        <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 9,20,000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/professional-overalls-with-tools-background-repair-site-home-renovation-concept.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">152 Cambridge Road</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 12,20,000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/into-success-group-young-freelancers-office-have-conversation-smiling.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">258 Washtenaw Avenue</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 9,20,000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/staff-meeting-group-young-modern-people-smart-casual-wear-discussing-something-while-working-creative-office-business-time.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">256 N Main Street</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 3,20,000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/young-smiling-woman-vacuum-cleaning-carpet.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">471 Dewey Avenue</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 8,20,000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/professional-overalls-with-tools-background-repair-site-home-renovation-concept.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">365 Lockridge</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 82,0000</h4>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item col-md-4">
                                <a class="popular-listing-hover" href="#">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top" src="images/staff-meeting-group-young-modern-people-smart-casual-wear-discussing-something-while-working-creative-office-business-time.jpg" alt="Card image cap" height="250px">
                                        <h4 class="card-title mt-4">369 Asher Road</h4>
                                        <div class="d-inline-flex">
                                            <p class="card-text mr-3">4 Beds </p>
                                            <p class="card-text mr-3"> 2 Bathroom </p>
                                            <p class="card-text"> 1500 m cube</p>
                                        </div>
                                        <h4 style="color: #3074cc">₹ 12,0000</h4>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------services--------------------------------------------->
<section class="ptb-80" style="background-color: #eff9ff">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-md-1 col-md-10 offset-md-1 col-12">
                <div class="row  d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 px-5">
                        <h2>We Provide The Best Property For You</h2>
                        <h5 class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. </h5>
                        <h5 class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam,</h5>
                        <div class="d-inline-flex">
                            <button type="submit" class="btn btn-primary my-2">Get Started</button>
                            <button type="submit" class="btn btn-outline ml-3 my-2">Read More</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <img src="./images/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table.jpg" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!------------------------------------------>
<section class="ptb-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-md-1 col-md-10 offset-md-1 col-12">
                <div class="row  d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 text-center">
                        <img src="./images/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 px-5">
                        <div class="mt-4">
                        <h4>1. Choose Your Type</h4>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                        <div class="mt-4">
                        <h4>2. See The Property Directly</h4>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                        <div class="mt-4">
                        <h4>3. Easy Payment</h4>
                        <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, </p>
                        </div>
                        <div class="d-inline-flex mt-4">
                            <button type="submit" class="btn btn-primary my-2">Get Started</button>
                            <button type="submit" class="btn btn-outline ml-3 my-2">Read More</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!------------------------------------------>
<?php wp_footer();?>