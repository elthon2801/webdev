<html>
	<head>
		<title>
			Web2
		</title>
		<link rel="stylesheet" href="styles/index.css">
	</head>

	<body>
		<div style=" margin: 0 auto; width: 0%; height: 0%;">
			<embed src="resource/Music/bgmusic.mp3" loop="true" autostart="true" width="2" height="0">
		</div>	
		<div class="words">
			<div class="head">
				<h1>Welcome to our team!</h1>
				<h2>(Come on, know us better!)</h2>
			</div>

		<!--			Login/Signup			-->

		<div class="login">
			<form action="index.php" method="POST">
				<input type="email" name="mail" id="e-mail" placeholder="email@cca.edu.ph">
			<br><br>
				<input type="password" name="pass" id="key" placeholder="password">
			<br><br>
				<input type="submit" value="Login" name="submit" class="button">
			</form>
			<form action="index.php" method="POST">
			<input type="submit" name='signup' value="Sign Up" class="button">
			</form>
		</div>		
		<!--			Login/Signup			-->

	<?php
	
		if(isset($_POST["mail"])){
			$emails = array('nelsonjanperez@cca.edu.ph', 'ejcayetano@cca.edu.ph', 'bogalang@cca.edu.ph', 'jppasohil@cca.edu.ph', 'csjgonzales@cca.edu.ph', 'izamora@cca.edu.ph', 'jlovendino@cca.edu.ph');
			$names = array('Mr. Nelsonjan Perez', 'Elthon Jon Cayetano', 'Brian Oniel Galang', 'John Patrick Pasohil', 'Carlos Steven julian Gonzales', 'Ilah Zamora', 'Joan Lovendino');
			$photos = array('resource/Site/sir.jpg', 'resource/Cayetano/buladas.png','resource/Galang/briann.png','resource/Pasohil/patrick.png','resource/Gonzales/carlos.png','resource/Zamora/ilahhhhh.png','resource/Lovendino/joana.png');
			$message = null;
			$name = null;
			$photo = null;
			for($i = 0; $i < count($emails); $i++){
				if ($_POST["mail"] == $emails[$i]){
					$message = "<h1>Welcome back ". $names[$i].'!'."</h1>";
					$name = $names[$i];
					$photo = $photos[$i];
					break;
				}else{
				}
			}
			
			?>
			<div class="prompt">
				<?php
				if($message != null){ ?>
					<img src=<?php echo $photo; ?> alt="">
					<?php echo $message; ?>
					<form action="home.php" method="POST">
						<input type="hidden" name="name" value=<?php echo $name;?>>
						<input type="submit" name="login" value="Proceed" class="button">
					</form>
					
				<?php
				}else{ ?>
					<img src="https://pngimg.com/uploads/exclamation_mark/small/exclamation_mark_PNG81.png" alt=""> <?php
					echo "<h1>Please use a cca.edu.ph email, try again!"; ?>
					<br><br>
					<button class="button"><a href="index.php">Retry</a></button>
				<?php
				}
				 ?>
			</div>
			<?php
		}else if(isset($_POST["signup"])){ ?> 
			<div class="prompt">
				<h1>Sign up</h1>
				<form action="home.php" method="POST">
					<p>Full Name</p>
					<input type="text" name="firstName" class="forminput" placeholder="Juan dela Burgir"> 
					<br><p>Email <em>[cca.edu.ph]</em></p>
					<input type="email" name="eMail" class="forminput" placeholder="JuandelaBurgir@cca.edu.ph"> 
					<br><p>Role</p>
					<select name="role" class="forminput">
						<option value="" disabled selected hidden>select here</option>
						<option value="Student">Student</option>
						<option value="Teacher">Instructor</option>	
					</select> 
					<br><p>Create Password</p>
					<input type="password" name="password" class="forminput" placeholder="at leat 6 characters">
					<br><br><br>
					<input type="submit" name="signup" value="Submit" class="button">
				</form>
			</div>
		<?php
		}
	?>		
		
		<div class="divider"></div>
			<sub>
				codes by City College of Angeles
			<br>
				BSIS-I201</sub>
		</div>
	</body>
</html>