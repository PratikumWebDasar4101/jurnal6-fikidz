<!DOCTYPE html>
<html>
<body>
	<h1 align="center">Selamat Datang</h1>
</body>
</html>

<?php  
	session_start();
	$login = array(
		"nama"=> "fikidz",
		"pass" => 6701174036
	);

	if ($_POST["username"]==$login["nama"]AND
		$_POST["password"]==$login["pass"]
)

	{
	$_SESSION["nama"]= $_POST['username'];
	$_SESSION["pass"]= $_POST['password'];

?>

<?php  
}
else{
	header("Location: login.php");
}

?>