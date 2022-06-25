<?php
error_reporting(0);
$ip = readline("IP: ");
$portas = array(53, 80, 8000, 8080, 4444, 5000, 9080, 7070);
foreach($portas as $porta){
	$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	$re = socket_connect($sock, $ip, $porta);
	if($re == 1){
		echo "\e[92mOPEN > $porta < OPEN\n";
	}else{
		echo "\e[91mCLOSED > $porta < CLOSED\n";
	}
}
?>
