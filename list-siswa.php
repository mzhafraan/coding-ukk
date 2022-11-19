<?php include "config.php" ?>

<!DOCTYPE html>
<html>

<head>
    <title>List Siswa SMK Telkom</title>
    <style>
        fieldset {
            border-width: 10px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <h3>DAFTAR SISWA SMK TELKOM LAMPUNG</h3>
        </center>
    </header>
    <fieldset>
        <nav>
            <a href="form-daftar.php">[+] Daftar Baru</a>

        </nav>

        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM siswaukk1";
                $query = mysqli_query($db, "select * from siswaukk1");

                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $siswa['id'] . "</td>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['kelas'] . "</td>";
                    echo "<td>" . $siswa['jurusan'] . "</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
        <br><a href="index.php">Back To Menu</a>

    </fieldset>
</body>