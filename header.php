<html>
	<head>
		<title>index page</title>
		<style>
			*{
				margin: 10pt;
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
		</style>
	</head>
	<body>
		<div id="abc">
				<center><h2>THE</h2>
				<h1>Sunshine</h1>
				<h2>HOTEL</h2></center>
			</div>
			<div class="navbar"><a href="index.php">Home</a>
						<a href = "https://www.google.com/maps/place/Siddhivinayak+Residency/@16.9922624,73.3168048,17z/data=!4m8!1m2!2m1!1ssiddhivinayak+nagar+ratnagiri!3m4!1s0x0:0xa4a775f3e71ad022!8m2!3d16.9928006!4d73.314549">Location</a> 
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
	</body>
</html>