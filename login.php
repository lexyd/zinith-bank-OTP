
<?php include ("header.php"); 
			session_start();

		?>

		<?php
		

		?>
<html>
<body>

		

			<form action="authenticate.php" method="post">

			<input type ="text" name ="email" placeholder = "EMAIL "required > 
			<select name = "sec_quest" required>

							<option value = "">SELECT YOUR SECURITY QUESTION TO ANSWER </option>
							<option value = "BEST COLOUR">BEST COLOUR </option>
							<option value = "NAME OF PET"> NAME OF PET </option>
							<option value = "FAVORITE SAYING"> FAVORITE SAYING </option>


						</select>
				<input type ="text" name ="sec_answer" placeholder = "Answer "required >
			
		
		<input type="submit" value="Generate OTP " name="otp">

	</form>
	
	
						
</body>
</html>