<!doctype html>

<!-- #BeginTemplate "temp.dwt" -->

<head>
		<title>Template</title>
		<link href="css/CSSreset.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
		<script type='text/javascript' src='js/modernizr.custom.13303.js'></script>
		<script type="text/javascript" src="login.js"></script>
		<script type='text/javascript' src='js/jquery.shockwave.js'></script> 
		<link href="css/pop.css" media="screen" type="text/css" rel="stylesheet">
  		<script src="js/pop.js" language="JavaScript" type="text/javascript"></script>
		<script type='text/javascript' src='js/jquery.shockwave.effects.js'></script>
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="js/jquery.mi.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		  
		<script>
		$(document).ready(function() {
		  $("#datepicker").datepicker();
		});
		</script>

		</head>

<body>


<div id="all">

				<div id="main">	
						<div id="head">
								<div id="logo">
										<img src="images/336430_393239227406717_943581166_o.jpg" alt="Neyon Schap" title="Neyon Schap" />
								</div>								
								<div>	 
										<div id="socialMedia" class="auto-style1">
												<p>
												<img alt="Call us at" src="images/phone.png" title="Call Now" width="144"></p>
												
										</div><br><br><br>
										<div id="login">
												<?php
													include 'php/functions.php';
													if(!loggedin())
													{	
														echo "<a href=\"register.php\"> <img src=\"images/signup-icon copy.png\" title=\"Register Now\" alt=\"Register Now\"/> </a>";							
														echo "<div id=\"popupbox\"> 
																
																<form action=\"php/login.php\" method=\"POST\">
																<form method=\"post\">
																		<center>Username: <input type=\"text\" name=\"username\" > <p /></center>
																		<center>Password: <input type=\"password\" name=\"password\"> <p /></center>
																		
																		<center><input type=\"checkbox\" name=\"rememberme\" value=\"On\"> Remember Me<br />
																		<input type=\"submit\" name=\"submit\" value=\"log in\"></center>
																</form></form>
																<center><a href=\"javascript:login('hide');\">close</a></center> 
														</div>
														<p><a href=\"javascript:login('show');\"><img src=\"images/13956097-login-icon-on-glossy-green-round-button.png\"  title=\"LogIn\" alt=\"Login Button\" /></a></p>";
													}
													else if(loggedin())
													{
														echo "<div id=\"logged\">
																	<div id=\"logprofile\">
																		<div id=\"log1\">
																			<a href=\"profile.php\"><img alt=\"My Profile\" src=\"images/profile.png\" title=\" MY PROFILE\"></a>
																		</div>
																	</div>	
																	<div id=\"logout\">																								
																		<center><a href=\"php/logout.php\"><img alt=\"logout\" src=\"images/logout.png\" title=\"Logout\"></a></center></p>
																	</div>
															</div>";
													}													
												?>
										</div>
								</div>
						</div>
						
						<div id="navigation" >
								<ul id="nav" >
									<li> 
										<a href="index.php">HOME</a>
									</li>
									<li> 
										<a href="product.php">PRODUCTS</a>
									</li>
									<li> 
										<a href="services.php">SERVICES</a>
									</li>
									<li> 
										<a href="guestbook.php">GUESTBOOK</a>
									</li>
									<li> 
										<a href="contactUs.php">CONTACT</a>
									</li>
									<li> 
										<a href="aboutUs.php">ABOUT</a>
									</li>
								</ul>
								<ul id="contact">
										<li> 
										<a href="https://www.facebook.com/neyonschapclothing" target="_blank"> 
										<img src="images/Facebook-icon.png" alt="Follow on Facebook"  title="Follow Us on Facebook" /></a></li>
										<li> 
										<a href="https://www.blogspot.com" target="_blank"> 
										<img src="images/blogger_icon.png" alt="Visit our Blog"  title="Visit our Blog" /></a></li>
										<li> 
										<a href="http://twitter.com/NeyonSchap" target="_blank"> 
										<img src="images/twitter-icon.png" alt="Follow on Twitter" title="Follow Us on Twitter"  /></a></li>
										<li> 
										<a href="https://www.tumblr.com" target="_blank"> 
										<img src="images/Tumblr.png" alt="Follow on Tumblr" title="Follow Us on Tumbler" /></a></li>
										
								</ul>									
						</div>
							
						<div id="content">
	
							<div id="leftt">
<!-- #BeginEditable "rightt" -->






								<div id="moto">
									<p>My Profile</p>
								</div>
							





<!-- #EndEditable -->

							</div>
							<div id="rightt">
<!-- #BeginEditable "leftt" -->
									
									
									
									
									
									
<!-- #EndEditable -->
							</div>		
						</div>
						
						<div id="footer">
									<p>Copyright (c) 2012, Hrishikesh Karale. all rights reserved </p>
						</div>
				
					
				</div>
		
		</div>
		
		
		
		

</body>