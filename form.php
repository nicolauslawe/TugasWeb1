<?php
if(isset($_POST['submit']))
{
	$name = array("nandadwi", "nicolas", "bestario", "bonggal");
	$min = 5;
	$max = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username)<$min)
	{
		echo "username harus memiliki panjang 5 atau lebih.";
	}
	if(strlen($username)>$max)
	{
		echo "username tidak boleh lebih panjang dari 10.";
	}
	
	if(!in_array($username, $name))
	{
		echo "<br/>mohon maaf, akses anda gagal!";
	}
	else
	{
		echo "<br/>selamat datang bous!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
<form action="form.php" method="post">
	<input type="text" name ="username" placeholder="Enter Username"/>
	<input type="password" name ="password" placeholder="Enter Password"/>
	<br/>
	<input type="submit" name="submit" />
	</form>
	
</body>
</html>