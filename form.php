<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Thank you</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

//Sending Email to form owner
$header = "From: $email\n"
. "Reply-To: $email\n";
$subject = "Submission From My Form";
$email_to = "nicholas@funkinthetrunk.net";
$message = "name: $fname . $lname\n"
. "email: $email\n";
mail($email_to, $subject ,$message ,$header ) ;

?>

<h2>Thank you for your submission!</h2>

</body>
</html>