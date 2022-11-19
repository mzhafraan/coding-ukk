<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "latihan_ukk2";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("watashi gagal terhubung dengan database: " . mysqli_connect_error());
}

?>