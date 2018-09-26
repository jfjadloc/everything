<!DOCTYPE HTML>
<html>
	<head>
		<title>AMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="icon" href="images/ams2.png">
		<link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
 
		<link href="assets/css/login-register.css" rel="stylesheet" />

		<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.js" type="text/javascript"></script>
		<script src="assets/js/login-register.js" type="text/javascript"></script>

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo"></span>Academic Monitoring System</a>
				<nav class="right">
					<a href="#" class="button alt launch-modal" data-modal-id="modal-login">Log in</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit launch-modal" data-modal-id="modal-login">Login</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<div style="background-color: #fff;border: 1px solid #eeeeee; opacity:0.70;padding: 30px;margin: 30px;">
						<h1>All hail! Maroon and Gold!</h1>
						<p>Get the latest update of your academic performance!</p>						
					</div>
						<ul class="actions">
							<li><a href="#one" class="button scrolly">Get Started</a></li>
						</ul>
				</div>
			</section>

			<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Login</h3>
        				<p>Enter your ID number and password to log on:</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="dashboard.php" method="post" class="login-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-AdminIdNum">ID Number</label>
	                        	<input type="text" name="form-AdminIdNum" placeholder="ID Number..." class="form-username form-control" id="form-username" required>
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" required>
	                        </div>
	                        <button type="submit" class="button alt" style="background-color: #800000;">Sign in</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Easy Access!</h3>
							<p>Anytime, anywhere in the map.</p>
						</div>
					</div>
					<div class="image fit round">
						<img src="images/ams2.png" alt="" />
					</div>
					<div class="flex-item right">						
						<div>
							<h3>Handy</h3>
							<p>AMS app for technologians.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Information</h2>
					<figure>
					    <blockquote>
					        "ikay motto hahahaha."
					    </blockquote>
					    <footer>
					        <cite class="author">Sisi</cite>
					        <cite class="company">CEO,</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<h2>The Team</h2>
				</div>
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Cherry Rose Ibona</h3>
							<p>Morbi in sem quis dui placerat Pellentesque odio nisi, euismod pharetra lorem ipsum. Front-end/Back-end Developer/Programmer</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Hazel Canedo</h3>
							<p>Morbi in sem quis dui placerat Pellentesque odio nisi, euismod pharetra lorem ipsum. Assistant for the project.</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic04.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Jessa Mae Burgos</h3>
							<p>Nam dui mi, tincidunt quis, accu an porttitor, facilisis luctus que metus vulputate sem magna. Printing for Usecase and class diagram</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Ara Jane Mancia</h3>
							<p>Morbi in sem quis dui placerat Pellentesque odio nisi, euismod pharetra lorem ipsum. Source codes but from google. lol</p>
						</div>
					</div>
					
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#"> 261-7741</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#"> amsapp@gmail.com</a></li>
						<li><span class="icon fa-map-marker"></span> N. Bacalso Avenue, Cebu City </li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="assets/js/jquery-1.11.1.min.js"></script>
	        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	        <script src="assets/js/jquery.backstretch.min.js"></script>
	        <script src="assets/js/scripts.js"></script>

	</body>
</html>