<?php
$dbc = mysqli_connect('localhost','root','','first_project');
if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password_1 = mysqli_real_escape_string($dbc, trim($_POST['password_1']));
	$password_2 = mysqli_real_escape_string($dbc, trim($_POST['password_2']));
	if(!empty($username) && !empty($password_1) && !empty($password_2) && ($password_1 == $password_2)) 
	{
		$query = "SELECT * FROM 'signup' WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query = "INSERT INTO 'signup' (username, password) VALUES ('$username', '$password_1')";
			mysqli_query($dbc,$query);
			echo 'Все готово, можете авторизоваться';
			mysqli_close($dbc);
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
		<h2>Регистрация прошла успешно!:</h2>
		<a href="vhod.php">Войти</a>
	</header>
	<footer>
		<a href="bd.php">Зайти в БД</a>
	</footer>




</body>
</html>