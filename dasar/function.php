<?php
//function = sekumpulan intruksi yang dibungkus dalam sebuah blok

function biodata(){
    echo "firyal<br>";
    echo "X Web<br>";
    echo "19, Juni 2002<br>";
}

biodata();
biodata();
echo "<p>";

//date
//menampilkan tanggal dengan format tertentu
/*
l = nama hari lengkap = wednesday
D = nama hari singkat = wed
d = tanggal = 19
m = bulan(angka) = 06
M = bulan(text singkat) = Jun
F = bulan(text)= Juni
y = tahun(singkt) = 21
Y = tahun = 2021
*/
date_default_timezone_set("Asia/jakarta");
echo date("H:i:s");
echo "<p>";


//time
//detik yg sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";


echo date("l, d M Y", time()+60*60*24*1000);
echo "<p>";

//strtotime = string ke waktu
echo date("l", strtotime("19 June 2002"));

?>