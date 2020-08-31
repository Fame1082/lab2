<?php
session_start();

$users = array(
 array('name' =>'Марин' ,'surname'=>'Мокану','login' => 'morin', 'password' => '123321', 'lang' => 'ru' ,'rol'=>'client'),
 array('name' =>'Вася' ,'surname'=>'Горлов','login' => 'vasya', 'password' => '234432', 'lang' => 'ru','rol'=>'manager'),
 array('name' =>'Эдик' ,'surname'=>'Хейлик','login' => 'edos', 'password' => '345543', 'lang' => 'en' ,'rol'=>'admin'),
 array("name" =>'Ваня' ,'surname'=>'Иванов','login' => 'vanya', 'password' => '333333','lang' => 'ru','rol'=>'client' ),
 array('name' =>'Олег','surname'=>'Хруст','login' => 'olegatron', 'password' =>'111111','lang' => 'ua','rol'=>'manager' ),
 array( 'name' =>'Саня' ,'surname'=>'Лящь','login' => 'sanya', 'password' => '222222','rol'=>'client') 
);
    // echo $users [0]['name'].$users [0]['password'];

  // for($i=1;$i<5;$i++)
foreach ($users as $item) {

 if($_POST["password"]==$item['password']&&$_POST["login"]==$item['login']){

   $_SESSION['rol']=$item['rol'];
   $_SESSION['name']=$item['name'];
   $_SESSION['surname']=$item['surname'];
   $_SESSION['lang']=$item['lang'];
   $_SESSION['login']= $item['login'];
   $_SESSION['password']= $item['password'];
 }

}
require_once 'class.php';


if(empty($_POST["login"])&&empty($_POST["password"])&&empty($_SESSION['login']))
  {//echo "Данные введены не верно!";
header("Location: index.php");         
}
elseif(empty($_SESSION['lang'])){
 $_SESSION['lang'] = 'ru';
 header("Location: lang.php");
}

else switch ($_SESSION['rol']) {

  case 'client':
  header("Location: client.php");
  break;
  
  case 'admin':
  header("Location: admin.php");
  break;
  
  
  case 'manager':
  header("Location: manager.php");
  break;
}


?>