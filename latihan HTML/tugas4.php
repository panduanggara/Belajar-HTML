<?php
// 1. membuat array berisi nama-nama buah
$buah = ["anggur","mangga","jeruk","semangka"];

// 2. membuat 5 variabel
$nama = "Pandu Anggara Putra"; // string
$umur = 17; // integer
$tinggi = 162; //float
$sudahsarapan = true; //boolean
$hobi = ["membaca","coding","makan"]; //array

// mencetak variabel
echo "==Biodata==";
echo "<br>";
echo "Nama : $nama<br>";
echo "Umur : $umur tahun<br>";
echo "Tinggi : $tinggi cm<br>";
echo "sudah sarapan: " .($sudahsarapan ? "Sudah" : "Belum"). "<br><br>";

echo "Hobi : <br>";
foreach ($hobi as $h) {
    echo "- $h<br>";
}

// mencetak array
echo "<br>Daftar Buah :<br>";
foreach ($buah as $h) {
    echo "- $h<br>";
}
?>