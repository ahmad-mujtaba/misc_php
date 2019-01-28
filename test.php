<?php



if(isset($_GET['id'])) {

$fp = fopen('log.txt', 'a+');
fwrite($fp, $_GET['id']);
fclose($fp);

echo $_GET['id'];




}



?>
