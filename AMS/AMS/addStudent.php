<?php
	if(isset($_POST['Add']));{
	$id = $_POST['form-AdminIdNum'];
	$fname = $_POST['form-AdminFirstName'];
	$mname = $_POST['form-AdminMidName'];
	$lname = $_POST['form-AdminLastName'];
	$subject = $_POST['form-AdminSubject'];
	$section = $_POST['form-AdminSection'];
	
	$connect=mysqli_connect("Localhost","root","","ams");
	if(!$connect){
		echo mysqli_connect_error();	
		header("Location:dashboard.php");
	}else{
		$sql="INSERT INTO student(studID,
								firstName,
								midName,
								lastName,
								section,
								subject,
								studPasscode) 
							VALUES('$id ',
									'$fname',
									'$mname',
									'$lname',
									'$section',
									'$subject',
									'')";
		mysqli_query($connect,$sql);
		//echo "New Record Saved";		
		header("Location:dashboard.php");
		}
		mysqli_close($connect);
		header("Location:dashboard.php");
	}	
?>