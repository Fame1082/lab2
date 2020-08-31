<?php
session_start();

class User{

public $name;
public $surname;
public $role;
public $lang;

public function __construct($role, $name,$surname,$lang)
{
	$this->role = $role;
	$this->name = $name;
	$this->surname = $surname;
	$this->lang = $lang;
}
 public  function us()
      { 
   echo lang::trans('Hello').', '.lang::trans($_SESSION['name']).', '.lang::trans($_SESSION['rol']);}


}

class admin extends User{
	public function hello(){
		parent::us();
	}
	
}

class client extends User{
	public function hello(){
		parent::us();
	}
	
}

class manager extends User{
	public function hello(){
		parent::us();
	}
	
}
class lang {
public static $translate=[
		'ru'=>['Hello'=>'Здравствуйте', 'admin'=>'админ', 'manager'=>'менеджер', 'client'=>'клиент', 'Марин'=>'Марин','Вася'=>'Вася','Эдик'=>'Эдик','Ваня'=>'Ваня','Олег'=>'Олег','Саня'=>'Саня','Admin_page'=>'Страница администратора', 'Manager_page'=>'Страница менеджера','Client_page'=>'Страница клиента',  'Log out'=>'Выйти','Ok'=>'Выбрать'],
		'en'=>['Hello'=>'Hello','admin'=>'admin', 'manager'=>'manager', 'client'=>'client', 'Марин'=>'Marin','Вася'=>'Vasya','Эдик'=>'Edik','Ваня'=>'Vanya','Олег'=>'Oleg','Саня'=>'Sanya', 'Admin_page'=>'Admin page', 'Manager_page'=>'Manager page','Client_page'=>'Client page','Log out'=>'Log out','Ok'=>'Ok'],
		'ua'=>['Hello'=>'Здравствуйте','admin'=>'адмін','manager'=>'менеджер', 'client'=>'клієнт','Марин'=>'Марін','Вася'=>'Вася','Эдик'=>'Єдік','Ваня'=>'Ваня','Олег'=>'Олег','Саня'=>'Саня','Admin_page'=>'Сторінка адміністратора', 'Manager_page'=>'Сторінка менеджера','Client_page'=>'Сторінка клієнта','Log out'=>'Вийти','Ok'=>'Вибрати'],
];

     public static function trans($text)
    {
        
        return self::$translate[$_SESSION['lang']][$text];
    }

}
?>