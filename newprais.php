<?php 
$data_tell_velcom1 = htmlspecialchars($_POST['data_tell_velcom1'], NULL, 'utf-8');
if(!preg_match("/^[0-9-+ ]{17}$/",$data_tell_velcom1)) { }
else {
$data = '$tell_velcom1 = "'.$data_tell_velcom1.'";' . "\n";//В виндовс не \n, а \r\n
$file = 'prais.php';
$array=file( $file ); //файл в котором надо изменить строку
$array[1]=$data; //строка в которой нужно изменить значение $data
file_put_contents( $file, $array );}
header("Location: prais.html");
?>