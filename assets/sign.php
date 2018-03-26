<?php 
$n=$_POST["name"]; 
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

 
$n=$_POST["name"]; 
 $password=$_POST["password"];
 $email=$_POST["email"];
  

$sql = "INSERT INTO signup(name,password,email) VALUES ('$n','$password','$email')";  
if(mysqli_query($conn, $sql)){  
  //Note: Mail function works only when the site is hosted.
 ini_set("sendmail_from", "yuvavjrnesh@gmail.com");  
   $to ="yuvavjrnesh@gmail.com"  ;//change receiver address  
   $subject = "Online Shopping";  
   $message = "You Are successfully Registerd";  
   $header = "From:yuvavjrnesh@gmail.com \r\n";  
  
   $result = mail ($to,$subject,$message,$header);  
  
   if( $result == true ){  
      echo "Check Your Mail...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }   
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn); 
?>  
