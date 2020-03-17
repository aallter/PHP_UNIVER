<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <?php
		$login = $_POST['login'];
		$password = $_POST['pass'];
		class User{
				public $login;
				public $pass;
				public $rol;
				public $name;
				public $last_name;
			}
			/*Admin*/
		class Admin extends User{
			function __construct(){
				$this->login = 'admin'; 
				$this->pass = 'admin';
				$this->rol = 'админ';
				$this->name = 'Ада';
				$this->last_name='Байрон';
			}
			public function window_hi(){
				echo 'Привет '.$this->rol.' '.$this->name.' '.$this->last_name.'.'.' Вам можно все!';
			}
		}
		$admin = new Admin();
		
		/*Meneger*/
		
		class Meneger extends User{
			function __construct(){
				$this->login = 'meneger'; 
				$this->pass = 'meneger';
				$this->rol = 'менеджер';
				$this->name = 'Иван';
				$this->last_name='Иванов';
				
			}
			public function window_hi(){
				echo 'Привет '.$this->rol.' '.$this->name.' '.$this->last_name.'.'.' Вы можете удалять и добавлять клиентов!';
			}
		}
		$meneger = new Meneger();
		
		/*Client*/
		
		class Client extends User{
			function __construct(){
				$this->login = 'client'; 
				$this->pass = 'client';
				$this->rol = 'клиент';
				$this->name = 'Афанасий ';
				$this->last_name='Авдотьев';
			}
			public function window_hi(){
				echo 'Привет '.$this->rol.' '.$this->name.' '.$this->last_name.'.'.' Вы можете на сайте просматривать информацию доступную пользователям!';
			}
		}
		$client = new Client();
		
		if ($login == 'admin' and $password== 'admin'){
			$message= $admin->window_hi();
		}elseif ($login=='meneger' and $password=='meneger'){
			$message= $meneger->window_hi();
		}elseif ($login=='client' and $password=='client'){
			$message=$client->window_hi();
		}else {
			echo "Введите корректные данные!";
			}
			
	?>
		
			<h1 style="text-align:center">
				<?php echo $message;?>
			</h1>
		
    <form method="post" style="text-align:center">
		<p>
			<label>Login</label><br>
			<input name="login"> <br>
			<label>Password</label><br>
			<input type="password" name="pass"><br>
		</p>
	   <p><input type="submit" value="Отправить" method="post"></p>
	</form>
</body>
</html>
