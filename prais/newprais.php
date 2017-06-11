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


$okno_1 = htmlspecialchars($_POST['okno_1'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_1)) { }
else {
$data43 = '$okno_1 = '.$okno_1.';' . "\n";//В виндовс не \n, а \r\n
$file43 = 'prais.php';
$array43=file( $file43 ); //файл в котором надо изменить строку
$array43[43]=$data43; //строка в которой нужно изменить значение $data
file_put_contents( $file43, $array43 );}

$okno_2 = htmlspecialchars($_POST['okno_2'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_2)) { }
else {
$data44 = '$okno_2 = '.$okno_2.';' . "\n";//В виндовс не \n, а \r\n
$file44 = 'prais.php';
$array44=file( $file44 ); //файл в котором надо изменить строку
$array44[44]=$data44; //строка в которой нужно изменить значение $data
file_put_contents( $file44, $array44 );}

$okno_3 = htmlspecialchars($_POST['okno_3'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_3)) { }
else {
$data45 = '$okno_3 = '.$okno_3.';' . "\n";//В виндовс не \n, а \r\n
$file45 = 'prais.php';
$array45=file( $file45 ); //файл в котором надо изменить строку
$array45[45]=$data45; //строка в которой нужно изменить значение $data
file_put_contents( $file45, $array45 );}

$okno_4 = htmlspecialchars($_POST['okno_4'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_4)) { }
else {
$data46 = '$okno_4 = '.$okno_4.';' . "\n";//В виндовс не \n, а \r\n
$file46 = 'prais.php';
$array46=file( $file46 ); //файл в котором надо изменить строку
$array46[46]=$data46; //строка в которой нужно изменить значение $data
file_put_contents( $file46, $array46 );}

$okno_5 = htmlspecialchars($_POST['okno_5'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_5)) { }
else {
$data47 = '$okno_5 = '.$okno_5.';' . "\n";//В виндовс не \n, а \r\n
$file47 = 'prais.php';
$array47=file( $file47 ); //файл в котором надо изменить строку
$array47[47]=$data47; //строка в которой нужно изменить значение $data
file_put_contents( $file47, $array47 );}

$okno_6 = htmlspecialchars($_POST['okno_6'], NULL, 'utf-8');
if(!preg_match("/^[0-9]{2,4}$/",$okno_6)) { }
else {
$data48 = '$okno_6 = '.$okno_6.';' . "\n";//В виндовс не \n, а \r\n
$file48 = 'prais.php';
$array48=file( $file48 ); //файл в котором надо изменить строку
$array48[48]=$data48; //строка в которой нужно изменить значение $data
file_put_contents( $file48, $array48 );}

$stoim_dver = htmlspecialchars($_POST['stoim_dver'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$stoim_dver)) { }
else {
$data49 = '$stoim_dver = '.$stoim_dver.';' . "\n";//В виндовс не \n, а \r\n
$file49 = 'prais.php';
$array49=file( $file49 ); //файл в котором надо изменить строку
$array49[49]=$data49; //строка в которой нужно изменить значение $data
file_put_contents( $file49, $array49 );}

$stoim_dver2 = htmlspecialchars($_POST['stoim_dver2'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$stoim_dver2)) { }
else {
$data50 = '$stoim_dver2 = '.$stoim_dver2.';' . "\n";//В виндовс не \n, а \r\n
$file50 = 'prais.php';
$array50=file( $file50 ); //файл в котором надо изменить строку
$array50[50]=$data50; //строка в которой нужно изменить значение $data
file_put_contents( $file50, $array50 );}

$stoim_oknogluh = htmlspecialchars($_POST['stoim_oknogluh'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$stoim_oknogluh)) { }
else {
$data51 = '$stoim_oknogluh = '.$stoim_oknogluh.';' . "\n";//В виндовс не \n, а \r\n
$file51 = 'prais.php';
$array51=file( $file51 ); //файл в котором надо изменить строку
$array51[51]=$data51; //строка в которой нужно изменить значение $data
file_put_contents( $file51, $array51 );}




$stoim_oknopovorototkid = htmlspecialchars($_POST['stoim_oknopovorototkid'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$stoim_oknopovorototkid)) { }
else {
$data52 = '$stoim_oknopovorototkid = '.$stoim_oknopovorototkid.';' . "\n";//В виндовс не \n, а \r\n
$file52 = 'prais.php';
$array52=file( $file52 ); //файл в котором надо изменить строку
$array52[52]=$data52; //строка в которой нужно изменить значение $data
file_put_contents( $file52, $array52 );}

$stoim_oknopovorot = htmlspecialchars($_POST['stoim_oknopovorot'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$stoim_oknopovorot)) { }
else {
$data53 = '$stoim_oknopovorot = '.$stoim_oknopovorot.';' . "\n";//В виндовс не \n, а \r\n
$file53 = 'prais.php';
$array53=file( $file53 ); //файл в котором надо изменить строку
$array53[53]=$data51; //строка в которой нужно изменить значение $data
file_put_contents( $file53, $array53 );}

$skidka = htmlspecialchars($_POST['skidka'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$skidka)) { }
else {
$data54 = '$skidka = '.$skidka.';' . "\n";//В виндовс не \n, а \r\n
$file54 = 'prais.php';
$array54=file( $file54 ); //файл в котором надо изменить строку
$array54[54]=$data54; //строка в которой нужно изменить значение $data
file_put_contents( $file54, $array54 );}

$podokonnik = htmlspecialchars($_POST['podokonnik'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$podokonnik)) { }
else {
$data55 = '$podokonnik = '.$podokonnik.';' . "\n";//В виндовс не \n, а \r\n
$file55 = 'prais.php';
$array55=file( $file55 ); //файл в котором надо изменить строку
$array55[55]=$data55; //строка в которой нужно изменить значение $data
file_put_contents( $file55, $array55 );}


$montazhrab = htmlspecialchars($_POST['montazhrab'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{2,5}$/",$montazhrab)) { }
else {
$data56 = '$montazhrab = '.$montazhrab.';' . "\n";//В виндовс не \n, а \r\n
$file56 = 'prais.php';
$array56=file( $file56 ); //файл в котором надо изменить строку
$array56[56]=$data56; //строка в которой нужно изменить значение $data
file_put_contents( $file56, $array56 );}

$koeffits = htmlspecialchars($_POST['koeffits'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$koeffits)) { }
else {
$data57 = '$koeffits = '.$koeffits.';' . "\n";//В виндовс не \n, а \r\n
$file57 = 'prais.php';
$array57=file( $file57 ); //файл в котором надо изменить строку
$array57[57]=$data57; //строка в которой нужно изменить значение $data
file_put_contents( $file57, $array57 );}

$vashaeconomiya = htmlspecialchars($_POST['vashaeconomiya'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$vashaeconomiya)) { }
else {
$data58 = '$vashaeconomiya = '.$vashaeconomiya.';' . "\n";//В виндовс не \n, а \r\n
$file58 = 'prais.php';
$array58=file( $file58 ); //файл в котором надо изменить строку
$array58[58]=$data58; //строка в которой нужно изменить значение $data
file_put_contents( $file58, $array58 );}

$rassrochkames = htmlspecialchars($_POST['rassrochkames'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$rassrochkames)) { }
else {
$data59 = '$rassrochkames = '.$rassrochkames.';' . "\n";//В виндовс не \n, а \r\n
$file59 = 'prais.php';
$array59=file( $file59 ); //файл в котором надо изменить строку
$array59[59]=$data59; //строка в которой нужно изменить значение $data
file_put_contents( $file59, $array59 );}


$stoim_balk = htmlspecialchars($_POST['stoim_balk'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$stoim_balk)) { }
else {
$data60 = '$stoim_balk = '.$stoim_balk.';' . "\n";//В виндовс не \n, а \r\n
$file60 = 'prais.php';
$array60=file( $file60 ); //файл в котором надо изменить строку
$array60[60]=$data60; //строка в которой нужно изменить значение $data
file_put_contents( $file60, $array60 );}

$skidka_b = htmlspecialchars($_POST['skidka_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$skidka_b)) { }
else {
$data61 = '$skidka_b = '.$skidka_b.';' . "\n";//В виндовс не \n, а \r\n
$file61 = 'prais.php';
$array61=file( $file61 ); //файл в котором надо изменить строку
$array61[61]=$data61; //строка в которой нужно изменить значение $data
file_put_contents( $file61, $array61 );}

$podokonnik_b = htmlspecialchars($_POST['podokonnik_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$podokonnik_b)) { }
else {
$data62 = '$podokonnik_b = '.$podokonnik_b.';' . "\n";//В виндовс не \n, а \r\n
$file62 = 'prais.php';
$array62=file( $file62 ); //файл в котором надо изменить строку
$array62[51]=$data62; //строка в которой нужно изменить значение $data
file_put_contents( $file62, $array62 );}

$montazhrab_b = htmlspecialchars($_POST['montazhrab_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$montazhrab_b)) { }
else {
$data63 = '$montazhrab_b = '.$montazhrab_b.';' . "\n";//В виндовс не \n, а \r\n
$file63 = 'prais.php';
$array63=file( $file63 ); //файл в котором надо изменить строку
$array63[63]=$data63; //строка в которой нужно изменить значение $data
file_put_contents( $file63, $array63 );}

$koeffits_b = htmlspecialchars($_POST['koeffits_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$koeffits_b)) { }
else {
$data64 = '$koeffits_b = '.$koeffits_b.';' . "\n";//В виндовс не \n, а \r\n
$file64 = 'prais.php';
$array64=file( $file64 ); //файл в котором надо изменить строку
$array64[64]=$data64; //строка в которой нужно изменить значение $data
file_put_contents( $file64, $array64 );}

$vashaeconomiya_b = htmlspecialchars($_POST['vashaeconomiya_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$vashaeconomiya_b)) { }
else {
$data65 = '$vashaeconomiya_b = '.$vashaeconomiya_b.';' . "\n";//В виндовс не \n, а \r\n
$file65 = 'prais.php';
$array65=file( $file65 ); //файл в котором надо изменить строку
$array65[65]=$data65; //строка в которой нужно изменить значение $data
file_put_contents( $file65, $array65 );}

$rassrochkames_b = htmlspecialchars($_POST['rassrochkames_b'], NULL, 'utf-8');
if(!preg_match("/^[0-9.]{1,5}$/",$rassrochkames_b)) { }
else {
$data66 = '$rassrochkames_b = '.$rassrochkames_b.';' . "\n";//В виндовс не \n, а \r\n
$file66 = 'prais.php';
$array66=file( $file66 ); //файл в котором надо изменить строку
$array66[66]=$data66; //строка в которой нужно изменить значение $data
file_put_contents( $file66, $array66 );}


header("Location: index.html");
?>