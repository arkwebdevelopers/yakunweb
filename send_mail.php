<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['emid'];
$comments=$_POST['comments'];
if ($name!="" && $phone!="" && $email!="")
{
$to = "info@yakun.net";
$subject = "Online Query";
$message= "\n Name: $name  \n\n Email: $email \n\n Phone: $phone \n\n Comments: $comments";
$headers = "From:" . $email;
mail($to,$subject,$message,$headers);
?>
<html>
<head>
<title>Quick Contact</title>
</head>
<body bgcolor="#F9E1AE">
<br /><br /><center>
<div align="center" style="border:1px solid #a00303;background-color:#FFDB90">
<br />
<font size=2 face="Arial, Helvetica, sans-serif" color="#ED5800"><b>Thank You for Mailing Us.</b></font>
<br /><br />
</div>
</body>
</html>
<?php
}
?>
