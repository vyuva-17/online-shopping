
<html>
   <head>
     
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href=".\css\bootstrap.min.css">
      <link rel="stylesheet"  type="text/css" href=".\css\w3.css">
      <link rel="stylesheet"   href="assets/css/font-awesome.main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href=".\css\material.css" rel="stylesheet">
      <script src=".\js\jquery.min.js"></script>
      <script src=".\js\bootstrap.min.js"></script>
      <script src=".\js\goto.js"></script>
      <script src=".\js\w3.js"></script>
      <link rel="stylesheet"  type="text/css" href=".\css\external.css">
   </head>
   <body>
      <div w3-include-html="header.html"></div>
      <script >
         w3.includeHTML();
      </script>
<div class="w3-button w3-bttn w3-bar-item w3-card-4 w3-section w3-container w3-text-white w3-teal w3-margin" style="width:40%; height:8%; font-size: 250%" onclick="document.getElementById('1').style.display='block'"><div class="w3-center">1.Login </div></div><br>
<div id="1" class="w3-modal w3-center">
<div class="w3-modalcontent">
<div class="w3-button w3-display-topright w3-teal" onclick="document.getElementById('1').style.display='none'">&times;</div>
<form action="log.php" class="w3-card-4 w3-section w3-container w3-text-teal w3-white w3-margin" style="width:70%;" method="post">
<p style="font-size:130%">1</p>
<h2 class="w3-center">Login</h2>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text"  name= "nam" placeholder="Name">
</div>
</div>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="Password"  name="password" placeholder="Password">
</div>
</div>
<button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding">Continue>></button>
</form>
</div></div>

<div id="2" class="w3-modal">
<div class="w3-modal-content">
<form action="pay.php" class="w3-card-4 w3-section w3-container w3-text-teal w3-white w3-margin" style="width:100%;" method="post">
<div class="w3-button w3- bttn w3-display-topright" onclick="document.getElementById('2').style.display='none'">&times;</div>
<h2 class="w3-center">Delivery Address</h2>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text" name="st" placeholder="Enter Street Name"/>
</div>
</div>

<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="number" name="dn" placeholder="Enter Door Number"/>
</div>
</div>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text" name="ta" placeholder="Enter Town or Area Name"/>
</div>
</div>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text" name="ec" placeholder="Enter City or district Name"/>
</div>
</div>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text"  name="es" placeholder="Enter State Name"/>
</div>
</div>
<div class="w3-row w3-section">
<div class="w3-rest">
<input class="w3-input" type="text" name="ecn" placeholder="Enter Country Name"/>
</div>
</div>

<button class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding"> COntinue>> </button>
</form>
</div></div>
<div class="w3-button w3-bttn w3-bar-item w3-card-4 w3-section w3-container w3-text-white w3-teal w3-margin" style="width:40%; height:8%; font-size: 250%" onclick="document.getElementById('4').style.display='block'">2.Payment </div>
<div id="4" class="w3-modal">
<div class="w3-modal-content">
<div class="w3-button w3- bttn w3-display-topright" onclick="document.getElementById('4').style.display='none'">&times;</div>
<div class="w3-button w3-bttn w3-bar-item w3-card-4 w3-section w3-container w3-text-white w3-teal w3-margin" style="width:40%; height:8%; font-size: 250%" onclick="document.getElementById('2').style.display='block'">cash on delivery </div><br>
<div class="w3-button w3-bttn w3-bar-item w3-card-4 w3-section w3-container w3-text-white w3-teal w3-margin" style="width:40%; height:8%; font-size: 250%" onclick="document.getElementById('3').style.display='block'"> Other Payments </div>
</div></div>

<div id="3" class="w3-modal">
<div class="w3-modal-content">
<div class="w3-button w3- bttn w3-display-topright" onclick="document.getElementById('3').style.display='none'">&times;</div>
<div  class="w3-card-4 w3-section w3-container w3-text-teal w3-white w3-margin" style="width:100%;">

<h1>Payment Request Form </h1>
<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "X03rCYmn";

// Merchant Salt as provided by Payu
$SALT = "BnSL7d6G97";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://test.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <h2>PayU Form</h2>
    <br/>
    <?php if($formError) { ?>
  
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" class="w3-card-4 w3-section w3-container w3-text-teal w3-white w3-margin" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
          <td>PG: </td>
          <td><input name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>
</div>
</div></div>
<div w3-include-html="footer.html"></div>
</body>
</html>