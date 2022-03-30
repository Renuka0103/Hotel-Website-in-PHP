<html>
	<head>
		<title>index page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			*
			{
				margin: 10pt;
			}
			body
			{
				background-image: url("image/index.jpg");
				background-position: center;
				background-size: 100%;
			}
			h1
			{
				color: black;
				font-family: French Script MT;
				font-size: 56pt;
			}
			h2
			{
				color: black;
				font-family: Bahnschrift;
				font-size: 16pt;
			}
			.navbar 
			{
				font-family: arial;
				font-size: 16pt;
  				overflow: hidden;
  				background-color: #333;
			}
			@media screen and (max-width: 600px) 
			{
 				 .navbar a 
				{
    					float: none;
   	 				width: 100%;
  				}
			}
			.navbar a 
			{
  				float: left;
  				font-size: 16px;
  				color: white;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
			}
			.dropdown 
			{
  				float: left;
  				overflow: hidden;
			}
			.dropdown .dropbtn 
			{
  				font-size: 16px;  
  				border: none;
  				outline: none;
  				color: white;
  				padding: 14px 16px;
  				background-color: inherit;
  				font-family: inherit;
  				margin: 0;
			}
			.navbar a:hover, .dropdown:hover .dropbtn 
			{
  				background-color: blue;
			}
			.dropdown-content
			{
  				display: none;
  				position: absolute;
  				background-color: #f9f9f9;
  				min-width: 160px;
  				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}
			.dropdown-content a 
			{
  				float: none;
  				color: black;
  				padding: 12px 16px;
  				text-decoration: none;
  				display: block;
  				text-align: left;
			}
			.dropdown-content a:hover 		
			{
  				background-color: #ddd;
			}
			.dropdown:hover .dropdown-content 
			{
  				display: block;
			}
			footer
			{
				background-color: #333;
				color: white;
				font-family: arial;
				position: fixed;
 		 		bottom: 0;
			}
		</style>
	</head>
	<body>
		<header>
			<div id="abc">
				<center><h2>THE</h2>
				<h1>Sunshine</h1>
				<h2>HOTEL</h2></center>
			</div>
			<div class="navbar"><a href="index.php">Home</a>
					<a href="location.php">Location</a>
						<a href = "restaurant.php">Restaurant</a>
						<div class="dropdown">
    							<button class="dropbtn">Our Rooms & Tariff</button>
    							<div class="dropdown-content">
      								<a href="nonacdetails.php">BASIC STANDARD NON AC ROOM</a>
     								<a href="acdetails.php">STANDARD AC ROOM</a>
     	 							<a href="6beddetails.php">6 BED DORMITORY</a>
								<a href="budgetdoubleroomdetails.php">BUDGET DOUBLE ROOM WITH PRIVATE BATHROOM</a>
    							</div>
  						</div> 
						<a href = "gallery.php">Gallery</a>
						<a href = "booknow.php">Book Now</a>
						<a href="R&SPolicy.php">Reservation and Cancellation Policy</a>
						<a href = "feedback.php">Feedback</a>
			</div>
		</header>
		
		<footer>
				<center><b><p>&copy; Copyright 2019 Horizon Hotel & Hostel   |  Created by Renuka Shirke, Pradnesh Shitap, Manal Surve</p></b></center>
		</footer>
	</body>
</html>