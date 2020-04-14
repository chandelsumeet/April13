<?php 
include("header.php");
include("db.php");
include("function.php");


?>


<div>
	<nav class="grid-main">
		<input type="checkbox" name="check" id="toggle">
		<div class="grid-logo">
			<div><img src="images/logo.png"></div>
			<div class="label-container"><label for="toggle" id="label">&#9776;</label></div>
		</div>


		<?php echo display_menus();  ?>

	</nav>
</div>

<br><br>
<div  class="background-wrapper">
	<div class="background">
		<div class="form-master">
			<input type="radio" name="sec1" id="register" checked>
			<input type="radio" name="sec1" id="login">

			<div  class="gridm">

				<div class="options">
					<div class="register"></div>
					<label for="register">Register</label>
				</div>

				<div class="options">
					<div class="login"></div>
					<label for="login">Login</label>
				</div>


			</div>

			<div class="form-wrapper form-register">
				
				<p>Create your Account</p>
				<p>to continue to Mail</p>
				<form class="form-grid" name="" action="" method="post">
					<input type="text" name="username" placeholder="enter your name">
					<input type="password" name="password" placeholder="enter your password">
					<input type="email" name="email" placeholder="enter your email">
					<input type="submit" name="submit" class="btn">

				</form>
					<p><?php    echo  register(); ?></p>

			</div>

			<div class="form-wrapper form-login">
				
				<form class="form-grid" name="" action="" method="post">
					<input type="text" name="username" placeholder="enter your name">
					<input type="password" name="password" placeholder="enter your password">
					<input type="submit" name="login" value="login" class="btn">

				</form>
					<p><?php check(); ?> </p>

			</div>



		</div>
	</div>

</div>

</body>
</html>