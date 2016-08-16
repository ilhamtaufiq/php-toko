<?php 
$db = mysqli_connect('127.0.0.1','root','toor','toko');
if (mysqli_connect_errno()) {
	# code...
	echo "Database Error: ".mysqli_connect_error();
	die();
}

?>