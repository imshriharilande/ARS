<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Lato:ital,wght@0,100;1,100&family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
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
          margin-top: -100px;
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
	<style>
			h1 {
				font-weight: bold;
				margin: 0;
			}

			h2 {
				text-align: center;
			}

			p {
				font-size: 14px;
				font-weight: 100;
				line-height: 20px;
				letter-spacing: 0.5px;
				margin: 20px 0 30px;
			}

			span {
				font-size: 12px;
			}

			a {
				color: #333;
				font-size: 14px;
				text-decoration: none;
				margin: 15px 0;
			}

			#unique-button {
				height: 14%;
				border-radius: 85px;
				border: 1px solid #2b60ff;
				background-color: #2b60ff;
				color: #FFFFFF;
				font-size: 16px;
				font-weight: bold;
				padding: 22px 54px;
				letter-spacing: 1px;
				text-transform: uppercase;
				transition: transform 80ms ease-in;
				text-align: center;
				width: 50%;
			}

			#unique-button:active {
				transform: scale(0.95);
			}

			#unique-button:focus {
				outline: none;
			}

			#unique-button.ghost {
				background-color: transparent;
				border-color: #FFFFFF;
			}

			form {
				background-color: #FFFFFF;
				display: flex;
				align-items: center;
				justify-content: center;
				flex-direction: column;
				padding: 0 50px;
				height: 100%;
				text-align: center;
			}

			select {
				background-color: #eee;
				border: none;
				padding: 12px 15px;
				margin: 8px 0;
				width: 100%;
			}

			input {
				background-color: #eee;
				border: none;
				padding: 12px 15px;
				margin: 8px 0;
				width: 100%;
			}

			.container {
				background-color: #fff;
				border-radius: 10px;
				box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
						0 10px 10px rgba(0,0,0,0.22);
				position: relative;
				overflow: hidden;
				width: 768px;
				max-width: 100%;
				min-height: 480px;
			}

			.form-container {
				position: absolute;
				top: 0;
				height: 100%;
				transition: all 0.6s ease-in-out;
			}

			.sign-in-container {
				left: 0;
				width: 50%;
				z-index: 2;
			}

			.container.right-panel-active .sign-in-container {
				transform: translateX(100%);
			}

			.sign-up-container {
				left: 0;
				width: 50%;
				opacity: 0;
				z-index: 1;
			}

			.container.right-panel-active .sign-up-container {
				transform: translateX(100%);
				opacity: 1;
				z-index: 5;
				animation: show 0.6s;
			}

			@keyframes show {
				0%, 49.99% {
					opacity: 0;
					z-index: 1;
				}
				
				50%, 100% {
					opacity: 1;
					z-index: 5;
				}
			}

	</style>
	
	</head>
	<body style="background: linear-gradient(to bottom, #ffffff, #54a9de);">
		
		

        <nav style="background: linear-gradient(to bottom, #3370c6, #ffffff);" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm fixed-top">
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
					<a class="nav-link active me-2" href="customer_homepage.php">Dashboard</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active me-2" href="pnr.php">Print Ticket</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active me-2" href="home_page.php">About us</a>
					</li>
				</ul>
				<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" onclick="logout()">Logout</button>

				<script>
				function logout() {
				window.location.href = 'logout_handler.php';
				}
				</script>

			</div>
				</div>
			</div>
			
		</nav>
		<div class="container-fluid px-lg-4 mt-4 video-container">
			<!--<img src="images/carousel/222.png" class="w-100 d-block"/> -->
			<img src="images/carousel/aero2.jpg" alt="Description of your GIF" class="w-100 d-block"/>

			<!--<video width="1920" height="" src="images/carousel/3.mp4"  loop autoplay muted ></video>-->
	         
		</div>
		<div class="container avail">
		<div class="row" style="text-align: center; background-image: url('images/carousel/long1.gif'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<div class="container" id="container" style="background-image: url('images/carousel/long1.gif'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<?php
			echo "<br><marquee><h2>Welcome <span style='color: rgb(255, 255, 255); font-size: 30px; '>".$_SESSION['login_user']."&nbsp;!!!!!</span></h2></marquee><br><br>";
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
		        <Button id="unique-button" onclick="book()"><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</Button><br><br>
				<Button id="unique-button" onclick="bookv()"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Tickets</Button><br><br>
				
				<Button id="unique-button" onclick="pnr()"><i class="fa fa-plane" aria-hidden="true"></i> Print Booked Ticket</Button><br><br>
				
				<Button id="unique-button" onclick="bookc()"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Tickets</Button>
				
		<!--Following data fields were empty!
			...
			
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS

		-->

				<script>
				function book() {
				window.location.href = 'book_tickets.php';
				}
				</script>
				<script>
				function bookv() {
				window.location.href = 'view_booked_tickets.php';
				}
				</script>
				<script>
				function pnr() {
				window.location.href = 'pnr.php';
				}
				</script>
				<script>
				function bookc() {
				window.location.href = 'cancel_booked_tickets.php';
				}
				</script>
	</body>
</html>