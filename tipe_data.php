<?php
//tipe data interger
$umur = 19;
var_dump($umur);

//float
$phi = 3.14;
var_dump($phi);

//string
$nama = 'Jihad';
var_dump($nama);

echo "<br>";
echo "Hello $nama, umur anda $umur";

//boolean
$isstudent = true;

echo "<br>";

var_dump($isstudent);

echo "<br>";
//array
$siswa = ["ucup",17,true];
echo "Hallo nama saya .$siswa[0], Umur saya adalah .$siswa[1]";
echo "<br>";

//array: asosaitif
$mahasiswa = ["nama" => "Jihad", "umur" => 17, "ipk" => 4.0];
echo "hai saya $mahasiswa[nama], saya seorang mahasiswa dengan ipk $mahasiswa[ipk]";