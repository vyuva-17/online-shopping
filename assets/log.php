<?php 
$n=$_POST["nam"]; 
  $password=$_POST["password"];//receiving password field value in $password variable 
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
$n=$_POST["nam"]; 
 $password=$_POST["password"];
 $sqll = 'SELECT * FROM signup'; 
 $retval=mysqli_query($conn, $sqll);  
  if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    if($n==$row['name']){
    	if($password==$row['password']){
$sql = "INSERT INTO login(name,password) VALUES ('$n','$password')"; 

header('location: index.php?login=loggedout&id=1');
    	}
    } else{
    	header('location: index.php?login=&id=1');
    } 
        
 } }//end of while  
 
mysqli_close($conn); 
?>  