<?php 
$n=$_POST["first"]; 
 //receiving password field value in $password variable 
setcookie ("user","$n") ;//r
 $host = 'localhost:3306';  
$user = 'root';  
$pass = ''; 
$db='test' ;
$conn= mysqli_connect($host, $user, $pass,$db);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
$n=$_POST["first"]; 
$na=$_POST["last"];
 $password=$_POST["email"];
 $phone=$_POST["phone"];
 $message=$_POST["message"];
 $sqll = 'SELECT * FROM signup'; 
 $retval=mysqli_query($conn, $sqll);  
  if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    if($n==$row['name']){
    	if($password==$row['email']){
$sql = "INSERT INTO contact(fname,lname,email,phone,message) VALUES ('$n','$na','$password','$phone','$message')"; 
header('location: index.php?contact=loggedout&id=2');
    	}
    }else  {
    	header('location: index.php?contact=&id=2');
        
 } }//end of while  
    }
 

mysqli_close($conn); 
?>  