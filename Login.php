<!--
Author: Anal Shah
-->
<?php
session_start ();
if (! empty ( $_SESSION ['email'] ))
	header ( 'Location:Home.php' );
?>
<!DOCTYPE html>
<html>
<head>
<title>Login - AppointDoctor</title>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet"
	media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/login.css">
<!--web-font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<!--//web-font-->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="Hospice Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="nav">
            <div class="logomate">
                <div class="leftbar">
                    <img src="images/hosplogo.jpg" alt="">
                </div>
                <div class="logohead">
                    <h2>Heaven's Care Hospital</h2>
                </div>
            </div>
            <div class="rightbar">
                <a href="index.html"><span></span>
                        <span></span>
                        <span></span>
                        <span></span> Home</a>
                <div class="navborder">
                </div>
                <a href="about.html"><span></span>
                        <span></span>
                        <span></span>
                        <span></span> About Us</a>
                <div class="navborder"></div>
                <a href="contact.html"><span></span>
                        <span></span>
                        <span></span>
                        <span></span> Contact US </a>
            </div>
        </div>
	<!--//header-->
	<!--blog-->

	<div class="blog">
		<div class="container">
			<div class="work-title">
				<h3>LOGIN</h3>
			</div>
			<div id="loginBox" class="features-info" style="text-align: center;">

				<form id="loginForm" method="POST" action="Connectivity.php"
					style="margin: auto;">
					<div>
						<input type="email" class="text" name="user"
							placeholder="Username" required />
					</div>
					<div>
						<input type="password" name="pass" placeholder="Password" required />
					</div>
					<input type="submit" id="login" value="Sign in"></input><br /> <span><a
						href="Registration.php">Sign Up</a></span>
				</form>

			</div>
		</div>
	</div>
	<!--//blog-->
</body>
</html>
