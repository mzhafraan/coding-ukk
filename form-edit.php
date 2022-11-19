<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswaukk1 WHERE id=$id";
$query = mysqli_query($db, "select * from siswaukk1");
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <style>
        .input-text {
            margin-left: 30%;
        }

        .input-jurusan {
            margin-left: 28.5%;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input class="input-text" type="text" name="nama" placeholder="nama lengkap"
                    value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="kelas">Kelas: </label>
                <?php $kelas = $siswa['kelas']; ?>
                <select class="input-text" name="kelas">
                    <option <?php echo ($kelas == 'Xrpl1') ? "selected" : "" ?>>X RPL 1</option>
                    <option <?php echo ($kelas == 'Xtkj') ? "selected" : "" ?>>X TKJ</option>
                    <option <?php echo ($kelas == 'XIrpl') ? "selected" : "" ?>>XI RPL</option>
                    <option <?php echo ($kelas == 'XItkj') ? "selected" : "" ?>>XI TKJ</option>
                    <option <?php echo ($kelas == 'XItja') ? "selected" : "" ?>>XI TJA</option>

                </select>
            </p>
            <label for="jurusan">Jurusan: </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select class="input-jurusan" name="jurusan">
                <option <?php echo ($jurusan == 'Sintek') ? "selected" : "" ?>>SINTEK</option>
                <option <?php echo ($jurusan == 'Soshum') ? "selected" : "" ?>>SOSHUM</option>


            </select>

            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

            </div>
        </fieldset>


    </form>

</body>

</html>