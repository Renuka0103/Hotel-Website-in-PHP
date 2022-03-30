<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "HotelWebsite";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mobilenumber = $_POST['mobilenumber'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
	
		if($name != "" && $feedback != "")
		{
			$query = "INSERT INTO feedback VALUES('$name', '$mobilenumber', '$email', '$feedback')";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Thank you for your feedback!";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "fill all required fields\\n*: required fields";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	if(isset($_POST['update']))
	{
		$name = $_POST['name'];
		$mobilenumber = $_POST['mobilenumber'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
	
		if($name != ""  && $feedback != "")
		{
			$query = "UPDATE feedback SET mobilenumber = '$mobilenumber', email = '$email', feedback = '$feedback' WHERE name = '$name'";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Your feedback updated successfully";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "Enter your name, fill all required fields and click on update button to update feedback\\n*: required fields";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	if(isset($_POST['delete']))
	{
		$name = $_POST['name'];
		$mobilenumber = $_POST['mobilenumber'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
	
		if($name != "")
		{
			$query = "DELETE FROM feedback WHERE name = '$name'";
			$data = mysqli_query($conn, $query);
			if($data)
			{
				$message = "Your feedback deleted successfully";
  				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		else
		{
			$message = "Enter your name and click on delete button to delete feedback";
  			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<html>
	<head>
<?php
		include("header.php");
?>
		<title>feedback page</title>
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
		<h3 align = "center">--- Feedback Page ---</h3>
		<form method = "POST">
		<table>
			<tr>
				<td colspan="2">*Your Name</td><td><input type = "text" name =  "name" value = ""></td>
			</tr>
			<tr>
				<td colspan="2">Mobile Number</td><td><input type = "number" name =  "mobilenumber" value = ""></td>
			</tr>
			<tr>
				<td colspan="2">Email</td><td><input type = "email" name =  "email" value = ""></td>
			</tr>
			<tr>
				<td colspan="2">*Your feedback</td><td><textarea name =  "feedback" value = "" rows="4" cols="50"></textarea>
			</tr>
			<tr>
				<td colspan="4"><input type = "submit" name = "submit" value = "Submit Feedback">
				<input type = "submit" name = "update" value = "Update Feedback">
				<input type = "submit" name = "delete" value = "Delete Feedback">
				<input type = "submit" name = "show" value = "Show feedbacks from other customers">
			</tr>
<?php
	if(isset($_POST['show']))
	{
		$name = $_POST['name'];
		$mobilenumber = $_POST['mobilenumber'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];

		$query = "SELECT * FROM feedback";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		if($total != 0)
		{
?>
			<table border="1">
				<tr>
					<th colspan="2">Feedbacks from our customers</th>
				</tr>
<?php
			while($result = mysqli_fetch_assoc($data))
			{
				echo "<tr>
					<td>".$result['name']." said</td>
					<td>".$result['feedback']."</td>
				</tr>";
			}
		}
	}
?>
		</table>
		</form>
<?php
		include("footer.php");
?>
	</body>
</html>