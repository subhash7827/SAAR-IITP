<?php
	session_start();
		 unset($_SESSION['fname']);
         unset($_SESSION['lname']);
         unset($_SESSION['cid']);
         unset($_SESSION['contact']);
         unset($_SESSION['fb']);
         unset($_SESSION['graduation']);
         unset($_SESSION['degree']);
         unset($_SESSION['dept']);
         unset($_SESSION['linkden']);
         unset($_SESSION['dob']);
         unset($_SESSION['cid']);
         unset($_SESSION['email']);
         unset($_SESSION['loggedin']);
         unset($_SESSION['user_id']);
         unset($_SESSION['img_url']);
         unset($_SESSION['employment_type']);
         unset($_SESSION['present_employer']);
         unset($_SESSION['designation']);
         unset($_SESSION['address']);
         unset($_SESSION['country']);
         unset($_SESSION['state']);
         unset($_SESSION['city']);
         unset($_SESSION['achievements']);
         unset($_SESSION['loggedin']);
         unset($_SESSION['access_token']);
         header("location: index.php");
?>