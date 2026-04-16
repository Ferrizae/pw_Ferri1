<?php
$nama="Andi";
$umur=20;
$tinggi=165.5;
$menikah=true;
$hoby=["membaca","berenang","bermain gitar"];

echo "nama saya $nama, umur saya $umur, tinggi saya $tinggi cm, status saya $menikah";
echo "<br><br>==========================<br><br>";

//OPERATOR
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5;

echo "hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5 adalah $hasil";

echo "<br><br>==========================<br><br>";
//PERCABANGAN
 $nilai = 70;

 if($nilai >= 85){
    echo "Grade A";
 } else if($nilai >= 70){
    echo "Grade B";
 } else if($nilai >= 50){
    echo "Grade C";
 } else if($nilai >= 30){
    echo "Grade D";
 } else {
    echo "Grade E";
 }

 echo "<br><br>==========================<br><br>";
 //PERCABANGAN GANJIL GENAP
 $nilai1 = 5;
 $nilai2 = 8;
 $nilai3 = 10;
 $nilai4 = 20;
 $nilai5 = 13;
 
 $hasil = $nilai1 + $nilai2 - $nilai3  * $nilai4 /$nilai5;

 echo "hasil: $hasil <br>";
 $bulat = (int) $hasil;
 if ($bulat % 2 == 0) {
   echo "genap";
 }else{
   echo "ganjil";
 }
?>