<?php
error_reporting(0);
$fname=$_POST['fname'];
$ph=$_POST['ph'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$instraste=$_POST['instraste'];
$enq=$_POST['enq'];
$body="1.  Name : = $fname"."
"."2.  Phone, Mobile No. : = $ph"."
"."3.  Address. : = $add"."
"."4.  Pin_Code : = $pin"."
"."5.  City : = $city"."
"."6.  State : = $state"."
"."7. Country : = $country"."
"."8. Email_id : = $email"."
"."9. Intrasted in  : = $instraste"."
"."10. Enquiry : = $enq";
$to="info@sahnibrothers.com";
$sub=$_POST['instraste'];
$from=$_POST['country'];
$headers = "From: $from";
$rs=mail($to,$sub,$body,$headers) or die("Email has been not sent");
//$rs1=mail($to1,$sub,$body,$headers) or die("Email has been not sent");
//$rs2=mail($to2,$sub,$body,$headers) or die("Email has been not sent");
if($rs)
header("location:index.html");
?>