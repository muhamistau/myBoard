<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_index.css">
</head>
<body>
	<div class="container-fluid" style="padding: 0px">
		<div class="row">
			<div class="col-md-12">
				<nav>	<!-- navbar -->
					<ul>
						<li> <a href="index.html" style="color: white;"><img src="<?php echo base_url(); ?>assets/image/logo-myBoard-w.png" style="width: 3%"><b> myBoard</b> </a></li>
					</ul>
				</nav>	<!-- end navbar -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="login"> <!-- Login -->
					<center>
						<h1>Welcome to myBoard</h1>
				<form action="/coba.html" method="post">
							<p>Username <input type="Text" name="username" placeholder=" e.g. myUname" ></p>
							<p>Password <input type="Password" name="password" placeholder="e.g. myPrivate" ></p>
					</center>
					<div class="login-button">
						<input type="submit" name="login" value="Login">
				</form>
					<a href="signup.html"><button>Sign Up</button></a>
					</div>
				</div> <!-- end login -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="bg-image" style="background-image: url(<?php echo base_url(); ?>assets/image/home-image-v2.jpg);"> <!-- Background Image -->
					<p style="font-size: 72px; padding: 10px; margin: 0px; padding-top: 40px" >Lets you work more <br>
						collaboratively and get more done.
					</p>
					<p style="font-size: 24px; padding: 10px; margin: 0px; padding-bottom: 25px">
						myBoard's boards, lists, and cards enable you to organize and prioritize <br>
						your projects in a fun, flexible and rewarding way.</p><br>
				</div> <!-- end Bg-Image -->
			</div>
		</div>
		<div class="alamat">
			<div class="row">
				<div class="col-md-4">
					<p>Contact Us</p>
					<p>0822-xxxx-xxxx</p>
				</div>
				<div class="col-md-4">
					<center>
						<p><i class="fa fa-facebook-square" aria-hidden="true"></i> @myBoard</p>
						<p><i class="fa fa-instagram" aria-hidden="true"></i> @myBoard</p>
						<p><i class="fa fa-twitter-square" aria-hidden="true"></i> @myBoard</p>
					</center>
				</div>
				<div class="col-md-4">
					<center>
					<p style="text-align: right;">
						Address<br/>
						Bandung Sumedang Avenue KM.21,<br/>
						Hegarmanah, Jatinangor, Sumedang District,<br/>
						Jawa Barat 45363
					</p>
					</center>
				</div>			
			</div>
		</div>
	</div>
</body>
</html>