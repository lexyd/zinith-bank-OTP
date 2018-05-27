
<?php include ("header.php"); 
			session_start();

		?>
<html>
<body>

		

						<form action="signup.php" method="post">

						<input type ="text" name ="name" placeholder = "Name "required > 
						<input type ="text" name ="email" placeholder = "email "required > 
						<select name = "sec_quest" required>

							<option value = "">SELECT A SECURITY QUESTION </option>
							<option value = "BEST COLOUR">BEST COLOUR </option>
							<option value = "NAME OF PET"> NAME OF PET </option>
							<option value = "FAVORITE SAYING"> FAVORITE SAYING </option>


						</select>
						
						<input type ="text" name ="sec_answer" placeholder = "Answer "required > 					
					   

					<input type="submit" value="Register" name="Register">

				</form>
	
	
			<?php

			if (isset($_POST['Register'])) {
		 	
		 	# code...
		 			$name 		 = $_POST['name'];
					$email		 = $_POST['email'];
					$sec_quest   = $_POST['sec_quest'];
					$sec_answer  = $_POST['sec_answer'];
					
				
						# code...

						$sql = "INSERT into users (name,email,sec_quest,sec_answer)
									VALUES
									 ('$name','$email','$sec_quest','$sec_answer')";

							$result = mysqli_query($conn, $sql);
							# code...
								if ($result) {
									echo "<font color='blue'>New User Record Added</font>";
										
									# code...
								}else{
									echo "<font color='red'>Record was not Added</font>";
					
								}

					

							


						

				}

			?>

</body>
</html>