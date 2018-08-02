

<!DOCTYPE html>
<html>
<head>
	<title> Вход </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<header>
		<h1>RIVIERA</h1>
		<h2>Вход:</h2>
	</header>

	<content>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="username">Введите ваш логин:</label>
				<input type="text" name="username">
			<label for="username">Введите ваш пароль:</label>
				<input type="password" name="password_1">
			<label for="username">Повторите пароль:</label>
				<input type="password" name="password_2">
			<button type="submit" name="submit">Вход</button>
			<a href="registration.php">регистрация</a>
		</form>	
	</content>


</body>
</html>



