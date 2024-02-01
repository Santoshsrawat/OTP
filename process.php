 <?php
session_start();
//------------------ Connection File --------------------
$conn = mysqli_connect("localhost", "u121159361_himani", "Himani@123", "u121159361_himani");

$otp = rand(100000, 999999);
$message = urlencode("otp number.".$otp);
$to = $_POST['email'];
$subject = "OTP";
$txt = "OTP: ".$otp."";

mail($to, $subject, $txt);
if(isset($_POST['submit'])){
	$username = trim(mysqli_real_escape_string($conn, $_POST['username']));
	$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
	$password = trim(mysqli_real_escape_string($conn, $_POST['password']));
	$_SESSION['otp'] = $otp;

	//-------------------- SESSION VALUES --------------------
		$_SESSION['username'] = $username ;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		
	header('Location: otp.php');
	
}

?>