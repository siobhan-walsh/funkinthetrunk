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
$text = $_POST['text']'

//Sending Email to form owner
$header = "From: $email\n"
. "Reply-To: $email\n";
$subject = "Submission From My Form";
$email_to = "nicholas@funkinthetrunk.net";
$message = "name: $fname . $lname\n"
. "email: $email\n"; . "text: $text\n";
mail($email_to, $subject ,$message ,$header ) ;

?>


<div class="pagewrap">
<header>
	<div class="centering">
	<img src="images/drums.jpg" id="slide" alt="Funk in the Trunk" >

<script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<2)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",4000)
}

slideit()

</script>

    </div>
</header>
<nav>

	<ul>

    	<a href="index.html"><li>Home</li></a>

     	<a href="about.html"><li>About</li></a>

        <a href="music.html"><li>Music</li></a>

        <a href="events.html"><li>Events</li></a>

        <li><span style="color:#00a99a;">Contact Us</span></li>

    </ul>

</nav>
<h2>Thank you for your submission!</h2>
<footer></footer>
</div>
</div>
</div>
<div class="socialmedia">
<div class="smbuttons">
	<a href="http://www.facebook.com/funkinthetrunkmusic" target="_blank"><img src="images/fb.png" alt="facebook"></a>
    <a href="https://www.youtube.com/channel/UCyvhGQ6NigqCNQpmtbOW_vg" target="_blank"><img src="images/youtube.png" alt="youtube"></a>
    <a href="http://www.twitter.com/funkinthetrunkz" target="_blank"><img src="images/twit.png" alt="twitter"></a>
    <a href="http://www.instagram.com/funkinthetrunk" target="_blank"><img src="images/insta.png" alt="instagram"></a>
    </div>
  </div>
</body>
</html>