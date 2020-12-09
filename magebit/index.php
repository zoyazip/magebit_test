<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/script.js"></script>
	<title>pineapple.</title>
</head>
<body>
																													<!-- LEFT SIDE -->
	<div class="leftSide">
	<header class="header">
		<div class="container">
			<div class="navigation">
				<a href="#"><img src="./img/Union.png"></a>
				<a class="titleLogo" href="#"><img src="./img/pineapple..png"></a>
				<nav class="navigationLinks">
					<a href="#">About</a>
					<a href="#">How it works</a>
					<a href="#">Contact</a>
				</nav>
		</div>
		</div>
	</header>
	<div class="main">
		<div class="content">
			<div class="container">
				<div id="article">
					Subscribe to newsletter
				</div>
				<div class="text">
					Subscribe to our newsletter and get 10% discount on pineapple glasses.
				</div>
				<div class="InputField">
					<form name="form" action="./php/email.php" method="POST" onsubmit="return emptyEmail();">
						<input class="email" type="text" name="emailInput" placeholder="Type your email address here...">
						<!--Could use also type="email" and required-->
																													<!-- PHP ERRORS  -->
				</div>
				<div id="error">
					<?php
						$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							if (strpos($fullUrl, "email=empty") == true) {
								echo "Email address is required";
							}
							else if(strpos($fullUrl, "email=invalid") == true) {
								echo "Please provide a valid e-mail address";
								
							}
							else if (strpos($fullUrl, "email=illegal") == true) {
								echo "We are not accepting subscriptions from<br> Columbia emails";
							}
							else if (strpos($fullUrl, "email=check") == true) {
								echo "You must accept the terms and conditions";
								
							}
							else if (strpos($fullUrl, "email=success") == true) {
								header("Location: ./success.html");

							}
					?>
				</div>
				<div class="checkbox">
						<input id="checkButton" type="checkbox" name="termsCheck" value="1" ><label for="checkButton"></label>
					</form>
					<div class="terms">I agree to <a href="#" tabindex="1">terms of service</a></div>
				</div>
				<hr>
				<div class="footer">
					<div class="facebookIcon"><a href="#"></a></div>
					<div class="instagramIcon"><a href="#"></a></div>
					<div class="twitterIcon"><a href="#"></a></div>
					<div class="youtubeIcon"><a href="#"></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
																					<!-- RIGHT SIDE(VISIBLE ONLY IN DESKTOP VERSION) -->
	<div class="rightSide">
	</div>
</body>
</html>