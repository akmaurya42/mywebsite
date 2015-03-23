<?php
error_reporting(0);
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$qua=$_POST['qua'];
$ph=$_POST['ph'];
$gender=$_POST['gender'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$aply=$_POST['aply'];
$enq=$_POST['enq'];
$body="1. Frist Name : = $fname"."
"."2.  Last Name := $lname"."
"."3.  Qualification : = $qua"."
"."4.  Phone, Mobile No. : = $ph"."
"."5.  Gender : = $gender"."
"."6.  Address. : = $add"."
"."7.  Pin_Code : = $pin"."
"."8.  City : = $city"."
"."9.  State : = $state"."
"."10. Country : = $country"."
"."11. Email_id : = $email"."
"."12. Apply For : = $aply"."
"."13. Remark : = $enq";
$to="gopal@kaizenconferences.com,rajkumar@kaizenconferences.com";
$sub=$_POST['aply'];
$from=$_POST['country'];
$headers = "From: $from";
$rs=mail($to,$sub,$body,$headers) or die("Email sent Suceccfully We will contact Very Soon.");
//$rs1=mail($to1,$sub,$body,$headers) or die("Email sent Suceccfully We will contact Very Soon.");
//$rs2=mail($to2,$sub,$body,$headers) or die("Email sent Suceccfully We will contact Very Soon.");
if($rs)
header("location:index.html");
?>