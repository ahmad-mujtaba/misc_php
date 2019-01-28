<?php
if(isset($_GET['id'])) {
	$fp = fopen('t.txt','a+');


	$data = '';
	$data .= 'id = '.$_GET['id'] . ', t = '.time().', data = '.$_GET['data'].', ua = '.$_SERVER['HTTP_USER_AGENT'];
	fwrite($fp, $data.PHP_EOL);
	fclose($fp);
	echo $data;
}


if(isset($_GET['clear'])) {
	$fp = fopen('t.txt','w+');
	fwrite($fp, '');
	fclose($fp);
}
?>
