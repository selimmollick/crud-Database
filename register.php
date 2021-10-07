<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php
	
		include 'dbcon.php';

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$email =$_POST['email'];
			$phone =$_POST['phone'];
			$file =$_POST['file'];
			$gender =$_POST['gender'];
			$age = $_POST['age'];
			// echo $name;exit();


			$insertquery = "insert into register(name, email, phone, file, gender, age) VALUES ('$name', '$email', '$phone', '$file', '$gender','$age')";

			$iquery = mysqli_query($con,$insertquery);
		}
	?> 

	<form action="register.php" method="POST">	
		<div class="main_div">
			<center><h1>Registration Form</h1></center>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Name:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="name" id="name" placeholder="Enter your name..."required>
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Email:</p>
				</div>
				<div class="sub_div1">
					<input class="text"type="text"name="email" id="email"placeholder="Enter your email..."required>
					
				</div>
			</div>
			<div style="clear: both"></div> 
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Mobile:</p>
				</div>
				<div class="sub_div1">
				<input class="text"type="number"name="phone" id="phone"placeholder="0000000000"required>

					
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">File:</p>
				</div>
				<div class="sub_div1">
					<input type="file" name="file">
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">Gender:</p>
				</div>
				<div class="sub_div1">
					<input class="checkbox" type="radio" id="male_id" name="gender" value="vag">Male
					<input class="checkbox" type="radio" id="femele_id" name="gender" value="nonvage">Female
				</div>
			</div>
			<div style="clear: both"></div>
			<div class="main_div1">
				<div class="sub_div">
					<p class="p">DOB:</p>
				</div>
				<div class="sub_div1">
					<input type="date" name="age">
				</div>
			</div>
			
					<input class="submit button" type="submit" value="submit" name="submit">
				
				<a class="view" href="view.php">View Records</a>		

			</div>			
			
		</div>


	</form>

	<!-- <script type="index.js"></script> -->
	
</body>
</html>
