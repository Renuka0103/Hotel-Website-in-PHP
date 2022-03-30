<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "HotelWebsite";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(isset($_POST['confirm']))
	{
		$checkindate = $_POST['checkindate'];
		$checkoutdate = $_POST['checkoutdate'];
		$numberofnights = $_POST['numberofnights'];
		$nornonac = $_POST['nornonac'];
		$norac = $_POST['norac'];
		$norbudgetdoubleroom = $_POST['norbudgetdoubleroom'];
		$nor6bed = $_POST['nor6bed'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contactnumber = $_POST['contactnumber'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$message = $_POST['message'];
	
		if($checkindate != "" && $checkoutdate != "" && $firstname != "" && $lastname != "" && $contactnumber != "" && $email != "")
		{
			$query = "INSERT INTO booking VALUES('$checkindate', '$checkoutdate', '$numberofnights', '$nornonac', '$norac', '$norbudgetdoubleroom', '$nor6bed', '$firstname', '$lastname', '$contactnumber', '$email', '$city', '$country', '$message')";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Booking confirmed";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "fill all reqiured fields\\n*: required fields";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	if(isset($_POST['update']))
	{
		$checkindate = $_POST['checkindate'];
		$checkoutdate = $_POST['checkoutdate'];
		$numberofnights = $_POST['numberofnights'];
		$nornonac = $_POST['nornonac'];
		$norac = $_POST['norac'];
		$norbudgetdoubleroom = $_POST['norbudgetdoubleroom'];
		$nor6bed = $_POST['nor6bed'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contactnumber = $_POST['contactnumber'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$message = $_POST['message'];
	
		if($checkindate != "" && $checkoutdate != "" && $firstname != "" && $lastname != "" && $contactnumber != "" && $email != "")
		{
			$query = "UPDATE booking SET checkindate = '$checkindate', checkoutdate = '$checkoutdate', numberofnights = '$numberofnights', nornonac = '$nornonac', norac = '$norac', norbudgetdoubleroom = '$norbudgetdoubleroom', nor6bed = '$nor6bed', contactnumber = '$contactnumber', email = '$email', city = '$city', country = '$country', message = '$message' WHERE firstname = '$firstname' AND lastname = '$lastname'";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Booking details updated";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "Enter your first name and lastname, fill all required fields and click on update button to update booking details\\n*: required fields";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	if(isset($_POST['delete']))
	{
		$checkindate = $_POST['checkindate'];
		$checkoutdate = $_POST['checkoutdate'];
		$numberofnights = $_POST['numberofnights'];
		$nornonac = $_POST['nornonac'];
		$norac = $_POST['norac'];
		$norbudgetdoubleroom = $_POST['norbudgetdoubleroom'];
		$nor6bed = $_POST['nor6bed'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contactnumber = $_POST['contactnumber'];
		$email = $_POST['email'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$message = $_POST['message'];
	
		if($firstname != "" && $lastname != "")
		{
			$query = "DELETE FROM booking WHERE firstname = '$firstname' AND lastname = '$lastname'";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Booking cancelled successfully";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "Enter your first name and last name and click on cancel button to cancel booking";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<html>
	<head>
<?php
		include("header.php");
?>
		<title>booknow page</title>
		<style>
			*{
				margin: 10pt;
			}
			h3
			{
				color: black;
				font-family: Bahnschrift;
				font-size: 36pt;
			}
			table
			{
				font-family: arial;
				font-size: 16pt;
			}	
		</style>
	</head>
	<body>
		<form method = "POST">
			<table>
				<tr>
					<td>*Check In Date: <input type = "date" name = "checkindate" value = ""></td>
					<td>*Check Out Date: <input type = "date" name = "checkoutdate" value = ""></td>
					<td>Number Of Nights: <input type = "number" name = "numberofnights" value = ""></td>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<td rowspan = "2"><img src = "image/nonac.jpg" width = "200" height = "200"></td>
					<th>BASIC STANDARD NON AC ROOM</th>
					<td>INR 550 per night</td>
				</tr>
				<tr>
					<td>Number of rooms: <input type = "number" name = "nornonac" value = ""></td>
					<td><a href = "nonacdetails.php">ROOM DETAILS</a></td>
				</tr>
				<tr>
					<td rowspan = "2"><img src = "image/ac.jpg" width = "200" height = "200"></td>
					<th>STANDARD AC ROOM</th>
					<td>INR 750 per night</td>
				</tr>
				<tr>
					<td>Number of rooms: <input type = "number" name = "norac" value = ""></td>
					<td><a href = "acdetails.php">ROOM DETAILS</a></td>
				</tr>
				<tr>
					<td rowspan = "2"><img src = "image/budgetdoubleroom.jpg" width = "200" height = "200"></td>
					<th>BUDGET DOUBLE ROOM WITH PRIVATE BATHROOM</th>
					<td>INR 1550 per night</td>
				</tr>
				<tr>
					<td>Number of rooms: <input type = "number" name = "norbudgetdoubleroom" value = ""></td>
					<td><a href = "budgetdoubleroomdetails.php">ROOM DETAILS</a></td>
				</tr>
				<tr>
					<td rowspan = "2"><img src = "image/6bed.jpg" width = "200" height = "200"></td>
					<th>6 BED DORMITORY</th>
					<td>INR 950 per night</td>
				</tr>
				<tr>
					<td>Number of rooms: <input type = "number" name = "nor6bed" value = ""></td>
					<td><a href = "6beddetails.php">ROOM DETAILS</a></td>
				</tr>
			</table>
			<br>
			<table>
				<tr>
					<td>*First Name:</td>
					<td><input type = "text" name = "firstname" value = ""></td>
					<td>*Email:</td>
					<td><input type = "email" name = "email" value = ""></td>
				</tr>
				<tr>
					<td>*Last name:</td>
					<td><input type = "text" name = "lastname" value = ""></td>
					<td>City:</td>
					<td><input type = "text" name = "city" value = ""></td>
				</tr>
				<tr>
					<td>*Contact Number:</td>
					<td><input type = "number" name = "contactnumber" value = ""></td>
					<td>Country:</td>
					<td><input type= "text" name = "country" value = ""></td>
				</tr>
				<tr>
					<td colspan="4">Message/Special Requests to the hotel<br>Optional: Room Preferences, Flight Number, Flight Timing, Airport Name, etc.</td>
				</tr>
				<tr>
					<td colspan="2"><textarea name =  "message" value = "" rows = "4" cols = "50"></textarea></td>
				</tr>
				<tr>
					<td colspan="4"><input type = "submit" name = "confirm" value = "Confirm booking">
					<input type = "submit" name = "update" value = "Update booking">
					<input type = "submit" name = "delete" value = "Cancel booking"></td>
				</tr>
			</table>
		</form>
<?php
		include("footer.php");
?>
	</body>
</html>