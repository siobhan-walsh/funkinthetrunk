<!doctype html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Funk in the Trunk</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mediaqueries.css">
	<link rel="icon" href="images/favicon.jpg" type="image/jpg">
	<script type="text/javascript">

		var slideimages = new Array() // create new array to preload images
		slideimages[0] = new Image() // create new instance of image object
		slideimages[0].src = "images/bannerfinal1.jpg" // set image object src property to an image's src, preloading that image in the process
		slideimages[1] = new Image()
		slideimages[1].src = "images/bannerfinal2.jpg"
		slideimages[2] = new Image()
		slideimages[2].src = "images/bannerfinal3.jpg"

	</script>
</head>

<body>
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

		<?php $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$formcontent="From: $fname . $lname \n Message: $message";
		$recipient = "nicholas@funkinthetrunk.net";
		$subject = "Contact Form";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

		?>


		<nav>

			<ol>

    			<a href="index.html"><li>Home</li></a>

       			<a href="about.html"><li>About</li></a>

        		<a href="music.html"><li>Music</li></a>

       			<a href="events.html"><li>Events</li></a>

        		<a href="contact.html"><li>Contact Us</li></a>

   			</ol>

		</nav>
		<div class="middlesection">	
			<div class="thankyou">
				<dl>
        			<dt>Thank you!</dt>
						<dd>Your message has been submitted.</dd>
                		<dd>We will get back to you as soon as we can!</dd>
        		</dl>
			</div>
		</div>


	<footer></footer>
</div>
<div class="socialmedia">
	<div class="smbuttons">
			<a href="http://www.facebook.com/funkinthetrunkmusic" target="_blank"><img src="images/facebookicon.png" alt="facebook" ></a>
    		<a href="https://www.youtube.com/channel/UCyvhGQ6NigqCNQpmtbOW_vg" target="_blank"><img src="images/youtubeicon.png" alt="youtube"></a>
    		<a href="http://www.twitter.com/funkinthetrunkz" target="_blank"><img src="images/twittericon.png" alt="twitter"></a>
    		<a href="http://www.instagram.com/funkinthetrunk" target="_blank"><img src="images/instagramicon.png" alt="instagram" ></a>
    </div>

</div>

</body>
</html>