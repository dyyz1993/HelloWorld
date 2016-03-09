<?php 
require('Db.php');
Db::instance('user');
$value=0;
$id=123456;
$row = Db::instance('user')->query("UPDATE `Info` SET `account` = ".$value." WHERE id=".$id);
	echo 'xx'.$row;
?>