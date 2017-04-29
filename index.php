<?php

require_once("User.php");

$server = "localhost";
$user 	= "root";
$pass	= "";
$database = "teste";

// Conect Mysql
@$mysqli = new mysqli($server,$user,$pass,$database);
// o @ tem a finalidade de esconder o erro do usuário
//error

if(mysqli_connect_errno()){
	echo "Failed to connect to MYSQL:(".$mysqli->connect_errno.")".$mysqli->connect_error;
	exit;
}

$user = new User($mysqli);

$user->setId("2")
	->setName("Eli Lice F")
	->setEmail("licef@email.com");
//echo $user->insert();
//echo "Ret:".$user->update()."<br/>";
//echo "Ret:".$user->delete(4)."<br/>";


$ret = $user->find(1);
echo $ret['id']."<br/>";
echo $ret['name']."<br/>";
echo $ret['email']."<br/><hr>";


//$ret = $user->list("id desc");
/*foreach ($ret as $value) {
	echo $value['id']."<br/>";
	echo $value['name']."<br/>";
	echo $value['email']."<br/><hr>";
}*/	

?>





