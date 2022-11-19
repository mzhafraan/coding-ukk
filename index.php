<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK STELLA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .mx-auto {
            height: 185px;
            width: 500px;
            margin: 0px auto;
            margin-top: 300px;
        }

        .text-area {
            margin-top: 50px;
            color: cornsilk;
            font-family: 'Montserrat', sans-serif;
        }

        .overlay {
            background-image: url(img/gambar.jpg);
            padding: 100;
            margin: 100;
            background-size: cover;

        }

        fieldset {
            height: 250px;
            background-color: lightcoral;
            border-color: lightcoral;
            border-radius: 15px;
            box-shadow: 8px 8px 10px black;
        }

        .text-link {
            color: aliceblue;
        }

        .text-link2 {
            color: aliceblue;
            margin-left: 50px;
        }
    </style>

</head>

<body class="overlay">

    <div class="mx-auto">
        <fieldset>
            <center>
                <div class="text-area">
                    <h2>Web Pendaftaran Siswa</h2>
                    <h3>SMK Telkom Lampung</h3>
                    <p>Menu</p>
                    <a class="text-link" href="form-daftar.php"><button type="button" class="btn btn-light">Daftar
                            Baru</button></a>
                    <a class="text-link2" href="list-siswa.php"><button type="button" class="btn btn-light">Daftar
                            Siswa</button></a>

                </div>
            </center>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>