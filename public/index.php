<?php
// Controller

	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");
	 $Session = new TSession();

	$Authentication = new TAuthentication();
	$Session = new TSession();	
	$ControllerVars['loggedin'] = 0;
	//	session_start();
//	$_SESSION['loggedin'] = 0;
	if ($Authentication->isAuthorized()) {
		// logged in
		$ControllerVars['loggedin'] = 1; 
		echo "You are logged in."; 
	}
	else {
	//	echo "You are not logged in";

	if($_POST['submit'] == 'submit') {
		//THey submitted the login form 
	
		if ($Authentication->checkUserPass()) {
			$ControllerVars['loggedin'] = 1;
			$Authentication->successfulLogin();
			
		} else {
			$Authentication->failedlogin();
			
		}
	}

                

	

}
	echo "Login status is: ".$ControllerVars['loggedin'];
	if($ControllerVars['loggedin']==0) {
		 // Not logged in
                $content = file_get_contents("../templates/loginform.html");
                echo $content;
}
		
die;
			
		
	
		
			
		
	
	
	die;


//	require_once("../classes/class.Authentication.php");
//        require_once("../classes/class.Session.php");
//
//       		$Session        = new TSession();
		$Authentication = new TAuthentication();
	
//	$ControllerVars['loggedin']=0;
//	if ($Authentication->isAuthorized())  {
/*		//Logged in
		$ControllerVars['loggedin']=1;
	} else {
		echo "You are not logged in. <br />";
		if($_POST['submit'] == 'Submit') {
			// They submitted the login form

			if ($Authentication->checkUserPass()) {
				$ControllerVars['loggedin']=1;
				$Authentication->successfulLogin();
			}
			else
				$Authentication->failedLogin();
		} }else {
		}
		//Not Logged In.
		$content=file_get_contents("../templates/loginform.html");
		echo $content;
		
		
	}
	
		//At this point we know the user is logged in.
die; */
	if($_SERVER["REQUEST_URI"]== '/') {
                $content = file_get_contents("../templates/index.html");
                $content = str_replace('{text}','Whatever we want',$content);
                echo $content;
                //Homepage
        } else {
                echo "You are not on the homepage";
                // Not Homepage

      }


