<?php 
if (isset($_POST['action'])) {
	
		if (!isset($_POST['token']) && $_POST['token']==$_SESSION['token']) {
			$authController = new AuthController();
			switch (variable) {
				case 'action':
					
				break;
			}
		}else{
			$_SESSION['error'] = 'de seguridad';
			header("Location:". $_SERVER['HTTP_REFERER']);
		}
	}
include "../app/config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<style type="text/css">
		fieldset{
			width: 50%;
			margin: auto;
			background-color: gray;
			padding: 20px;
		}
		legend{
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="../auth">
			<fieldset>
				<legend>
					Access in your account
				</legend>

				<label>
					Email
				</label>
				<input type="email" name="email" required="">

				<br>

				<label>
					Password
				</label>
				<input type="password" name="password" required="">

				<br>

				<button type="submit">
					Access
				</button>

				<input type="hidden" name="action" value="login">
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
			</fieldset>

		</form>
		
		<form method="POST" action="../auth">
			<fieldset>
				<legend>
					Register
				</legend>

				<label>Name</label>

				<input type="text" name="name" required="">

				<br>

				<label>Email</label>

				<input type="email" name="email" required="">

				<br>

				<label>Password</label>

				<input type="password" name="password" required="">

				<br>

				<button type="submit">
					Enviar
				</button>

				<input type="hidden" name="action" value="register">
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

			</fieldset>
		</form>
		
		
	</center>
</body>
</html>