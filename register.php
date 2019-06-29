<?php

    include 'connection.php';
    $connection = new Connection;
    
    if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$password = md5($_POST['password']);
    $email = ($_POST['email']);
        
	$data = array(
		':user' => $user,
		':password' => $password,
		':email' => $email
	);
	$connection->update("INSERT INTO user (user,password,email) VALUES (:user,:password,:email)",$data);

	echo "Registered";	
}
    

?>




<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>

	<form action="" method="POST">
		Name:<input type="text" name="user">
		Password:<input type="password" name="password">
		Email:<input type="email" name="email">
		<input type="submit" name="submit" value="register">
	</form>

</body>
</html>