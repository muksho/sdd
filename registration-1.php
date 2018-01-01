<?php $pageid=6;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
</head>
<body >
	<?php include 'header.php';?>
	<form action="/action_page.php" class="container-fluid">
		<div class="row">
			<div class="col-sm-7">
				<div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name">
				</div>
			</div>
			<div class="col-sm-5">
				<div class="form-group">
			    	<label for="phone">Phone Number:</label>
			    	<input type="tel" name="usrtel" class="form-control">
			  	</div>
			</div>
		</div>
	  	<div class="row">
	  		<div class="col-sm-12">
				<div class="form-group">
			    	<label for="address">Address:</label>
			    	<input type="text" name="address1" class="form-control">
			  	</div>
			</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-sm-3">
				<div class="form-group">
			    	<label for="city">City:</label>
			    	<input type="text" name="city" class="form-control">
			  	</div>
			</div>
	  		<div class="col-sm-2">
				<div class="form-group">
			    	<label for="pin">Pincode:</label>
			    	<input type="text" name="pin" class="form-control">
			  	</div>
			</div>
	  		<div class="col-sm-3">
				<div class="form-group">
			    	<label for="state">State:</label>
			    	<input type="text" name="state" class="form-control">
			  	</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
			    	<label for="locality">Locality:</label>
			    	<input type="text" name="locality" class="form-control">
			  	</div>
			</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-sm-3">
	  			<div class="form-group">
			    	<label for="age">Age:</label>
			    	<input type="text" name="age" class="form-control">
			  	</div>
	  		</div>
	  		<div class="col-sm-9">
	  			<label for="category">Category:</label>
	  			<div class="checkbox">
				  <label><input type="checkbox" value="">Modeling</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="">Dancing</label>
				</div>
				<div class="checkbox disabled">
				  <label><input type="checkbox" value="" disabled>Drawing</label>
				</div>
	  		</div>
	  	</div>
	  	</div>

	</form>
	<?php include 'footer.php';?>