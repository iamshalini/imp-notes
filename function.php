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
