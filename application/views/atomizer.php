<!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="utf-8">
 		<title>Atomizer</title>
 		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
 		<link href="https://fonts.googleapis.com/css?family=Six+Caps" rel="stylesheet">
 		<link href="<?php echo base_url(); ?>static/css/style.css" type="text/css" rel="stylesheet">
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/bootstrap-grid.min.css">
 	</head>

 	<body class="picoresin" style="background-color: white">
 		<div class="navbar">

 		<ul>
		 <li><a  href="<?php echo base_url(); ?>Vape/home">Home</a></li>
                <?php if (!isset($this->session->userdata['logged_in'])){ ?>
                    <li><a href=<?php echo base_url(); ?>Vape/login>Login</a></li>
                <?php } else { ?>
            <li><a href=<?php echo base_url(); ?>Vape/logout>Logout</a></li>
                <?php } ?>
		  <li><a class="active" href="#product">Product</a></li>
		  <li><a href=<?php echo base_url(); ?>Vape/contact>Contact</a></li>
		  <a class="logo" href="#aboutus"><img class="logo" src=<?php echo base_url() ?>static/gambarHOME/logo.jpg></a>
		</ul>


	</div>
	<div class="container" style="height: 60vh;padding-top: 20vh" >
		<div class="row">
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambarATOMIZER/1.jpg">
			</div>
			<div class ="desc col-sm-6">
				<h2 style="text-align: left">GS BASAL</h2>
				<p style="text-align: left">
					<b>Product Introduction:</b> <br> The GS BASAL that is made of all stainless steel, features a refined airflow system and uses the GS Air coils optimized for flavor. You’ll have a great vaping experience simply by freely twisting the airflow control ring to get the optimal airflow. For better enjoyment of MTL vaping, all you need is simply a BASAL kit.
				</p>
			</div>
		</div>

		<div class="vape row background" style="height: 110vh;background-color: #D0CCC3;margin-top: 0%;" >
			<div class ="desc col-sm-6" style="text-align: left;padding-left: 10%;margin-top: 10%">			
				<h2>Parameter:</h2><br>
				<p>
					Diameter: 15mm<br>
					Height: 57mm<br>
					Weight: 24g<br>
					E-liquid capacity: 1.8ml<br><br>
					Standard configuration:<br>
					<br>
					1×GS BASAL ----- 1×GS Air 0.75ohm Head ----- 1×User Manual<br>
					1×GS Air 1.5ohm Head ----- Spare Parts<br>
				</p>
			</div>
			<div class ="img col-sm-6" style="padding-top: 10%">
				<img src="<?php echo base_url(); ?>static/gambarATOMIZER/2.png">
			</div>
		</div>

		<div class="vape row " style="height: 80vh;margin-top: 10vh">
			<div class ="desc col-sm-6">
					
					<h2 style="padding-top: 30vh">A Refined Airflow System</h2>
				<p>
				The GS BASAL includes a refined airflow system. You’ll have a great vaping experience simply by freely twisting the airflow control ring to get the optimal airflow.
				</p>
			</div>
			<div class ="img col-sm-6">
				<img src="<?php echo base_url(); ?>static/gambarATOMIZER/3.gif" width="50%">
			</div>
		</div>

		<div class="vape row ">
			<div class ="desc col-sm-12" style="height: 100vh;margin-top: 0">
				<h2>GS Air Coils Optimized for Flavor</h2>
				<p>
					With the GS Air coils, the GS BASAL is designed to deliver the purest flavor of your e-liquid. <br><br><br><br>
				</p>
				<img src="<?php echo base_url(); ?>static/gambarATOMIZER/4.png" >
			</div>
		</div>

		<div class="row " style="background-image: url('<?php echo base_url(); ?>static/gambarATOMIZER/5.png'); background-repeat: no-repeat; background-position: center;height: 80vh;">
		<div class ="img col-sm-12" >
			<h2 style="text-align: left;padding-left: 10%;margin-top: 10vh">Solid Structure of All Stainless Steel</h2>
			<p style="text-align: left;padding-left: 10%;">
				All parts (except the glass tube) of the GS BASAL are<br>
				made of stainless steel. And the GS BASAL<br>
				atomizer can be detached and<br>
				reassembled, very<br>
				convenient to<br>
				clean.<br>
			</p>
		</div>
		</div>

		<div class="vape row background" style="margin-top: 0vh;height:120vh">
			<div class ="desc col-sm-12" >
				<h2 style="padding-top: 10%">
					How to Fill?
				</h2>
				<p>
					Simply unscrew the atomizer base, and slowly inject e-liquid into the tank through either of the two side slots. 
				</p>
			<div class ="img col-sm-12">
				<img src="<?php echo base_url(); ?>static/gambarATOMIZER/6.png">
			</div>
		</div>
 	</body>
 </html>