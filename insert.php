
<?php
 include("connection.php");
?>
<html>
<head>
<link rel="stylesheet" href="style.css " type="text/css"/>
</head>
<body>
<center>
<div class = "boxed">
<h2><p>Sign Up</p></h2>
<form action="" method="post">
      
	  username  &emsp;<input type="text" name="username" required><br><br>
	  email &emsp;  &emsp; <input type="email" name="email" required><br><br>
	  password_1<input type="password" name="password_1" id ="pass_1" required><br><br>
	  password_2<input type="text" name="password_2" id = "pass_2"	required><br><br>
	  
	  
      <input type="submit" name = "check">
</form>
 
</center>
 </div>
<?php

if(isset($_REQUEST["check"]))
{

   $username=$_POST['username'];
   $email=$_POST['email'];
   $password_1=$_POST['password_1'];
   $password_2=$_POST['password_2'];
   
   
   $query = "SELECT * FROM user_information WHERE email LIKE '$email'";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);

 if($total!=0)
 {
	
	
	 
		
		
		 echo "email already exist		";
	 
	 
 }
 else{
   $query = "SELECT * FROM user_information WHERE username LIKE '$username'";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);

 if($total!=0)
 {
	
	
	 
		
		
		 echo "username already exist		";
	 
	 
 }
 else{
   
   if($_POST["password_1"]===$_POST["password_2"]){

$res=mysqli_query($conn,"INSERT INTO user_information values('$username','$email',MD5('$password_1'))");

 if($res)
 {
	 echo '<script type="text/javascript">';
echo ' alert("success")';  
echo '</script>';
   }}
 else
 {
	echo "password does not match"; 
 }
}


}


}


 ?>
 <center>
 <p>already have an account<a href="login.php"><b>LogIn Here</b></a></p>
 <p>login to business account<a href="buslogin.php"><b>LogIn Here</b></a></p>
 </center>

</body>
</html>