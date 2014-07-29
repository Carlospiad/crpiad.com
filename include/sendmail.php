<?php 
global $_REQUEST;
$response = array('error'=>'');

	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['message'];
	
	$contact_email = 'carlospiad@gmail.com';	
	
	if (trim($email)!='') {
		$subj = 'Contact through crpiad.com';
		$msg = "Name: $username
		$msg";
		$response = 'Thanks for contacting me';
		
		mail($contact_email, $subj, $msg, "From:" . $email);
		
		
	} else 
			$response = 'Please provide your email and try again';

	//echo json_encode($response);
	$url = '../index.html';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
	die();

?>