<?php
	require_once('../lib/nusoap.php');
	require_once('../lib/class.wsdlcache.php');
	$soapclient = new nusoap_client('http://localhost:80/ProyectoSW/php/ClientVerifyPass.php?wsdl',true);
	$resultado = $soapclient->call('contrasena', array('x'=>$_GET['pass'],'y'=>$_GET['ticket']));
	echo $resultado;
?>