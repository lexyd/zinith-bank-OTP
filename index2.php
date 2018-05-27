
<?php include ("header.php"); 
			session_start();
 // $otpok = $_SESSION['otp'] ;
		?>

		
	

	<html>
<body>

		

			<form action="index2.php" method="post">

			<input type ="text" name ="otp" placeholder = "ENTER OTP "required > 
			
			<input type="submit" value="INPUT OTP " name="otp1">
			

	</form>
	
	
						
</body>
</html>

<?php

	if(isset($_POST['otp1'])){

		$otp = mysqli_real_escape_string($conn, $_POST['otp']);
		//$yes = "yes";

		$sql = "SELECT * from otp WHERE otp_num='$otp' "; //AND otp_value = '$yes'";//find the syntax to check for 2 key identifiers
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_num_rows($result);
		if ($numrows >0){
			echo "<font color='red'>LOGIN SUCESSFULL</font>";
			header('Location: authotp.php');

	}else{
			echo "<font color='red'>INVALID OTP  </font>";
			

		}

		
	}

		


?>
