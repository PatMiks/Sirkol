<?php

    include 'SteamLogin.php';
    
$url = SteamLogin::genUrl('http://mywebsite.com/login/response');


  <a href="<?php echo $url; ?>">Login with Steam</a>

$response = SteamLogin::validate();

if( empty( $response ) ) {
  
  return 'The Steam Login request has now expired, please try again.';
  
}
else {
  
  return $response; // Community ID
  
}

?>