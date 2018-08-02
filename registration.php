<?php
$conn = mysqli_connect('localhost','root','','first_project');
if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($conn, trim($_POST['username']));
	$surname = mysqli_real_escape_string($conn, trim($_POST['surname']));
	$password_1 = mysqli_real_escape_string($conn, trim($_POST['password_1']));
	$password_2 = mysqli_real_escape_string($conn, trim($_POST['password_2']));
	if(!empty($username) && !empty($surname) && !empty($password_1) && !empty($password_2) && ($password_1 == $password_2)) 
	{
		$sql = "SELECT * FROM 'users'";
		$data = mysqli_query($conn, $sql);
		$data1 = mysqli_fetch($data);
		if(mysqli_num_rows($data) == 0) {
			$sql = "INSERT INTO 'users' (username, surname, password_1) VALUES ('$username','$surname', '$password_1')";
			mysqli_query($conn,$sql);
			echo 'Все готово, можете авторизоваться';
			mysqli_close($conn);
			exit();
		} else {
			echo 'Логин уже существует';
		}
	}



}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Регистрация </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<header>
		<h1>RIVIERA</h1>
		<h2>Регистрация:</h2>
	</header>

	<content>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="username">Введите имя:</label>
				<input type="text" name="username">
			<label for="surname">Введите фамилию:</label>
				<input type="text" name="surname">
			<label for="password_1">Введите пароль:</label>
				<input type="password" name="password_1">
			<label for="password_2">Повторите пароль:</label>
				<input type="password" name="password_2">
			<button type="submit" name="submit">Регистрация</button>
			<a href="vhod.php">я уже зарегистрирован</a>
		</form>	
	</content>
	<footer>
		<a href="success_registration.php">Возврат</a>

	</footer>



</body>
</html>