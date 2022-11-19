<?php

$data = $_GET['id'];

//gunakan fungsi di bawah ini agar session bisa dibuat
session_start();
include "config.php";
//koneksi ke database latihan
$db = mysqli_connect($server, $user, $password, $nama_database);

//hapus data dari tabel kontak
$delete = mysqli_query($db, "delete from siswaukk1 where id=" . $data);

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

//redirect ke halaman index.php
header('Location: index.php'); 