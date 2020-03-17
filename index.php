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
		$name = $_POST['name'] ;
		$last_name = $_POST['last_name'] ;
		class User{
				public $login2;
				public $pass2;
				public $rol2;
			}
		class Admin extends User{
			function __construct(){
				$this->login2 = 'admin'; 
				$this->pass2 = 'admin';
				$this->rol2 = 'админ';
			}
			public function window_hi(){
				echo 'Привет '.$this->rol2;
			}
		}
		$admin = new Admin();
		/*Meneger*/
		
		class Meneger extends User{
			function __construct(){
				$this->login2 = 'meneger'; 
				$this->pass2 = 'meneger';
				$this->rol2 = 'менеджер';
			}
			public function window_hi(){
				echo 'Привет '.$this->rol2;
			}
		}
		$meneger = new Meneger();
		
		/*Client*/
		
		class Client extends User{
			function __construct(){
				$this->login2 = 'client'; 
				$this->pass2 = 'client';
				$this->rol2 = 'клиент';
			}
			public function window_hi(){
				echo 'Привет '.$this->rol2;
			}
		}
		$client = new Client();
		
		if ($login == 'admin' and $password== 'admin'){?><div style="text-align:center">
		<h2> <?
			echo $admin->window_hi().' '.$name.' '.$last_name.'.'.' Вам можно все!';?></h2></div
		<?}elseif ($login=='meneger' and $password=='meneg'){?><div style="text-align:center">
		<h2>  <?
			echo $meneger->window_hi().' '.$name.' '.$last_name.'.'.' Вы можете удалять и добавлять клиентов!';?></h2></div>
			<?
		}elseif ($login=='client' and $password=='CLIENT'){?><div style="text-align:center">
		<h2> <?
			echo $client->window_hi().' '.$name.' '.$last_name.'.'.' Вы можете на сайте просматривать информацию доступную пользователям!';?></h2></div>
		<?}else {?><div style="text-align:center">
		<h2> <?
			echo "Введите корректные данные!";
			}?></h2></div>
	
    <form method="post" style="text-align:center">
		<p>
			<label>Login</label><br>
			<input name="login"> <br>
			<label>Password</label><br>
			<input type="password" name="pass"><br>
			<label>First name:</label><br>
			<input type="text" name="name"><br>
			<label>Last name:</label><br>
			<input type="text" name="last_name"><br>
		</p>
	   <p><input type="submit" value="Отправить" method="post"></p>
	</form>
</body>
</html>
