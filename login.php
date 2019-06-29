<?php
session_start();
include 'connection.php';
$connection = new Connection;

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$password = md5($_POST['password']);
	$res = $connection->getAll("SELECT * FROM user WHERE user='$user' AND password='$password';",null);
	if(count($res)){
		foreach($res as $r){
			$_SESSION['logged_id'] = $r['id'];			
		}
		header("location:index.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<form action="" method="POST">
	<input type="text" name="user">
	<input type="password" name="password">
	<input type="submit" name="submit" value="LOGIn">
</form>

</body>
</html>