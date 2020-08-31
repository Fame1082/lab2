<?php
session_start();
require_once 'class.php';
if(empty($_POST['lang'])){

	echo "Выберите язык";
}
else{
	$_SESSION['lang']=$_POST['lang'];
header("Location:user.php");
}

?>


<form method="POST" action="lang.php" >
	<select name="lang" >
		<option value="ru">Русский</option>
		<option value="ua">Українська</option>
		<option value="en">English</option>
	</select>
<input type="submit" value="<?php echo lang::trans('Ok'); ?>"/>
</form>
