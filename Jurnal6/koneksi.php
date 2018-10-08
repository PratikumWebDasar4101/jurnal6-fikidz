<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "jurnal6";
	
	$conn = new mysqli($host, $username, $password, $db);
	
	if ($conn -> connect_error) {
		die("Koneksi Gagal ".$conn -> connect_error);
	}
 ?>