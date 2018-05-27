<?php

include "header.php";
session_start();

?>


<?php

if(isset($_POST['otp'])){
		
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$sec_quest = mysqli_real_escape_string($conn, $_POST['sec_quest']);
		$sec_answer = mysqli_real_escape_string($conn, $_POST['sec_answer']);
		
				//if($email && $sec_quest && $sec_answer){

				//	if($user == "user"){
				//		$table = "user";
				//		$location = "user/view_animal.php";
						//$user_id = "matric";
				//	}
				//	if($user == "admin"){
				//		$table = "admin";
				//		$location = "admin/addanimal.php";
					//	$user_id = "lec_id";			
				//	}else{
										
				//		$_SESSION['response'] = '<font color="red">Please Provide correct type of user</font>';
					//	header('Location: login.php');
				//	}
				//}
		
		$sql = "SELECT * from users WHERE email='$email' && sec_answer = '$sec_answer'";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_num_rows($result);
		if ($numrows >0){
			$otp = rand(100000,999999); 

			$sql2 = "INSERT into otp (otp_num) VALUES ('$otp')";
			$result2 = mysqli_query($conn,$sql2);
			if ($result2) {

				# code...
					echo "<font color='red'>OTP GENERATED SUCESSFULLY</font>";
					echo $otp;
					
					


			}else{

					echo "<font color='red'>OTP WAS NOT GENERATED SUCESSFULLY </font>";

			}


		}else{

				echo "<font color='red'>USER NOT FOUND </font>";

		}

		}	
	
?>



<?php
 // $otp1 = $_SESSION['otp'];
?>
<html>
<body>

		
<a href="index2.php"> ENTER OTP </a>
	
	
						
</body>
</html>