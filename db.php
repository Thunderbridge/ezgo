<?php
$db = mysql_connect("192.168.0.111","root","lin13579");

mysql_query("SET CHARACTER SET 'UTF8';");
mysql_query('SET NAMES UTF8;');
mysql_query('SET CHARACTER_SET_CLIENT=UTF8;');
mysql_query('SET CHARACTER_SET_RESULTS=UTF8;');
mysql_select_db("animal");

$sql = $_POST['SELECT * from information'];
$sql = stripslashes($sql);
$res = mysql_query($sql);
while($r = mysql_fetch_assoc($res))
    $output[] = $r;

echo json_encode($output);

mysql_close($db);

?>