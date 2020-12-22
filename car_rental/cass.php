<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"><i>Select a car for Renting:</i></h2>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Tk.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'CLICK HERE>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car ID: <span class="property_size"><?php echo $rws['car_id'];?></span></h2>
						<h2>Car Name: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						<h2>Car Type: <span class="property_size"><?php echo $rws['car_type'];?></span></h2>
						<h2>Rent Price: <span class="property_size"><?php echo $rws['hire_cost'];?></span></h2>
						<h2>Capacity: <span class="property_size"><?php echo $rws['capacity'];?></span></h2>
						<h2>Status: <span class="property_size"><?php echo $rws['status'];?></span></h2>
						<h2>Fuel Type: <span class="property_size"><?php echo $rws['fuel_type'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Our company rents cars and other vehicles to clients at lower costs.</p>
					<ul>
						<li><a href="http://facebook.com/codeprojectsdotorg/" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
		Copyright © 2020 AutoCars — Sanian Mahir Khan All Rights Reserved
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>