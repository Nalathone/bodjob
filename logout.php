<?php
	session_start();

	unset($_SESSION['user_id']);
	unset($_SESSION['username']);
	unset($_SESSION['name']);
	unset($_SESSION['surname']);


	header("Location: login.php");
