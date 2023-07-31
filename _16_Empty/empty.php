<?php

// empty digunakan untuk mengecek apakah variabel memiliki nilai atau tidak
// jika variabel tidak memiliki nilai, maka bernilai true

$buah = "Apel";
$minuman = "Teh";
$kendaraan;

echo "Hasil Variable buah : " . empty($buah);

echo "<br/>";

echo "Hasil Variable kendaraan : " . empty($kendaraan);

echo "<br/>";

echo "Hasil Variable minuman : " . !empty($minuman);

