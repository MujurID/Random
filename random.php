<?php
//=========RANDOM ACAK==========
$panjang= '10'; //panjang karakter yang akan dibuat
$data = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; //data yang akan diacak
$hasil0 = ''; //jangan lupa ini kosong eaa
for($l = 0; $l<$panjang; $l++){
    $hasil0 .= substr(str_shuffle($data),-1);
}
$hasil1 = $hasi0;
echo $hasil1; //hasil akhirnya




//=======RANDOM DENGAN JUMLAH DIGITS + 0
$min = 1;
$max = 200;
$digits = strlen($max);
$hasil2 = str_pad(rand($min, $max), $digits, '0', STR_PAD_LEFT);
echo $hasil2;





//gw noob
