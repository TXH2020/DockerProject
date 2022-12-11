<!DOCTYPE html>
<html>

<head>	
	<title>Insert Page</title>
</head>

<body bgcolor="Chartreuse">
<p align="right"><a href='proj.php'>Back to Homepage</a></p>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$city_village_town = $_REQUEST['city/village/town'];
		$district = $_REQUEST['district'];
		$state = $_REQUEST['state'];
		$email = $_REQUEST['email'];
                $phone = $_REQUEST['phone_no'];
		$crop= $_REQUEST['exam'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$first_name',
			'$last_name','$gender','$city_village_town','$district','$state','$email','$phone','$crop')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Success!"
				. " Data stored in the database successfully.</h3>";

			echo nl2br("\nFirst Name: $first_name\n Last Name: $last_name\n "
				. "Gender: $gender\nCity/Village/Town: $city_village_town\nDistrict: $district\nState: $state\nAadhar: $email\nPhone: $phone\nCrop: $crop");
		} else{
			echo "ERROR:Sorry, data was not stored $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
