    <?php
		$login = $_POST['login'];
		$password = $_POST['pass'];
		class User{
				public $login;
				public $pass;
				public $rol;
				public $name;
				public $last_name;

            public function window_hi(){
                echo 'Привет '.$this->rol.' '.$this->name.' '.$this->last_name.'.';
            }
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


		}
		$client = new Client();

		if ($login == 'admin' and $password== 'admin'){
			$message= $admin->window_hi();
			echo ' Вам можно все!';
		}elseif ($login=='meneger' and $password=='meneger'){
			$message= $meneger->window_hi();
			echo ' Вы можете удалять и добавлять клиентов!';;
		}elseif ($login=='client' and $password=='client'){
			$message=$client->window_hi();
			echo " Ви можете на сайті переглядати інформацію доступну користувачам ";
		}else {
			echo "Введите корректные данные!";
			}

	?>