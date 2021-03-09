	<nav>


		<a href="http://localhost/simple_web_login/index.php">Home</a>
		<a href="http://localhost/simple_web_login/login.php">Login</a>
		<a href="http://localhost/simple_web_login/register.php">Register</a>
		<?php 
			if(isset($_SESSION)){
				echo "<a href='http://localhost/simple_web_login/profile.php'>Profile</a> ";
				echo "<a href='http://localhost/simple_web_login/logout.php'>Logout</a> ";
			}
		?>

	</nav>

	
	<?php 
		if(isset($_SESSION)){
		  echo "welcome ".$_SESSION['username'] . "!";
		}
		else{
		  echo "Not registered? <a href='register.php'>Sign up here</a>";
		}
	?>