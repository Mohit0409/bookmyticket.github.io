<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css " type="text/css"/>
</head>
<body>
<center>
<div class = "boxed">
<div class= "container">
       
            <h2>LogIn</h2>
		
		<form action="" method="post">
      
	  email<input type="text" name="email" required><br><br><br>
	  
	  password<input type="password" name="password" id = "pass"	required><br><br><br>
	  
	  
     <input  type="submit" name = "check">
</form>

 	</div>
	</center>
	<?php
	
	include("connection.php");
	if(isset($_REQUEST["check"]))
{
	$email=$_POST['email'];
   $password=$_POST['password'];

   
   
   $email_search = " SELECT * FROM business WHERE email = '$email'";
 $query = mysqli_query($conn,$email_search);
 $email_count = mysqli_num_rows($query);

 if($email_count)
 {
	
	$email_pass = mysqli_fetch_assoc($query);
	
	$db_pass = $email_pass['password'];
	$_SESSION['username'] = $email_pass['username'];
	$pass_ = password_hash($password, PASSWORD_BCRYPT);
	$pass_decode = password_verify($password, $pass_);
	
	if($pass_decode){
		header( "location: ins.php");
	exit();
	}
	else{
		echo "password incorrect";
	}
		
		
		 
	 
	 
 }
 else{ echo"email do not match";
 
 }
 
}


?>
 <center>
 <p>new user<a href="bussignup.php"><b>sign up Here</b></a></p>
 <p>login to customer account<a href="login.php"><b>LogIn Here</b></a></p>
 </center>
</body>
</html>
