<?php 
	session_start();
	if($_SESSION['username']) {
		session_destroy();
		header('location: ?controller=trangchu');
	} else {
		header('location: ?controller=trangchu');
	}



?>