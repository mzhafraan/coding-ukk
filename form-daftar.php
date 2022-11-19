<!DOCTYPE html>
<html>

<head>
    <title>Menu Pendaftaran Siswa SMK Telkom</title>
    <style>
        .inputnama {
            margin-left: 30%;

        }

        .inputkelas {
            margin-left: 30.2%;
        }

        .inputjurusan {
            margin-left: 28.3%;
        }

        fieldset {
            margin: auto;
            margin-left: 30%;
            margin-right: 30%;
        }
    </style>
</head>

<body>
    <fieldset>
        <header>

            <center>
                <h2>Form Pendaftaran Siswa</h2>
            </center>
        </header>

        <form action="proses-pendaftaran.php" method="POST">



            <p>
                <label align=center for="nama">Nama: </label>
                <input class="inputnama" type="text" name="nama"></input>
            </p>

            <p>
                <label for="kelas" name="kelas">Kelas: </label>
                <select class="inputkelas" name="kelas">
                    <option>X RPL 1</option>
                    <option>X TKJ</option>
                    <option>XI RPL</option>
                    <option>XI TKJ</option>
                    <option>XI TJA</option>
                </select>
            </p>

            <p>
                <label for="jurusan">Jurusan: </label>
                <select class="inputjurusan" name="jurusan">
                    <option value="">>--Pilih Jurusan--< </option>
                    <option>SINTEK</option>
                    <option>SOSHUM</option>
                </select>
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>




        </form>
        <a href="index.php"><button>Balik ke depan</button></a>
    </fieldset>
</body>

</html>