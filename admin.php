<?php 
session_start();
require_once 'class.php';


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<link rel="stylesheet"  href="style.css">
	<title><?php echo lang::trans('Admin_page'); ?></title>
</head>
<body>
	<div class="menu">
		<button class="link"> <a href="client.php"><?php echo lang::trans('Client_page'); ?></a></button>
		<button class="link"> <a href="admin.php"><?php echo lang::trans('Admin_page'); ?></a></button>
		<button class="link"> <a href="manager.php"><?php echo lang::trans('Manager_page'); ?></a></button></div>
		<?php
		if($_SESSION['rol']=='admin'){
			$admin = new admin($_SESSION['rol'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
			echo $admin->hello();
			
		}
		else{

			echo	'Error 404';
		}
		?>
		<br><button class="exit"> <a href="exit.php"><?php echo lang::trans('Log out');?></a></button>
	</body>
	</html>