

<?php
$SellerFirstNameerror = "";
$SellerLastNameerror = "";
$SellerPhoneNumbererror = "";
$SellerEmailAddresserror ="";
$SellerGendererror ="";
$SellerPassworderror="";

$SellerFirstName=$SellerLastName=$SellerPhoneNumber=$SellerEmailAddress=$SellerGender=$SellerPassword="";

?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>
<body>

<?php

Include ('header.php');

?>

<h1>Profile</h1>
<form action="../controller/action_signup.php" method="POST">
  <label for="SellerFirstName">First name:</label><?php echo $SellerFirstNameerror ; ?><br>
  <input type="text" id="SellerFirstName" name="SellerFirstName" value="" placeholder ="enter your FirstName"><br>
  
  <label for="SellerLastName">last name:</label><?php echo $SellerLastNameerror ; ?><br>
  <input type="text" id="SellerLastName" name="SellerLastName" value="" placeholder ="enter your LastName"><br>
  
  <label for="SellerPhoneNumber">Phone Number:</label><?php echo $SellerPhoneNumbererror ; ?><br>
  <input type="text" id="SellerPhoneNumber" name="SellerPhoneNumber" value="" placeholder ="enter your PhoneNumber"><br>
  
  <label for="SellerEmailAddress">Email Address:</label><?php echo $SellerEmailAddresserror ; ?><br>
  <input type="text" id="SellerEmailAddress" name="SellerEmailAddress" value="" placeholder ="enter your EmailAddress"><br>
  
   <label for="SellerGender">Gender:</label><?php echo $SellerGendererror ; ?><br>
  <input type="text" id="SellerGender" name="SellerGender" value="" placeholder ="enter your Gender"><br>
  
  <label for="SellerPassword">Password:</label><?php echo $SellerPassworderror ; ?><br>
  <input type="text" id="SellerPassword" name="SellerPassword" value="" placeholder ="enter your password"><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="reset">

  <br><br>
</form>






</body>
</html>