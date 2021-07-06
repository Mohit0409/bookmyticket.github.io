
<?php
session_start();
if(!isset($_SESSION['username']))
 include("connection.php");
?>
<html>
<head>
<link rel="stylesheet" href="style.css " type="text/css"/>
</head>
<body>


<center>
<div class = "boxed">
<form action="" method="post">
      
	  costumer_name &nbsp;<input type="text" name="costumer_name"><br>
	  age  &nbsp; &ensp; <input type="text" name="age"><br>
	  female  <input type="radio" name="gender" id = "female" value = "female"><br>
	  male &nbsp; &nbsp; <input type="radio" name="gender" id = "male" value = "male"><br>
	  other &nbsp; &nbsp; <input type="radio" name="gender" id = "other" value = "other"><br>
      <input type="submit" name = "check">
</form>
</div>
</center>

<?php
 include("connection.php");
if(isset($_REQUEST["check"]))
{

   $costumer_name=$_POST['costumer_name'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
 

$res=mysqli_query($conn,"INSERT INTO brandnew values('$costumer_name','$age','$gender',now())");

 if($res)
 {

	 echo '<script type="text/javascript">';
echo ' alert("success")';  
echo '</script>';
  
	 
 }
 else
 {
	echo "failed"; 
 }
 
 
}

 ?>
 
 
 

<?php
if(isset($_REQUEST["check_detail"]))
{
	
 include("connection.php");
 error_reporting(0);
 $query = "SELECT * FROM brandnew WHERE DATE(currentdate) = CURDATE() ORDER BY currentdate;";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);

 echo "total fare :" .$total * $_SESSION['price'];
 
 echo "<br>";
 


 ?>
      <table class = "myst" border = "2" bgcolor="white" align="center">
	    <tr>
		  
		  <th>costumer_name</th>
		  <th>age</th>
		  <th>gender</th>
		  <th>currentdate</th>
		  
		</tr>  
		<input type="submit" value = "make payment" name="make_pay">
		
		
		
 <?php
 
 if($total!=0)
 {
	
	 while($result=mysqli_fetch_assoc($data))
	 {
		
		
		 echo "
		       <tr> 
		  
		  <td >".$result['costumer_name']."</td>
		  <td>".$result['age']."</td>
		  <td>".$result['gender']."</td>
		  <td>".$result['currentdate']."</td>
		 	  
		      </tr> 
		";
	 }
	 
 }
}
?>
</table>


 
<?php
	
	include("connection.php");
	if(isset($_REQUEST["reset"]))
		
{


   
   
   $email_search = " TRUNCATE brandnew";
 $query = mysqli_query($conn,$email_search);


 if($query)
 {
	
	
		header( "location: testdatabase.php?fno='$fno'");
	exit();
		
		 
	 
	 
 }

 
}


?>




<?php

  
 
	$fno = $_GET['fno'];
 include("connection.php");
 error_reporting(0);
 $query = "SELECT price FROM final WHERE flight_number = '$fno'";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);


 
 if($total!=0)
 {
	
	
	 while($result=mysqli_fetch_assoc($data))
		 $_SESSION['price'] = $result['price'];
	 {
		
		echo "flight_number :" .$fno;
		 echo "<br>";
		 echo "price:" .$_SESSION['price'];
	 }

	 
	 
 }

 
 ?>

     



<form> 
<input type="submit" value = "check your details here" name = "check_detail" >

 <input type="submit" value = "reset" name="reset">
 </form>
 <p><a href="hotel.php"><b>home page</b></a></p>
</body>
</html>