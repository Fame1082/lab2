<?php 
session_start();
require_once 'class.php';


if(empty($_POST["login"])&&empty($_POST["password"]))
{
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
