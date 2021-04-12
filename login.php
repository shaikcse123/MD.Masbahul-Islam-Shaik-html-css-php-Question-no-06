<?php
	include "../db.php";

	session_start();

	if ( isset($_POST['login']) ){
		$log_email = $_POST['em'];
		$log_pass  = $_POST['log_pass'];

		$log_email = mysqli_real_escape_string($connection, $log_email);
		$log_pass  = mysqli_real_escape_string($connection, $log_pass);


		$query = "SELECT * FROM users WHERE email = '$log_email' ";

		$select_user = mysqli_query($connection, $query);

		while ($row = mysqli_fetch_array($select_user) ) {
			
			$_SESSION['id'] 	    = $row['id'];
			$_SESSION['name'] 		= $row['name'];
			$_SESSION['email'] 		= $row['email'];
			$_SESSION['pass'] 		= $row['pass'];
			$_SESSION['phone'] 		= $row['phone'];

		}

		if ( $_SESSION['email'] !== $log_email &&  $_SESSION['pass']!== $log_pass ){
			header("Location: ../index.php");
		}
		else if ( $_SESSION['email'] == $log_email &&  $_SESSION['pass'] == $log_pass ){
			header("Location: ../dashboard.php");
		}
		else{
			header("Location: ../index.php");
		}



	}

?>