<?php

$data1=$_POST['email'];
$data2=$_POST['subject'];
$data3=$_POST['text'];
$data4=$_POST[' '];
$fp = fopen('contact.txt', 'a');
fwrite($fp, $data1);
fwrite($fp, $data2);
fwrite($fp, $data3);
fwrite($fp, $data4);
fclose($fp);
?>
