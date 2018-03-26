<?php 

 $host = 'localhost:3306';  
$user = 'root';  
$pass = ''; 
$db='test' ;
$conn= mysqli_connect($host, $user, $pass,$db);  


 $n=$_POST["st"]; 
$na=$_POST["dn"];
 $password=$_POST["ta"];
 $phone=$_POST["ec"];
 $message=$_POST["es"];
 $mess=$_POST["ecn"];
 if(! $conn )  
 {  
   die('Could not connect: ' . mysqli_error());  
 }  else{
$sql = "INSERT INTO delivery(st,dn,ta,ec,es,ecn) VALUES ('$n','$na','$password','$phone','$message','$mess')"; 
header('location: index.php?delivery=loggedout&id=5');

    	}
   
 mysqli_close($conn); 
?>  