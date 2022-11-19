<?php

include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswaukk1 (nama, kelas, jurusan) VALUE ('$nama', '$kelas', '$jurusan')";
    $query = mysqli_query($db, $sql);


    if ($query) {
        header('Location: index.php?status=sukses');

    } else {
        header('Location: index.php?status=gagal');
    }



}
?>