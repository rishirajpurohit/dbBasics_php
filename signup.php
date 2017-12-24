<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>

	<style type="text/css">
		body {
    background: whitesmoke;
}

div#login {
    width: 500px;
    margin: 0 auto;
    margin-top: 80px;
    padding: 50px;
    border: 1px solid #cac7c7;
    background: white;
    border-radius: 10px;
    box-shadow: 10px 10px 5px grey;
}
	</style>
</head>
<body>
	<div id="login">
		<form method="post" action="auth.php">
			<input type="text" name="username">
			<input type="password" name="password">
			<input type="submit" name="register_submit" value="Register">
		</form>
	</div>
</body>
</html>