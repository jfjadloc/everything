<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>AMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
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
        <style type="text/css">
        	td{
        		text-align: left;
        	}	

        </style>
	</head>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="dashboard.php" class="logo">Academic Monitoring System</a>
				<nav class="right">
					<a href="index.php" class="button alt">Log out</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="dashboard.php">Home</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>
		<!-- add Student-->
		<div class="modal fade" id="modal-add-stud" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Add Student</h3>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="addStudent.php" method="POST" class="login-form" style="padding-bottom: 30px;">
	                    	<div class = "row">	                    		
		                    	<div class="form-group col-sm-4">
		                    		<label class="sr-only" for="form-AdminIdNum">ID Number</label>
		                        	<input type="text" name="form-AdminIdNum" placeholder="ID Number..." class="form-username form-control" id="form-username" required>
		                        </div>
	                    	</div>
	                    	<div class="row">
		                        <div class="form-group col-sm-12">
		                        	<label class="sr-only" for="AdminLastName">Last name:</label>
		                        	<input type="text" name="form-AdminLastName" placeholder="Last name..." class="form-password form-control" id="AdminLastName" required>
		                        </div>                    		
	                    	</div>
	                    	<div class="row">
		                        <div class="form-group col-sm-6">
		                        	<label class="sr-only" for="AdminFirstName">First name:</label>
		                        	<input type="text" name="form-AdminFirstName" placeholder="First name..." class="form-password form-control" id="AdminFirstName" required>
		                        </div>
		                        <div class="form-group col-sm-6">
		                        	<label class="sr-only" for="AdminMidName">Middle name:</label>
		                        	<input type="text" name="form-AdminMidName" placeholder="Middle name..." class="form-password form-control" id="AdminMidName" value = "&nbsp;">
		                        </div>
	                       	</div>	
	                       	<DIV class = "row">                      
		                        <div class="form-group col-sm-6 col-sm-6">
		                        	<label class="sr-only" for="AdminSubject">Subject:</label>
		                        	<input type="text" name="form-AdminSubject" placeholder="Subject..." class="form-password form-control" id="AdminSubject" required>
		                        </div>
		                        <div class="form-group col-sm-6">
		                        	<label class="sr-only" for="AdminSection">Section:</label>
		                        	<input type="text" name="form-AdminSection" placeholder="Section..." class="form-password form-control" id="AdminSection" required>
		                        </div>                  		
	                       	</DIV>
	                 	       <button type="submit" class="button alt col-sm-3" style="background-color: #800000;" name="Add">Add</button>	
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>

        <!-- end add Student-->

        <!-- add Grades-->
		<div class="modal fade" id="modal-add-grades" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Add Grades</h3>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="dashboard.php" method="post" class="login-form" style="padding-bottom: 30px;">
	                    	<div class = "row">	                    		
		                    	<div class="form-group col-sm-6">
		                    		<label class="sr-only" for="form-AdminIdNum">Subject Code</label>
		                        	<input type="text" name="form-AdminIdNum" placeholder="Subject Code..." class="form-username form-control" id="form-username" required>
		                        </div>								
		                        <div class="form-group col-sm-6">
		                        	<label class="sr-only" for="form-password">Subject name:</label>
		                        	<input type="text" name="form-password" placeholder="Subject name..." class="form-password form-control" id="form-password" required>
		                        </div>
	                    	</div>
	                    	<div class="row"> 
								<div class="form-group col-sm-6 col-sm-3">
		                        	<label class="sr-only" for="form-password">Grade:</label>
		                        	<input type="text" name="form-password" placeholder="Grade..." class="form-password form-control" id="form-password" required>
		                        </div>							
		                        <div class="form-group col-sm-3">
		                        	<label class="sr-only" for="form-password">Credit:</label>
		                        	<input type="text" name="form-password" placeholder="Credit..." class="form-password form-control" id="form-password" required>
		                        </div>
		                        <div class="form-group col-sm-6">
		                        	<label class="sr-only" for="form-password">Instructor</label>
		                        	<input type="text" name="form-password" placeholder="Instructor..." class="form-password form-control" id="form-password" required>
		                        </div>
	                       	</div>	
	                       	<DIV class = "row">                      
		                        
		                        <div class="form-group col-sm-12">
		                        	<label class="sr-only" for="form-password">Remarks:</label>
		                        	<input type="text" name="form-password" placeholder="Remarks..." class="form-password form-control" id="form-password" required>
		                        </div>                  		
	                       	</DIV>
	                 	       <button type="submit" class="button alt col-sm-3" style="background-color: #800000;">Add</button>	
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>

        <!--end add Grades-->

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner"">
					<form>
					<div class = "row">
					    <div class="form-group col-sm">
					    	<div style="width: 100px;">
						      <label for="section" style = 'float: left;'>Section:</label>
						      <select class="form-control" id="section">
						        <option>G1</option>
						        <option>G2</option>
						        <option>G3</option>
						        <option>G4</option>
						      </select>
					    	</div>
					    </div>
					    <div class="form-group col-sm">
					    	<div style="width: 150px;">
						      <label for="section" style = 'float: left;'>Subject:</label>
						      <select class="form-control" id="section">
						        <option>CCS321</option>
						        <option>CCS111</option>
						        <option>CCSFREEEL1</option>
						        <option>CCSFREEEL2</option>
						      </select>
					    	</div>
					    </div>
					    <div class="form-group col-sm">
						      <button type="button" class="btn launch-modal" data-modal-id="modal-add-stud" style="background-color: #ffcc00;color: #800000; width: 140px;margin-top: 25px;">Add Student</button>
					    </div>	
					</div>
				  </form>
				  <div class = "row">
						<table class="table table-striped table-bordered table-hover table-condensed">
						    <thead>
						      <tr>
						        <th>ID Number</th>
						        <th>Name</th>
						        <th>Action</th>
						      </tr>
						    </thead>
<?php
		$conn=mysqli_connect('Localhost','root','','ams');
		$sql="SELECT * FROM student";
		$result=$conn->query($sql);
		while($row=$result->fetch_array(MYSQLI_ASSOC)){
			echo
			'<tbody>
				<tr>
				<td>'.$row["studID"].'</</td>
				<td>'.$row["firstName"].' '.$row["midName"].' '.$row["lastName"].'</td>
				<td>
					<div class="row">                                                                                                            
						<div class="form-group col-sm">
							<a href="#">Notify</a>
						</div>
						<div class="form-group col-sm">
							<a class="launch-modal" data-modal-id="modal-add-grades">Add Grades</a>
						</div>
						<div class="form-group col-sm">
							<a href="#">Update</a>
						</div>
						<div class="form-group col-sm">
							<a href="#">Delete</a>
						</div>
					</div>
				</td>
			  </tr>
			</tbody>';
		}
?>							
						</table>    
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