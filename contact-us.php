<?php $pageid=8;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
</head>
<body>
	<?php include 'header.php';?>
	<img src="images/contact us.png" class="img-responsive" style="width: 100%;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-7" style="margin: 155px 0px 75px 0px; padding: 1px;">
				<div class="col-sm-4">
					<center>
						<img src="images/address-1.png"><br>
						<span style="color: #008ed1; font-size: 20px;">Head Office</span><br>
						Beside NEXA Showroom, Main Road Kolakusma, Saraidhela, Dhanbad, Jharkhand - 828127
					</center>
				</div>
				<div class="col-sm-4">
					<center>
						<img src="images/call-1.png"><br>
						<span style="color: #008ed1; font-size: 20px;">Call Us</span><br>
							+91-7004425367
					</center>
				</div>
				<!--div style="padding: 10px;"></div-->
				<div class="col-sm-4">
					<center>
						<img src="images/mail-1.png"><br>
						<span style="color: #008ed1; font-size: 20px;">Email Us</span><br>
							sales@sarojaniltechnology.com <br>
							support@sarojaniltechnology.com
					</center>
				</div>
			</div>
			<div class="col-sm-5" style="padding: 10px">
				<form action="send_email.php">
					<div class="">
						<div class="form-group">
			    			<label for="name">Full Name:</label>
			    			<input type="text" class="form-control" id="text">
			  			</div>
			  		</div>
			  		<div class="">
			  			<div class="form-group">
			    			<label for="phone">Phone Number:</label>
			    			<input type="tel" name="usrtel" class="form-control">
			  			</div>
			  		</div>
		  			<div class="form-group">
		    			<label for="email">Email address:</label>
		    			<input type="email" class="form-control" id="email">
		  			</div>
		  			<div class="form-group">
  						<label for="comment">Message:</label>
  						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
		  		</form>
			</div>
		</div>
	</div>
	<div style="padding: 20px;"></div>
	<?php include 'footer.php';?>