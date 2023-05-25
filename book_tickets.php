
<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
		</title>
		
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Lato:ital,wght@0,100;1,100&family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <style>
        *{
            font-family: 'Poppins', sans-serif;   
        }
        .h-fonts{
            font-family: 'Merienda', cursive;

        }        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        input[type=number] {
          -moz-appearance: textfield;
        }

        .custom-bg{
          background-color: #2ec1ac;
        }

        .custom-bg:hover{
          background-color: #279e8c;
        }

        .avail{
          margin-top: -50px;
          z-index: 2;
          position: relative;
        }
        
        @media  and (max-width: 575px){
          .avail{
          margin-top: 25px;
          padding:0 35;

        }
          
        }
    </style>
		
		
		<!--<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">-->
	</head>
	<body class="bg-light" >
		<nav style="background: linear-gradient(to bottom, #3370c6, #ffffff);" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm stickey-top">
			<div class="container-fluid">
				<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Flight Booking</a>
				<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon "></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active me-2" aria-current="page" href="home_page.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="customer_homepage.php">Dashboard</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="home_page.php">About us</a>
					</li>
				</ul>
				<div class="d-flex">
				<form action="logout_handler.php" method="post" class="pt-2">
				<button  type="submit" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" >
				Logout 
				</button>
				</form>
			</div>
				</div>
			</div>
		</nav>
	<div class="container-fluid px-lg-4 mt-4 video-container">
			<!--<img src="images/carousel/222.png" class="w-100 d-block"/> -->
			<img src="images/carousel/1.gif" alt="Description of your GIF" class="w-100 d-block"/>

			<!--<video width="1920" height="" src="images/carousel/3.mp4"  loop autoplay muted ></video>-->
	         
		</div>
		<!--<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>-->
	<div class="container avail">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rouded" style="background-image: url('images/carousel/bk.gif'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
				<form action="view_flights_form_handler.php" method="post">
					<h2 class="mt-2 pt-4 mb-4 text-center fw-bold">SEARCH FOR AVAILABLE FLIGHTS</h2>
					<table class="col-lg-6 mt-4 pt-4 mb-3 text-center" >
						<!--<tr>
							<td style="font-weight: bold;" class="col-lg-2 mb-2 mr-4 pl-4 text-center">Enter the Origin</td>
							<td style="font-weight: bold;" class="col-lg-2 mb-3 pr-4 text-center">Enter the Destination</td>
							<td style="font-weight: bold;" class="col-lg-2 mb-3 p-2 text-center">Enter the Departure Date</td>
						</tr>	-->
						<tr class="col-lg-12 bg-white shadow p-4 rouded">
						<td class="col-md-6 mt-2 pt-3 pl-5 mb-2 text-center">
								<input class="col-lg-3 mb-3" style="border: none; width: 208.8px; height: 37px margin-left: 2; padding-left: 30px; background-image: url('images/carousel/12.png'); background-repeat: no-repeat; background-position: 5px :left; background-size: 20px 20px;" 
								id="origin" list="origins" name="origin" placeholder="From" required>
								<datalist id="origins">
									<option value="bangalore">
									<option value="mumbai">
									<option value="mysore">
									<option value="mangalore">
									<option value="chennai">
									<option value="hyderabad">	
								</datalist>
								<!-- <input type="text" name="origin" placeholder="From" required> --></td>
		<!--<button  class="col-md-6 mt-2  mb-4 text-center" type="button" onclick="swapFields()">Swap</button>-->
						<td class="col-md-2 mt-2 pt-3 mb-2 text-center">
									<button class="col-lg-3 mb-3" style="background-color: transparent; border: none; width: 30px; height: 37px"; class="btn btn-primary" type="button" onclick="swapFields()"><img src="images/carousel/swap.png" style=" padding-top: 2; width: 120%; height: 50%;" alt="Swap Logo">
									</button></button>
							</td>
						<td class="col-md-6 mt-2 pt-3 mb-4 text-center">
								<input class="col-lg-3 mb-3" style="border: none; width: 208.8px; height: 37px; margin-right; padding-left: 30px; background-image: url('images/carousel/122.png'); background-repeat: no-repeat; background-position: 5px center; background-size: 20px 20px;" id="destination" list="destinations" name="destination" placeholder="To" required>
								<datalist id="destinations">
									<option value="bangalore">
									<option value="mumbai">
									<option value="mysore">
									<option value="mangalore">
									<option value="chennai">
									<option value="hyderabad">
								</datalist>
							<!-- <input type="text" name="destination" placeholder="To" required> --></td>
						<td class="col-md-6 mt-5 pt-3 mb-2 text-center"><input class="col-lg-3 mb-3" style="border: none; width: 208.8px; height: 37px; " type="date" name="dep_date" min=
									<?php 
										$todays_date=date('Y-m-d'); 
										echo $todays_date;
									?> 
									max=
									<?php 
										$max_date=date_create(date('Y-m-d'));
										date_add($max_date,date_interval_create_from_date_string("90 days")); 
										echo date_format($max_date,"Y-m-d");
							?> required></td>
							<td class="col-md-6 mt-5 pt-3 mb-2 text-center">
										<select class="col-lg-3 mb-3" style="border: none; width: 208.8px; height: 37px;padding-left: 30px; background-image: url('images/carousel/124.png'); background-repeat: no-repeat; background-position: 5px center; background-size: 20px 20px;" name="class">
											<option value="economy">Economy</option>
											<option value="business">Business</option>
										</select>
							</td>
							<td class="col-md-6 mt-5 pt-3 mb-2 text-center"><input style=" border: none; width: 208.8px; height: 37px;padding-left: 30px; background-image: url('images/carousel/125.png'); background-repeat: no-repeat; background-position: 5px center; background-size: 20px 20px;" class="col-lg-3 mb-3" type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
							
							<td class="col-md-2 mt-2 mb-2 text-center">
								<input style="padding: px 40px;  background-color: transparent; border: none; width: 150px; height: 37px;padding-left: 30px; background-image: url('images/carousel/126.png'); background-repeat: no-repeat; background-position: 5px center; background-size: 20px 20px;" class="btn btn-outline-dark shadow-none" type="submit"  data-bs-toggle="modal"value="Search Flights" name="Search">
							</td>
						</tr>
					</table>
						<!--<table class="col-lg-12 mt-2 pt-2 mb-2 text-center" >
							<tr>
								<td class="col-md-6 mt-2  mb-2 text-center">Enter the Departure Date</td>
								<td class="col-md-6 mt-2  mb-2 text-center">Enter the No. of Passengers</td>
							</tr>
							<tr>
								
								<td class="col-md-6 mt-2 mb-4 text-center"><input type="number" name="no_of_pass" placeholder="5" required></td>
							</tr>
						</table>
						<table class="col-lg-12 mt-2 pt-2 mb-4 text-center" >
							<tr>
								<td class="col-md-6 mt-2 mb-2 text-center">Enter the Class</td>
							</tr>
							<tr>
								
							</tr>
						</table>-->
						
					</form>
		      </div>
		    </div>
		</div>
			<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
		<br><br><br>
		<br><br><br>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>    
		<script>
			var swiper = new Swiper(".mySwiper", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			autoplay: {
				delay: 3500,
				disableOnInteraction: false,
			}
			
			});
		</script>
		<script>
			function swapFields() {
			  var sourceValue = document.getElementById("origin").value;
			  var destinationValue = document.getElementById("destination").value;
			
			  document.getElementById("origin").value = destinationValue;
			  document.getElementById("destination").value = sourceValue;
			}
			</script>
	</body>
</html>