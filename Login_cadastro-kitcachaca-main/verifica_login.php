<?php
//session_start();
if(!$_SESSION['usuario']) {
	header('Location: name.php');
	exit();
}

