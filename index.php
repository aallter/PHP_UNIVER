<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <?php
		
		class User{
			public $user = array(
			  1 => $_POST['login'],
			  2 => $_POST['pass'],
			  3 => $_POST['name'],
			  4 => $_POST['last_name'],
			  5 => $_POST['rol'],
			);
				public $login = $user[1];
				public $password = $user[2];
				public $name = $user[3] ;
				public $last_name = $user[4] ;
				public $rol= $user[5];
			}
		class Admin extends User{
			function data{
			$this->login = "admin";
			$this->password = "admin";
			$this->rol= "admin";
			}
			public function window_hi(){
				echo 'Привет'.$this->rol.' '.$this->name;
			}
		}
		
		
		if ($login == "admin" and $password == "admin" ){
			$admin = new Admin();
			$admin->window_hi();
		}else{
			echo "NO";
			}
	?>

    <form method="post">
		<p>
			<label>Login</label><br>
			<input name="login"> <br>
			<label for="pass">Password</label><br>
			<input type="password" name="pass"><br>
			<label for="name">First name:</label><br>
			<input type="text" name="name"><br>
			<label for="last_name">Last name:</label><br>
			<input type="text" name="last_name"><br>
			<label for="rol">Роль</label><br>
			<input type="text" name="rol">
		</p>
	   <p><input type="submit" value="Отправить" method="post"></p>
	</form>
</body>
</html>
