<?php
$name = trim(stripslashes($_POST['name']));
$email = trim(stripslashes($_POST['email']));
$phone = trim(stripslashes($_POST['phone']));
$subject = trim(stripslashes($_POST['subject']));
$msg = trim(stripslashes($_POST['msg']));

$error = array(); 

// if(empty($name))
// {
// $error['name_error'] =  'Name is required';
// }

if (empty($name)) {
    $error['name_error'] = 'Name is required';
} elseif (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    $error['name_error'] = 'Name should only contain letters and spaces';
}

if(empty($email))  
{
$error['email_error'] =  'Email is required';
}
elseif(!valid_email($email))
{
$error['email_error'] =  'Invalid email format';
}
// if(empty($phone))
// {
// $error['phone_error'] =  'Phone is required';
// }

if (empty($phone)) {
    $error['phone_error'] = 'Phone is required';
} elseif (!preg_match("/^[0-9]{8,}$/", $phone)) {
    $error['phone_error'] = 'Phone should contain at least 8 numbers';
}



if(empty($subject))
{
$error['subject_error'] =  'Subject is required';
} elseif (!preg_match("/^[A-Za-z\s]+$/", $subject)) {
    $error['subject_error'] = 'Subject should only contain letters and spaces';
}
if(empty($msg))
{
$error['msg_error'] =  'Message is required';
}
 

if(!empty($error))
{
echo json_encode(array('error'=>$error));
}
else
{
$Body ="";
$Body .="<html>
<head>

<style type='text/css'>
.TFtable{width:100%;border-collapse:collapse;}
.TFtable td{padding:7px; border:#EAF2FA 1px solid;}
.TFtable tr{background: #EAF2FA;}
.			TFtable tr:nth-child(odd){background: #EAF2FA;}
.			TFtable tr:nth-child(even){background: #FFFFFF;}
</style>

</head>

<body>

<div style='background: #bad6f3; padding:7px; text-transform:uppercase; text-align:center; border:#bad6f3 1px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>
<h3> Contact Form From Shiffa Wellness</h3>
</div>

<table class='TFtable' style='width:100%;border-collapse:collapse;'>";

$Body .= "<tr style='background: #EAF2FA; '>
<td style='padding:7px; width:30%; border:#bad6f3 2px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>Name</td><td style='padding:7px; background: #fff; border:#bad6f3 2px solid;'>";
$Body .= $name;
$Body .="</td></tr>"; 

$Body .= "<tr style='background: #EAF2FA'>
<td style='padding:7px; width:30%; border:#bad6f3 2px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>E-mail Address</td><td style='padding:7px; background: #fff; border:#bad6f3 2px solid;'>";
$Body .= $email;
$Body .= "</td></tr>";

$Body .= "<tr style='background: #EAF2FA'>
<td style='padding:7px; width:30%; border:#bad6f3 2px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>Phone</td><td style='padding:7px; background: #fff; border:#bad6f3 2px solid;'>";
$Body .= $phone;
$Body .= "</td></tr>";

$Body .= "<tr style='background: #EAF2FA'>
<td style='padding:7px; width:30%; border:#bad6f3 2px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>Subject</td><td style='padding:7px; background: #fff; border:#bad6f3 2px solid;'>";
$Body .= $subject; 
$Body .= "</td></tr>";


$Body .= "<tr style='background: #EAF2FA'>
<td style='padding:7px; width:30%; border:#bad6f3 2px solid;font-family:Arial, Helvetica, sans-serif;font-weight:bold;'>Message</td><td style='padding:7px; background: #fff; border:#bad6f3 2px solid;'>";
$Body .= $msg;
$Body .= "</td></tr></table>		 
</body></html>";
//echo($Body);

/*************************old start********************************/
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From:$name <website_enquiry@eskon.in>" . "\r\n";
// $headers .= "Bcc: rakesh@eskonwebsolutions.com";

/*************************old start********************************/

$message =  $Body;	

$Subject ='Website Enquiry From '.$email;
$EmailTo ='rakesh@eskonwebsolutions.com';
$success1 = @mail($EmailTo, $Subject, $message, $headers);  
if($success1 >0){
echo json_encode(array('success'=>'Thank You For Your Enquiry, We Will Contact You Shortly!'));
}
else{
echo json_encode(array('mail_error'=>'Could not send mail from this email id - '.$email));
}
}
function valid_email($str)
{
if (function_exists('idn_to_ascii') && $atpos = strpos($str, '@'))
{
$str = substr($str, 0, ++$atpos).idn_to_ascii(substr($str, $atpos));
}

return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
}
?>