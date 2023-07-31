<?php

/*

seesion : variabel yang disimpan di dalam server , dapat dipanggil dari file manapun yang ada di dalam server yang sama

*/

// Memulai Session
session_start();

// Membuat Session
$_SESSION['negara'] = "Indonesia";
$_SESSION['ibu_kota'] = "Jakarta";

echo $_SESSION['negara'];

echo "<br/>";

echo $_SESSION['ibu_kota'];
