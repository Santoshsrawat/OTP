<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> OTP Email </title>
	<!----------------- Bootstrap Links ---------------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<section>
		<main>
			<!------------------- FORM START --------------------->
			<div class="container mt-3">
			  	<h2> Registration form </h2>
			  	<form action="process.php" method="POST" class="w-50">
				  	<div class="mb-3 mt-3">
				      <label for="username"> Username: </label>
				      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
				    </div>
				    <div class="mb-3 mt-3">
				      <label for="email"> Email: </label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				    <div class="mb-3">
				      <label for="pwd"> Password: </label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
				    </div>
				    <button type="submit" class="btn btn-primary" name="submit"> Submit </button>
			  	</form>
			</div>
			<!------------------- FORM END ------------------->
		</main>
	</section>

<?php 
	if($_GET['success'] == 'success'){
		echo "<script> alert('Data Send to Mail Successfully') </script>";
	}
?>

</body>
</html>