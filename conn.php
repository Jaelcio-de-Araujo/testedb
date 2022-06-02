<?php
$link = mysql_connect('valorfiscal.mysql.dbaas.com.br', 'valorfiscal', 'vf102030');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>