<?php

require_once("User.php");
require_once("ServiceUser.php");

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

$user = new User();

$user->setName("Raphael TF")
	->setEmail("raphaelf@email.com");

$serviceUser = new ServiceUser($mysqli,$user);

echo $serviceUser->insert();
//echo "Ret:".$serviceUser->update()."<br/>";
//echo "Ret:".$serviceUser->delete(4)."<br/>";


$ret = $serviceUser->find(2);
/*echo $ret['id']."<br/>";
echo $ret['name']."<br/>";
echo $ret['email']."<br/><hr>";
*/

//$ret = $user->list("id desc");
/*foreach ($ret as $value) {
	echo $value['id']."<br/>";
	echo $value['name']."<br/>";
	echo $value['email']."<br/><hr>";
}*/	

?>





