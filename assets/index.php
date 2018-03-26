 <?php 
 $id=$_GET['id'];
 switch($id){

 case 1:
   if(!empty($_GET['login'])){
      $string = '<h1>success!</h1> \nYou have Been Successfully Log-In';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   else{
      $string = '<h1>Soory!!!</h1> \nYou have Been Not Successfully Log-In';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   break;
   case 2:
    if(!empty($_GET['contact'])){
      $string = '<h1>success!</h1> \nYou Will Get Updates Regularly';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   else{
      $string = '<h1>Soory!!!</h1>\nTry Again To Get Regular Updates/Discounts';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   break;
   case 3:
   if(!empty($_GET['pfail'])){
      $string = '<h3>Your order is Not  Placed </h3>\n<h4>You may try again to  make the payment.</h4>';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   else{
      $string = '<h1>Soory!!!</h1> \nInvalid Transaction.\nPlease try again';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   break;
   case 4:
    if(!empty($_GET['psuccess'])){
      $string = '<h1>your order is placed successfully!</h1> \n<h4>We Will Update the Shipping details through Log-In Mail-id.</h4>';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   else{
      $string = '<h1>Soory!!!</h1> \nInvalid Transaction.\nPlease try again';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   break;
   case 5:
   if(!empty($_GET['delivery'])){
      $string = '<h3>Thanks For Shopping!!! </h3>';
          echo "<script type='text/javascript'>alert(\"$string\");</script>";;
   }
   break;
}
$host = 'localhost:3306';  
$user = '';  
$pass = ''; 
$db='test' ;
$conn= mysqli_connect($host, $user, $pass,$db);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
$sqll = 'SELECT * FROM os '; 
$retval=mysqli_query($conn, $sqll); 

  if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    if(1==$row['id']){
        $p1=$row['path'];
   $n1=$row['name'];
   $pn1=$row['pname'];
    }
    if(2==$row['id']){
        $p2=$row['path'];
   $n2=$row['name'];
   $pn2=$row['pname'];
    }
    if(3==$row['id']){
        $p3=$row['path'];
   $n3=$row['name'];
   $pn3=$row['pname'];
    }
    if(4==$row['id']){
        $p4=$row['path'];
   $n4=$row['name'];
   $pn4=$row['pname'];
    }
    if(5==$row['id']){
        $p5=$row['path'];
   $n5=$row['name'];
   $pn5=$row['pname'];
    }
    if(6==$row['id']){
        $p6=$row['path'];
   $n6=$row['name'];
   $pn6=$row['pname'];
    }}}
    mysqli_close($conn); 
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href="css/w3.css">
      <link rel="stylesheet"   href="css/font-awesome.main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/material.css" rel="stylesheet">
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/goto.js"></script>
      <script src="js\w3.js"></script>

      <link rel="stylesheet"  type="text/css" href="css/external.css">
   </head>
   <body>
     
      <div w3-include-html="header.html"></div>
      <script >
         w3.includeHTML();
      </script>
      
      <div class="w3-hide-small">
         <div class="w3-card-4 w3-light-grey w3-border-top " style="width:300%; height:40%;">
            <img class=" mySlides w3-animate-left" src="images\s.jpg">
            <img class="mySlides w3-animate-left" src="images\e.jpg">
            <button class=" w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
         </div>
      </div>
      <div class="w3-content  w3-center" style="padding-top:5%;color:teal; ">
         <h1>  <?php echo $pn1;?>  </h1>
      </div>
      <div style="float:right;">
         <a href="dynamic.php?id=7">
            <button class="w3-btn w3-teal">View All</button>
         </a>
      </div>
      <div class="w3-row-padding w3-theme">
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               
               <img src=" <?php echo $p1;?> " style="width:17%;" onclick="document.getElementById('modal01').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4 title="$10"> <?php echo $n1;?> </h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               
               <img src="<?php echo $p2;?> " style="width:37%"onclick="document.getElementById('modal02').style.display='block'">
               
               <div class="w3-container w3-teal">
                  <h4><?php echo $n2;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
            
               <img src="<?php echo $p3;?> " style="width:18.9%" onclick="document.getElementById('modal03').style.display='block'">
              
               <div class="w3-container w3-teal">
                  <h4><?php echo $n3;?></h4>
               </div>
            </div>
            <br><br><br>
         </div>
      </div>
      <div class="w3-content  w3-center" style="color:teal; ">
         <h1> <?php echo $pn4;?> </h1>
      </div>
      <div style="float:right;">
          <a href="dynamic.php?id=30">
            <button class="w3-btn w3-teal">View All</button></p>
         </a>
      </div>
      <div class="w3-row-padding w3-theme">
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
              
               <img src="<?php echo $p4;?> " style="width:18%;" onclick="document.getElementById('modal04').style.display='block'">
              
               <div class="w3-container w3-teal">
                  <h4><?php echo $n4;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
             
               <img src="<?php echo $p5;?>" style="width:20%" onclick="document.getElementById('modal05').style.display='block'">
             
               <div class="w3-container w3-teal">
                  <h4><?php echo $n5;?></h4>
               </div>
            </div>
         </div>
         <div class="w3-third w3-section">
            <div class="w3-card-4 w3-center">
               
               <img src="<?php echo $p6;?>" style="width:37%;height:25%" onclick="document.getElementById('modal06').style.display='block'">
            
               <div class="w3-container w3-teal">
                  <h4><?php echo $n6;?></h4>
               </div>
            </div>
            <br><br><br>
         </div>
      </div>
      <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">

       <div class="w3-card-4 w3-center">
        <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>

               <img src="<?php echo $p1;?>" class="resposive"onclick="document.getElementById('modal01').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n1;?></h4>
                  
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
  
  <div id="modal02" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p2;?>" class="resposive"onclick="document.getElementById('modal02').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n2;?></h4>
                  
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
 <div id="modal03" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p3;?>" class="resposive"onclick="document.getElementById('modal03').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n3;?></h4>
                  
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal04" class="w3-modal" onclick="this.style.display='none'">
   
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p3;?>" class="resposive"onclick="document.getElementById('modal04').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n4;?></h4>
                  
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div><div id="modal05" class="w3-modal" onclick="this.style.display='none'">
  
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p5;?>" class="resposive"onclick="document.getElementById('modal05').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n5;?></h4>
                 
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
<div id="modal06" class="w3-modal" onclick="this.style.display='none'">
    
    <div class="w3-modal-content w3-animate-zoom">
       <div class="w3-card-4 w3-center">
         <span class="w3-button w3-hover-grey w3-teal w3-xlarge w3-display-topright">&times;</span>
               <img src="<?php echo $p6;?>" class="resposive"onclick="document.getElementById('modal06').style.display='block'">
               <div class="w3-container w3-teal">
                  <h4><?php echo $n6;?></h4>
                  
               </div>
            </div>
            <div class="w3-row-padding">
<div class="w3-half">
<form method="post" action="cart.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; margin-left:10%;">Add to cart >> </button>
</form></div>
<div class="w3-half">
<form method="get" action="payment.php">
<button class="w3-button w3-block w3-container w3-section w3-teal w3-ripple w3-padding" style="width:70%; padding-left:30%; float:right; padding-bottom:340%;  margin-left:290%; ">Buy Now >> </button>
</form></div></div>
  </div>
</div>
      <div w3-include-html="footer.html"></div>
   </body>
</html>
