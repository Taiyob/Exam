
   
    <?php
    //session_start();
    //if(!isset($_SESSION['logged_id'])){
	//header("location:login.php");
    //}
    ?>
   
   <?php
    include 'connection.php';
    $connection = new Connection;
    
    if(isset($_POST['submit'])){
        $market = $_POST['market'];
        $money = $_POST['money'];
        $tour = $_POST['tour'];
        
        $connection->insertData($market,$money,$tour);
        
    }


?>
<html>
<head>
	<title>form collection</title>
</head>
<body>

	 <a href="register.php">Register</a> 
	  <a href="login.php">Login</a> 
 <table>
	<form action="" method="POST">
        <tr>
            <td>Market</td>
            <td><input type="text" name="market"></td>
        </tr>
        <tr>
            <td>Money</td>
            <td><input type="text" name="money"></td>
        </tr>
        <tr>
            <td>Tour</td>
            <td><input type="text" name="tour"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
	</form>
 </table>
	

	
</body>
</html>