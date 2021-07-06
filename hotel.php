<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "you are logged out";
	header('location:login.php');
}
?>
<html>
  <head>
  <title>hotelsgsits</title>
<link rel="stylesheet" href="hotelsgsitsc.css " type="text/css"/>
  </head>
    <body>
	<div  class ="log_out" align = "right">
	<a href = "log_out.php">log out</a>
	</div>
	<p align = "right" class = "tic"><?php  echo $_SESSION['username']; ?> </p>
     <p class = "hot">
        <h1 align ="center">ticket</h1>
     </p>

<!-- for the first index list -->

      <ul class = "index">
         <li><a href = "file:///C:/Users/91896/Desktop/manali/hotelsgsitsflight.html">flight</a></li>
         <li><a href = "file:///C:/Users/91896/Desktop/manali/hotelsgsitsbus.html">bus</a></li>
         <li><a href = "file:///C:/Users/91896/Desktop/manali/hotelsgsitstrain.html">train</a></li>
         <li><a href = "file:///C:/Users/91896/Desktop/manali/hotelsgsitshotels.html">hotels</a></li>
      <li><a href = "#">more</a>
                <ul>
                   <li><a href = "#">cabs</a></li>
                   <li><a href = "#">visa</a></li> 
                   <li><a href = "#">charter flight</a></li> 
                </ul>
        </li>
     
     </ul>
     </ul><pre>
     <p class = "tic" align = "center">


book a flight ticket</p>
</pre>
<table class = "moh" align = "center" border = "2" height = 100px width = 90%>
       <tr>


         <th> city from <br/><form ><input type ="text" name="user" id = "myfromm"  placeholder = "Delhi" onkeyup="searchplaces()" >
		 







</th>
         <th> to <br/><input type = "text" name="userr" id = "myto" placeholder = "mumbai"></th>
         <th> departure <br/><input type = "date"></th>
         <th> return <br/><input type = "date" ></th>
         <th>travellers & class <br/>
<ul class = "nomame">
                
                <li><a href = "#">no. of adults</a>
 <ul class = "nomam">
                
                <li><a href = "#">1</a></li>
                <li><a href = "#">2</a></li>
                <li><a href = "#">3</a></li>
                <li><a href = "#">4</a></li>
                <li><a href = "#">5</a></li>
                <li><a href = "#">6</a></li>
                <li><a href = "#">7</a></li>
                <li><a href = "#">8</a></li>
                <li><a href = "#">9</a></li><br/>                
                <li><a href = "#">&gt;9</a></li>
              </ul>
</li>
          <li><a href = "#">no. of kids</a>
<ul class = "noma">
                
                <li><a href = "#">1</a></li>
                <li><a href = "#">2</a></li>
                <li><a href = "#">3</a></li>
                <li><a href = "#">&gt;3</a></li>
</ul>
</li>
                <li><a href = "#">travel class</a>
<ul class = "nom">
                
                <li><a href = "#">economy</a></li>
                <li><a href = "#">premium</a></li>
                <li><a href = "#">buisness</a></li>
               
</ul>
</li>
                   
         </th>
       </tr>
</table>


<script>
   const searchplaces = () =>{
   let filter = document.getElementById('myfrom').value.toUpperCase();
   
   let ul = document.getElementById('myul');
   let li = ul.getElementsByTagName('li');

   for(var i=0; i<li.length; i++)
{
    let a = li[i].getElementsByTagName('a')[0];
    let textValue = a.textContent;

    if(textValue.toUpperCase().indexOf(filter) > -1){
         li[i].style.display = '';
}   
else{
  li[i].style.display = 'none';
}
}
}
</script>

<script>
function conct(){
var s1;
var s2;
var Tstr;
 
s1=document.getElementById("myto").value;
s2=document.getElementById("myfromm").value;
Tstr=s2+" to "+s1;
document.getElementById("myfinal").value=Tstr;
}
 
</script>







<input type = "hidden" name = "bob"  id = "myfinal">
<center>
<input onclick ="conct()" type="submit" value = "submit" name = "submit" class ="subm" >	</form>
</center>


<?php
if(isset($_REQUEST["submit"]))
{
	$bob=$_REQUEST["bob"];
 include("connection.php");
 error_reporting(0);
 $query = "SELECT * FROM final WHERE confirm_cities LIKE '%$bob%'";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);

 ?>
      <table class = "myst" border = "2" bgcolor="white" align="center">
	    <tr>
		  
		  <th>confirm_cities</th>
		  <th>flight_name</th>
		  <th>flight_number</th>
		  <th>boarding_time</th>
		  <th>end_time</th>
		  <th>ina_week</th>
		  <th>price</th>
		</tr>  
 <?php
 
 if($total!=0)
 {
	
	 while($result=mysqli_fetch_assoc($data))
	 {
		
		
		 echo "
		       <tr  > 
		  
		  <td >".$result['confirm_cities']."</td>
		  <td>".$result['flight_name']."</td>
		  <td>".$result['flight_number']."</td>
		  <td>".$result['boarding_time']."</td>
		  <td>".$result['end_time']."</td>
		  <td>".$result['ina_week']."</td>	
          <td>".$result['price']."</td>		
          <td><a href = 'testdatabase.php?fno=".$result['flight_number']."'>select</a></td>				  
		      </tr> 
		";
	 }
	 
	 
	 
 }
}
?>
</table>


   

    </body>

</html>
