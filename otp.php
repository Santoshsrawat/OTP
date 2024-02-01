<?php 
session_start();
//------------------ Connection File --------------------
$conn = mysqli_connect("localhost", "u121159361_himani", "Himani@123", "u121159361_himani");

if(isset($_POST['save'])){
	$otp = $_SESSION['otp'];
	$confirm_otp = $_POST['otp_value'];

	if($otp == $confirm_otp){
		$username = $_SESSION['username'];
		$email = $_SESSION['email'];
		$password = $_SESSION['password'];

		$to = $email;
		$subject = "Thank you!";
		$txt = "Username:".$username.
		"Email:".$email.
		"Password:".$password. "";

		mail($to, $subject, $txt);

		$insert = "INSERT INTO `demo`(`username`, `email`, `password`, `otp`) VALUES('$username', '$email', '$password', '$otp')";	//------------ INSERT QUERY START -------------
		$insert_run = mysqli_query($conn, $insert);
		header('Location: index.php?success=success');
	}else{
		echo "Invalid OTP";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> OTP </title>
	<!----------------- Bootstrap Links ---------------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<section>
		<main>
			<!------------- FORM START ------------------>
			<div class="container mt-3">
			  	<h2> Registration form </h2>
			  	<form action="" method="POST" class="w-50">
				  	<div class="mb-3 mt-3">
				      <label for="username"> OTP: </label>
				      <input type="password" class="form-control" id="username" placeholder="Enter OTP" name="otp_value">
				    </div>
				    <button type="submit" class="btn btn-primary" name="save"> Submit </button>
			  	</form>
			</div>
			<!---------------- FORM END ---------------->
		</main>
	</section>
</body>
</html>