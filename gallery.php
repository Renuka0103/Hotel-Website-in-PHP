<html>
	<head>
<?php
		include("header.php");
?>
		<title>gallery page</title>
		<style>
			* {
  				box-sizing: border-box;
			}
			body 
			{
  				margin: 0;
  				font-family: Arial;
			}
			h3
			{
				color: black;
				font-family: Bahnschrift;
				font-size: 36pt;
			}
			.row 
			{
  				display: flex;
  				flex-wrap: wrap;
  				padding: 0 4px;
			}
			.column 
			{
  				flex: 25%;
  				max-width: 25%;
  				padding: 0 4px;
			}
			.column img
			{
  				margin-top: 8px;
  				vertical-align: middle;
			}
			@media screen and (max-width: 800px) 
			{
  				.column 
				{
    					flex: 50%;
    					max-width: 50%;
  				}
			}
			@media screen and (max-width: 600px) 
			{
  				.column 
				{
   		 			flex: 100%;
    					max-width: 100%;
  				}
			}
		</style>
	</head>
	<body>
		<h3 align = "center">--- Gallery ---</h3>
		<div class="row"> 
  			<div class="column">
				<img src = "image/l1.jpg" style="width:100%">
				<img src = "image/r1.jpg" style="width:100%">
				<img src = "image/l2.jpg" style="width:100%">
			</div>
  
  			<div class="column">
				<img src = "image/r2.jpg" style="width:100%">
				<img src = "image/l3.jpg" style="width:100%">
				<img src = "image/r3.jpg" style="width:100%">
			</div>
  
  			<div class="column">
				<img src = "image/ac.jpg" style="width:100%">
				<img src = "image/nonac.jpg" style="width:100%">
				<img src = "image/budgetdoubleroom.jpg" style="width:100%">
			</div>
  
  			<div class="column">
				<img src = "image/6bed.jpg" style="width:100%">
				<img src = "image/tariff1.jpg" style="width:100%">
			</div>

			<div class="column">
				<img src = "image/tariff2.jpg" style="width:100%">
				<img src = "image/tariff3.jpg" style="width:100%">
			</div>
		</div>
<?php
		include("footer.php");
?>
	</body>
</html>
