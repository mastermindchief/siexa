<?php
//http://programarenphp.wordpress.com 
//Incluimos el fichero de la clase
include ('../model/Mysql.class.php');
$login = $_POST['login'];
$passwd = $_POST['passwd'];
//Creamos la instancia que nos conecta y listo conectados 
$db=Mysql::getInstance(); 

$sql = "SELECT *
		FROM siexa.usuario 
		WHERE usuario_usuario= '".$login."' ";

/* Ejecutamos la query */
$result=$db->ejecutar($sql);
//RECIBIMOS LOS DATOS CAPTURADOS DE LA BASE DE DATOS
$variables = $db->resultados($result);
if ($variables[usuario_usuario]==$login && $variables[usuario_password]==$passwd) {
	# code...
	require_once('../view/forms/administrador/menuAdministrador.php');

}else{
echo "los datos son incorrectos.";
}
?>