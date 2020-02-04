<?php

$ip_server = $_SERVER['SERVER_ADDR'];
$ip = $_SERVER['REMOTE_ADDR'];

echo "<h1>Hello From Kubernetes</h1><br>";
echo "Server IP Address is: $ip_server", "<br>";
echo "Client IP Address is: $ip", "<br>";

echo "<p><font color=blue>Made by Denis Astahov";
?>
