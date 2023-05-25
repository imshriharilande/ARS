<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
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
			margin-top: -200px;
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

	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

	* {
		box-sizing: border-box;
	}



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

	.overlay-container {
		position: absolute;
		top: 0;
		left: 50%;
		width: 50%;
		height: 100%;
		overflow: hidden;
		transition: transform 0.6s ease-in-out;
		z-index: 100;
	}

	.container.right-panel-active .overlay-container{
		transform: translateX(-100%);
	}

	.overlay {
		background: #41bdff;
		background: -webkit-linear-gradient(to right, #2b60ff, #41bdff);
		background: linear-gradient(to right, #2b60ff, #41bdff);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 0 0;
		color: #FFFFFF;
		position: relative;
		left: -100%;
		height: 100%;
		width: 200%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.container.right-panel-active .overlay {
		transform: translateX(50%);
	}

	.overlay-panel {
		position: absolute;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 40px;
		text-align: center;
		top: 0;
		height: 100%;
		width: 50%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.overlay-left {
		transform: translateX(-20%);
	}

	.container.right-panel-active .overlay-left {
		transform: translateX(0);
	}

	.overlay-right {
		right: 0;
		transform: translateX(0);
	}

	.container.right-panel-active .overlay-right {
		transform: translateX(20%);
	}

	.social-container {
		margin: 20px 0;
	}

	.social-container a {
		border: 1px solid #DDDDDD;
		border-radius: 50%;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 0 5px;
		height: 40px;
		width: 40px;
	}


</style>
<style>
	section{
	padding:50px;
	margin:60px auto;
	width:320px;
	background:white;
	}
   .custom-radio div{
	padding:5px 0; 
	font-family: 'Oswald', sans-serif;
	font-weight:300;
	}
	.radio-custom {
		opacity: 0;
		position: absolute;
	}
	.radio-custom-label {
		position: relative;
		height: 38px;
		display: inline-block;
		cursor:pointer;
	}
	.radio-custom+.radio-custom-label:before{
	content: '';
	border: 2px solid #bbbcbc;
	display: inline-block;
	vertical-align: middle;
	width: 30px;
	height: 30px;
	padding: 2px;
	margin-right: 10px;
	border-radius:50%;
	}
	.radio-custom:checked+.radio-custom-label:after {
	content:"";
	width:18px;
	height:18px;
	display:block;
	position:absolute;
	position: absolute;
	top: calc(50% - 9px);
	left: 10px;
	background:#2b60ff;
	border-radius:50%;
	}
	.radio-custom:checked+.radio-custom-label:before {
	border: 2px solid #2b60ff;
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
					<a class="nav-link active me-2" aria-current="page" href="home_page.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="home_page.php">Dashboard</a>
					</li>
					<li class="nav-item">
					<a class="nav-link me-2" href="home_page.php">About us</a>
					</li>
				
				</div>
			</div>
		</nav>
		
		<div class="container-fluid modal-body px-lg-4 video-container w-100 d-block">
			<!--<img src="images/carousel/222.png" class="w-100 d-block"/> -->
			<img src="images/carousel/1.gif" alt="Description of your GIF" class=" w-100 h-50 d-block"/>

			<!--<video width="1920" height="" src="images/carousel/3.mp4"  loop autoplay muted ></video>-->
	         
		</div>  	
			
		<div class="container avail">
		    <div class="row">


					
					<div class="container" id="container">
					<div class="form-container sign-up-container">
						<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
							<h1>Create Account</h1>
							<input type="text" name="username" required placeholder="Userame" />
							<input type="password" name="password" required placeholder="Password" >
							<input type="email" name="email" required placeholder="Email" />
							<input type="text" name="name" required placeholder="Name" />
							<!--<input  type="text" name="phone_no" required placeholder="NO">-->
							<input type="text" name="address" required placeholder="Address">
							<button type="submit" value="Submit" name="Submit">Sign Up</button>
						</form>
					</div>




					<div class="form-container sign-in-container ">
						<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST" >
							<h1>Sign in</h1>
							<input type="text" name="username" placeholder="Enter your username" required>
							<input type="password" name="password" placeholder="Enter your password" required><br>
							<strong>User Type:</strong><br>
							<div class="custom-radio">
							<div>
							<input type="radio" name='user_type' value='Customer' class="radio-custom" id="radio-cust-1"  checked="checked">
      						<label for="radio-cust-1" class="radio-custom-label">Customer</label>
							</div>
							<div>
							<input type='radio' name='user_type' value='Administrator'  class="radio-custom" id="radio-cust-2">
							<label for="radio-cust-2" class="radio-custom-label">Administrator</label>
							</div>
		                    </div>
							<?php
								if(isset($_GET['msg']) && $_GET['msg']=='failed')
								{
									echo "
									<strong style='color:red'>Invalid Username/Password</strong>
									";
								}
							?>
							<button type="submit" name="Login" value="Login">Sign In</button>
							<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true">Forgot your password?</a>
						</form>
					</div>
					<div class="overlay-container">
						<div class="overlay">
							<div class="overlay-panel overlay-left">
								<h1>Welcome Back!</h1>
								<p>To keep connected with us please login with your personal info</p>
								<button class="ghost" id="signIn">Sign In</button>
							</div>
							<div class="overlay-panel overlay-right">
								<h1>Hello, Friend!</h1>
								<p>Enter your personal details and start journey with us</p>
								<button class="ghost" id="signUp">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			     </div>
		</div>
			

		
		<script>
			const signUpButton = document.getElementById('signUp');
			const signInButton = document.getElementById('signIn');
			const container = document.getElementById('container');

			signUpButton.addEventListener('click', () => {
				container.classList.add("right-panel-active");
			});

			signInButton.addEventListener('click', () => {
				container.classList.remove("right-panel-active");
			});
	    </script>

	</body>
</html>