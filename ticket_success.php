<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
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
          margin-top: 10px;
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

			button {
				border-radius: 20px;
				border: 1px solid #2b60ff;
				background-color: #2b60ff;
				color: #FFFFFF;
				font-size: 12px;
				font-weight: bold;
				padding: 12px 45px;
				letter-spacing: 1px;
				text-transform: uppercase;
				transition: transform 80ms ease-in;
			}

			button:active {
				transform: scale(0.95);
			}

			button:focus {
				outline: none;
			}

			button.ghost {
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
				width: 1500px;
				
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
	<body>
	<nav style="background: linear-gradient(to bottom, #3370c6, #ffffff);" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm stickey-top">
			<div class="container-fluid">
				<a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Flight Booking</a>
				<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon "></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link active me-2" aria-current="page" href="customer_homepage.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="customer_homepage.php">Dashboard</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="home_page.php">About us</a>
					</li>
				</ul>
				<div class="d-flex">
				<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" onclick="logout()">Logout</button>
			
			</div>
				</div>
			</div>
			
		</nav>
		<br><br>
		<br><br>
		
        <div class="container avail">
		<div class="row">
		<div class="container" id="container">
	
					
  
		<h3 style="text-align:center">BOOKING SUCCESSFUL</h3><br>
		<h4 style="text-align:center">Your payment of &#x20b9; <?php echo $_SESSION['total_amount']; ?> has been received.<br> Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h4>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
		<script>
		function logout() {
		window.location.href = 'logout_handler.php';
		}
		</script>		
	</body>
</html>