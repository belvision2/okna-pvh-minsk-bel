<?php
$data_tell_velcom2 = htmlspecialchars($_POST['data_tell_velcom2'], NULL, 'utf-8');
if(!preg_match("/^[0-9-+ ]{17}$/",$data_tell_velcom2)) { }
else {
$data2 = '$tell_velcom2 = "'.$data_tell_velcom2.'";' . "\n";//В виндовс не \n, а \r\n
$file2 = 'prais.php';
$array2=file( $file2 ); //файл в котором надо изменить строку
$array2[2]=$data2; //строка в которой нужно изменить значение $data
file_put_contents( $file2, $array2 );}


$data_tell_velcom1 = htmlspecialchars($_POST['data_tell_velcom1'], NULL, 'utf-8');
if(!preg_match("/^[0-9-+ ]{17}$/",$data_tell_velcom1)) { }
else {
$data = '$tell_velcom1 = "'.$data_tell_velcom1.'";' . "\n";//В виндовс не \n, а \r\n
$file = 'prais.php';
$array=file( $file ); //файл в котором надо изменить строку
$array[1]=$data; //строка в которой нужно изменить значение $data
file_put_contents( $file, $array );}

$data_tell_mts = htmlspecialchars($_POST['data_tell_mts'], NULL, 'utf-8');
if(!preg_match("/^[0-9-+ ]{17}$/",$data_tell_mts)) { }
else {
$data3 = '$tell_mts = "'.$data_tell_mts.'";' . "\n";//В виндовс не \n, а \r\n
$file3 = 'prais.php';
$array3=file( $file3 ); //файл в котором надо изменить строку
$array3[3]=$data3; //строка в которой нужно изменить значение $data
file_put_contents( $file3, $array3 );}

$data_cena_okna = htmlspecialchars($_POST['data_cena_okna'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$data_cena_okna)) { }
else {
$data4 = '$cena_okna = '.$data_cena_okna.';' . "\n";//В виндовс не \n, а \r\n
$file4 = 'prais.php';
$array4=file( $file4 ); //файл в котором надо изменить строку
$array4[4]=$data4; //строка в которой нужно изменить значение $data
file_put_contents( $file4, $array4 );}


$data_cena_ustanovki = htmlspecialchars($_POST['data_cena_ustanovki'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$data_cena_ustanovki)) { }
else {
$data5 = '$cena_ustanovki = '.$data_cena_ustanovki.';' . "\n";//В виндовс не \n, а \r\n
$file5 = 'prais.php';
$array5=file( $file5 ); //файл в котором надо изменить строку
$array5[5]=$data5; //строка в которой нужно изменить значение $data
file_put_contents( $file5, $array5 );}


$cena_shapka = htmlspecialchars($_POST['cena_shapka'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$cena_shapka)) { }
else {
$data6 = '$cena_shapka = '.$cena_shapka.';' . "\n";//В виндовс не \n, а \r\n
$file6 = 'prais.php';
$array6=file( $file6 ); //файл в котором надо изменить строку
$array6[6]=$data6; //строка в которой нужно изменить значение $data
file_put_contents( $file6, $array6 );}

$dvuxstvorchatoe = htmlspecialchars($_POST['dvuxstvorchatoe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$dvuxstvorchatoe)) { }
else {
$data7 = '$dvuxstvorchatoe = '.$dvuxstvorchatoe.';' . "\n";//В виндовс не \n, а \r\n
$file7 = 'prais.php';
$array7=file( $file7 ); //файл в котором надо изменить строку
$array7[7]=$data7; //строка в которой нужно изменить значение $data
file_put_contents( $file7, $array7 );}

$trexstvorchatoe = htmlspecialchars($_POST['trexstvorchatoe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$trexstvorchatoe)) { }
else {
$data8 = '$trexstvorchatoe = '.$trexstvorchatoe.';' . "\n";//В виндовс не \n, а \r\n
$file8 = 'prais.php';
$array8=file( $file8 ); //файл в котором надо изменить строку
$array8[8]=$data8; //строка в которой нужно изменить значение $data
file_put_contents( $file8, $array8 );}

$balkon_blok = htmlspecialchars($_POST['balkon_blok'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_blok)) { }
else {
$data9 = '$balkon_blok = '.$balkon_blok.';' . "\n";//В виндовс не \n, а \r\n
$file9 = 'prais.php';
$array9=file( $file9 ); //файл в котором надо изменить строку
$array9[9]=$data9; //строка в которой нужно изменить значение $data
file_put_contents( $file9, $array9 );}


header("Location: prais.html");
?>