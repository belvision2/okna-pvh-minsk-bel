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


$podokonniki = htmlspecialchars($_POST['podokonniki'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$podokonniki)) { }
else {
$data10 = '$podokonniki = '.$podokonniki.';' . "\n";//В виндовс не \n, а \r\n
$file10 = 'prais.php';
$array10=file( $file10 ); //файл в котором надо изменить строку
$array10[10]=$data10; //строка в которой нужно изменить значение $data
file_put_contents( $file10, $array10 );}



$otkosi = htmlspecialchars($_POST['otkosi'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$otkosi)) { }
else {
$data11 = '$otkosi = '.$otkosi.';' . "\n";//В виндовс не \n, а \r\n
$file11 = 'prais.php';
$array11=file( $file11 ); //файл в котором надо изменить строку
$array11[11]=$data11; //строка в которой нужно изменить значение $data
file_put_contents( $file11, $array11 );}


$setki = htmlspecialchars($_POST['setki'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$setki)) { }
else {
$data12 = '$setki = '.$setki.';' . "\n";//В виндовс не \n, а \r\n
$file12 = 'prais.php';
$array12=file( $file12 ); //файл в котором надо изменить строку
$array12[12]=$data12; //строка в которой нужно изменить значение $data
file_put_contents( $file12, $array12 );}

$otlivi = htmlspecialchars($_POST['otlivi'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$otlivi)) { }
else {
$data13 = '$otlivi = '.$otlivi.';' . "\n";//В виндовс не \n, а \r\n
$file13 = 'prais.php';
$array13=file( $file13 ); //файл в котором надо изменить строку
$array13[13]=$data13; //строка в которой нужно изменить значение $data
file_put_contents( $file13, $array13 );}


$kbe = htmlspecialchars($_POST['kbe'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$kbe)) { }
else {
$data14 = '$kbe = '.$kbe.';' . "\n";//В виндовс не \n, а \r\n
$file14 = 'prais.php';
$array14=file( $file14 ); //файл в котором надо изменить строку
$array14[14]=$data14; //строка в которой нужно изменить значение $data
file_put_contents( $file14, $array14 );}

$rehau = htmlspecialchars($_POST['rehau'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$rehau)) { }
else {
$data15 = '$rehau = '.$rehau.';' . "\n";//В виндовс не \n, а \r\n
$file15 = 'prais.php';
$array15=file( $file15 ); //файл в котором надо изменить строку
$array15[15]=$data15; //строка в которой нужно изменить значение $data
file_put_contents( $file15, $array15 );}

$salamander = htmlspecialchars($_POST['salamander'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$salamander)) { }
else {
$data16 = '$salamander = '.$salamander.';' . "\n";//В виндовс не \n, а \r\n
$file16 = 'prais.php';
$array16=file( $file16 ); //файл в котором надо изменить строку
$array16[16]=$data16; //строка в которой нужно изменить значение $data
file_put_contents( $file16, $array16 );}

$dexen = htmlspecialchars($_POST['dexen'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$dexen)) { }
else {
$data17 = '$dexen = '.$dexen.';' . "\n";//В виндовс не \n, а \r\n
$file17 = 'prais.php';
$array17=file( $file17 ); //файл в котором надо изменить строку
$array17[17]=$data17; //строка в которой нужно изменить значение $data
file_put_contents( $file17, $array17 );}

$envin = htmlspecialchars($_POST['envin'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$envin)) { }
else {
$data18 = '$envin = '.$envin.';' . "\n";//В виндовс не \n, а \r\n
$file18 = 'prais.php';
$array18=file( $file18 ); //файл в котором надо изменить строку
$array18[18]=$data18; //строка в которой нужно изменить значение $data
file_put_contents( $file18, $array18 );}

$brusbox = htmlspecialchars($_POST['brusbox'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$brusbox)) { }
else {
$data19 = '$brusbox = '.$brusbox.';' . "\n";//В виндовс не \n, а \r\n
$file19 = 'prais.php';
$array19=file( $file19 ); //файл в котором надо изменить строку
$array19[19]=$data19; //строка в которой нужно изменить значение $data
file_put_contents( $file19, $array19 );}


$o1 = htmlspecialchars($_POST['o1'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o1)) { }
else {
$data20 = '$o1 = '.$o1.';' . "\n";//В виндовс не \n, а \r\n
$file20 = 'prais.php';
$array20=file( $file20 ); //файл в котором надо изменить строку
$array20[20]=$data20; //строка в которой нужно изменить значение $data
file_put_contents( $file20, $array20 );}

$o2 = htmlspecialchars($_POST['o2'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o2)) { }
else {
$data21 = '$o2 = '.$o2.';' . "\n";//В виндовс не \n, а \r\n
$file21 = 'prais.php';
$array21=file( $file21 ); //файл в котором надо изменить строку
$array21[21]=$data21; //строка в которой нужно изменить значение $data
file_put_contents( $file21, $array21 );}

$o3 = htmlspecialchars($_POST['o3'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o3)) { }
else {
$data22 = '$o3 = '.$o3.';' . "\n";//В виндовс не \n, а \r\n
$file22 = 'prais.php';
$array22=file( $file22 ); //файл в котором надо изменить строку
$array22[22]=$data22; //строка в которой нужно изменить значение $data
file_put_contents( $file22, $array22 );}

$o4 = htmlspecialchars($_POST['o4'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o4)) { }
else {
$data23 = '$o4 = '.$o4.';' . "\n";//В виндовс не \n, а \r\n
$file23 = 'prais.php';
$array23=file( $file23 ); //файл в котором надо изменить строку
$array23[23]=$data23; //строка в которой нужно изменить значение $data
file_put_contents( $file23, $array23 );}

$o5 = htmlspecialchars($_POST['o5'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o5)) { }
else {
$data24 = '$o5 = '.$o5.';' . "\n";//В виндовс не \n, а \r\n
$file24 = 'prais.php';
$array24=file( $file24 ); //файл в котором надо изменить строку
$array24[24]=$data24; //строка в которой нужно изменить значение $data
file_put_contents( $file24, $array24 );}

$o6 = htmlspecialchars($_POST['o6'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o6)) { }
else {
$data25 = '$o6 = '.$o6.';' . "\n";//В виндовс не \n, а \r\n
$file25 = 'prais.php';
$array25=file( $file25 ); //файл в котором надо изменить строку
$array25[25]=$data25; //строка в которой нужно изменить значение $data
file_put_contents( $file25, $array25 );}

$o7 = htmlspecialchars($_POST['o7'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$o7)) { }
else {
$data26 = '$o7 = '.$o7.';' . "\n";//В виндовс не \n, а \r\n
$file26 = 'prais.php';
$array26=file( $file26 ); //файл в котором надо изменить строку
$array26[26]=$data26; //строка в которой нужно изменить значение $data
file_put_contents( $file26, $array26 );}

$balkon_shapka = htmlspecialchars($_POST['balkon_shapka'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_shapka)) { }
else {
$data27 = '$balkon_shapka = '.$balkon_shapka.';' . "\n";//В виндовс не \n, а \r\n
$file27 = 'prais.php';
$array27=file( $file27 ); //файл в котором надо изменить строку
$array27[27]=$data27; //строка в которой нужно изменить значение $data
file_put_contents( $file27, $array27 );}

$balkon_ustanovka = htmlspecialchars($_POST['balkon_ustanovka'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_ustanovka)) { }
else {
$data28 = '$balkon_ustanovka = '.$balkon_ustanovka.';' . "\n";//В виндовс не \n, а \r\n
$file28 = 'prais.php';
$array28=file( $file28 ); //файл в котором надо изменить строку
$array28[28]=$data28; //строка в которой нужно изменить значение $data
file_put_contents( $file28, $array28 );}

$balkon_2erkera = htmlspecialchars($_POST['balkon_2erkera'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_2erkera)) { }
else {
$data29 = '$balkon_2erkera = '.$balkon_2erkera.';' . "\n";//В виндовс не \n, а \r\n
$file29 = 'prais.php';
$array29=file( $file29 ); //файл в котором надо изменить строку
$array29[29]=$data29; //строка в которой нужно изменить значение $data
file_put_contents( $file29, $array29 );}

$lod_p44 = htmlspecialchars($_POST['lod_p44'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod_p44)) { }
else {
$data30 = '$lod_p44 = '.$lod_p44.';' . "\n";//В виндовс не \n, а \r\n
$file30 = 'prais.php';
$array30=file( $file30 ); //файл в котором надо изменить строку
$array30[30]=$data30; //строка в которой нужно изменить значение $data
file_put_contents( $file30, $array30 );}

$lod5okon = htmlspecialchars($_POST['lod5okon'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod5okon)) { }
else {
$data31 = '$lod5okon = '.$lod5okon.';' . "\n";//В виндовс не \n, а \r\n
$file31 = 'prais.php';
$array31=file( $file31 ); //файл в котором надо изменить строку
$array31[31]=$data31; //строка в которой нужно изменить значение $data
file_put_contents( $file31, $array31 );}

$balkon_p = htmlspecialchars($_POST['balkon_p'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_p)) { }
else {
$data32 = '$balkon_p = '.$balkon_p.';' . "\n";//В виндовс не \n, а \r\n
$file32 = 'prais.php';
$array32=file( $file32 ); //файл в котором надо изменить строку
$array32[32]=$data32; //строка в которой нужно изменить значение $data
file_put_contents( $file32, $array32 );}

$lod2erkera = htmlspecialchars($_POST['lod2erkera'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod2erkera)) { }
else {
$data33 = '$lod2erkera = '.$lod2erkera.';' . "\n";//В виндовс не \n, а \r\n
$file33 = 'prais.php';
$array33=file( $file33 ); //файл в котором надо изменить строку
$array33[33]=$data33; //строка в которой нужно изменить значение $data
file_put_contents( $file33, $array33 );}

$lod_g = htmlspecialchars($_POST['lod_g'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod_g)) { }
else {
$data34 = '$lod_g = '.$lod_g.';' . "\n";//В виндовс не \n, а \r\n
$file34 = 'prais.php';
$array34=file( $file34 ); //файл в котором надо изменить строку
$array34[34]=$data34; //строка в которой нужно изменить значение $data
file_put_contents( $file34, $array34 );}

$lod4stv = htmlspecialchars($_POST['lod4stv'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod4stv)) { }
else {
$data35 = '$lod4stv = '.$lod4stv.';' . "\n";//В виндовс не \n, а \r\n
$file35 = 'prais.php';
$array35=file( $file35 ); //файл в котором надо изменить строку
$array35[35]=$data35; //строка в которой нужно изменить значение $data
file_put_contents( $file35, $array35 );}

$lod3stv = htmlspecialchars($_POST['lod3stv'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$lod3stv)) { }
else {
$data36 = '$lod3stv = '.$lod3stv.';' . "\n";//В виндовс не \n, а \r\n
$file36 = 'prais.php';
$array36=file( $file36 ); //файл в котором надо изменить строку
$array36[36]=$data36; //строка в которой нужно изменить значение $data
file_put_contents( $file36, $array36 );}


$balkon_1 = htmlspecialchars($_POST['balkon_1'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_1)) { }
else {
$data37 = '$balkon_1 = '.$balkon_1.';' . "\n";//В виндовс не \n, а \r\n
$file37 = 'prais.php';
$array37=file( $file37 ); //файл в котором надо изменить строку
$array37[37]=$data37; //строка в которой нужно изменить значение $data
file_put_contents( $file37, $array37 );}

$balkon_2 = htmlspecialchars($_POST['balkon_2'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_2)) { }
else {
$data38 = '$balkon_2 = '.$balkon_2.';' . "\n";//В виндовс не \n, а \r\n
$file38 = 'prais.php';
$array38=file( $file38 ); //файл в котором надо изменить строку
$array38[38]=$data38; //строка в которой нужно изменить значение $data
file_put_contents( $file38, $array38 );}

$balkon_3 = htmlspecialchars($_POST['balkon_3'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_3)) { }
else {
$data39 = '$balkon_3 = '.$balkon_3.';' . "\n";//В виндовс не \n, а \r\n
$file39 = 'prais.php';
$array39=file( $file39 ); //файл в котором надо изменить строку
$array39[39]=$data39; //строка в которой нужно изменить значение $data
file_put_contents( $file39, $array39 );}

$balkon_4 = htmlspecialchars($_POST['balkon_4'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_4)) { }
else {
$data40 = '$balkon_4 = '.$balkon_4.';' . "\n";//В виндовс не \n, а \r\n
$file40 = 'prais.php';
$array40=file( $file40 ); //файл в котором надо изменить строку
$array40[40]=$data40; //строка в которой нужно изменить значение $data
file_put_contents( $file40, $array40 );}

$balkon_5 = htmlspecialchars($_POST['balkon_5'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_5)) { }
else {
$data41 = '$balkon_5 = '.$balkon_5.';' . "\n";//В виндовс не \n, а \r\n
$file41 = 'prais.php';
$array41=file( $file41 ); //файл в котором надо изменить строку
$array41[41]=$data41; //строка в которой нужно изменить значение $data
file_put_contents( $file41, $array41 );}

$balkon_6 = htmlspecialchars($_POST['balkon_6'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$balkon_6)) { }
else {
$data42 = '$balkon_6 = '.$balkon_6.';' . "\n";//В виндовс не \n, а \r\n
$file42 = 'prais.php';
$array42=file( $file42 ); //файл в котором надо изменить строку
$array42[42]=$data42; //строка в которой нужно изменить значение $data
file_put_contents( $file42, $array42 );}

header("Location: index.html");
?>