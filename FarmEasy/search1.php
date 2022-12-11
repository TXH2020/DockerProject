<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Products*</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
p{
float:right;}
.box1{
float:left;}
.box2{
position:absolute;
margin:-90px 0px 0px 580px;
}
h1{
color:DarkOliveGreen;
}
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		section{
		position:relative;
		left:-20px;}
	</style>
</head>

<body>
		<p align="right"><a href='proj.php'>Back to Homepage</a></p>	
		<div class="box1">
			<img src="logo.jpg" style="max-width:100px"></img></div><br><br><br><br>   
		<div class="box2">
		<h1 align="center">
		<font face="Lato" color="DarkOliveGreen" size="7">
			FARMEASY 
		</font>
		</h1>
		</div>
		<?php
 		// servername => localhost 
        	// username => root 
        	// password => empty 
        	// database name => staff 

        	$conn = mysqli_connect("localhost", "root", "", "staff"); 
          
        	// Check connection 
        	if($conn === false)
		{ 

            		die("ERROR: Could not connect. " 

                	. mysqli_connect_error()); 

        	}          

        	// Taking search value from the from 

        		$search1 =  $_REQUEST['search1']; 



                // SQL query to select data from database
		 $sql = "Select * from college where ((first_name like '%{$search1 }%') or (last_name like '%{$search1}%') or (gender like '%{$search1 }%') or (city like '%{$search1 }%') or (district like '%{$search1 }%') or (state like '%{$search1 }%') or (crop like '%{$search1 }%') or (aadhar like '%{$search1 }%') or (phone like'%{$search1 }%'))";
 		$sql = "Select * from college where ((first_name like '%{$search1 }%') or (last_name like '%{$search1}%') or (gender like '%{$search1 }%') or (city like '%{$search1 }%') or (district like '%{$search1 }%') or (state like '%{$search1 }%') or (crop like '%{$search1 }%')or (phone like '%{$search1}%') or (aadhar like '%{$search1}%'))";
 		 
		 $result = $conn->query($sql);
		//Display the data if data is available
       		//if ($result->num_rows > 0) 
		$row=mysqli_num_rows($result);
		if ($row>0)
		//if ($result || mysqli_num_rows($Result) != 0) 
		{
  		?>
		
			<h1 align="center"><font color="red" size="6"><b>Search results are:</b></font></h1>
			<!-- TABLE CONSTRUCTION-->
			
			<table>
			<tr bgcolor="#4F7942">
				<th><font color="#FFFFFF">First Name</font></th>
				<th><font color="#FFFFFF">Last Name</font></th>
				<th><font color="#FFFFFF">Gender</font></th>
				<th><font color="#FFFFFF">City</font></th>
				<th><font color="#FFFFFF">District</font></th>
				<th><font color="#FFFFFF">State</font></th>
				<th><font color="#FFFFFF">Phone</font></th>
				<th><font color="#FFFFFF">Aadhar</font></th>
				<th><font color="#FFFFFF">Crop</font></th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
			while($row=$result->fetch_assoc())
			{
			?>
			<tr bgcolor="#9DC183">
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td> <?php echo   $row['first_name'] ; ?> </td>
				<td> <?php echo   $row['last_name'] ; ?> </td>
				<td> <?php echo   $row['gender'] ; ?> </td>
				<td> <?php echo   $row['city'] ; ?> </td>
				<td> <?php echo   $row['district'] ; ?> </td>
				<td> <?php echo   $row['state'] ; ?> </td>
				<td> <?php echo   $row['phone'] ; ?> </td>
				<td> <?php echo   $row['aadhar'] ; ?> </td>
				<td> <?php echo   $row['crop'] ; ?> </td>
				
			</tr>
			<?php
			}
		}
 		else
		{
				//Display the message if no data is available
			?>
          			<h1 align="center"><font color="red" size="6"><b>Your search has no results</b></font></h1>
		
			<?php
		}
			?>
				</table>
			<?php
	
        			// Close database connection 

       				 mysqli_close($conn); 

        		?> 
			
</body>

</html>
