<?php
$link = mysql_connect('localhost3306', 'host1865122', 'tx3L0XGLEE','th1');
if (!$link) {
    die('Ошибка соединения: ' . mysql_error());
}
echo 'Успешно соединились';
mysql_close($link);
?>