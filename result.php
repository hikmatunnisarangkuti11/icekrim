<?php
require 'functions.php';
$toko = query("SELECT * FROM jajanan");

// if(isset($_POST["cari"])){
//     $valorant= cari($_POST["keyword"]);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background:url(img/layered-peaks-haikei.svg)no-repeat;
            background-size:cover;
            color:white;
        }
        td a{
            text-decoration:none;
        }
        a{
            color:white;
            text-decoration:none;
        }
        table{
            margin-top:30px;
            background-color:black;
        }
        h1{
            text-align:center;
        }
        tr th, tr td{
            text-align:center;
            color:white;
        }
        

    </style>
</head>
<body>
    <h1>Daftar Beli Jajanan</h1>
    <div class="d-flex justify-content-center">
    <!-- <button type="submit" class="btn btn-primary"><a href="beli.php">Beli Lagi?</a></button></div>
    <div class="d-flex justify-content-center"> -->
    <button type="submit" class="btn btn-primary" style="margin-top:10px;"><a href="index.php">Kembali</a></button></div>
    <br>
    <div class="d-flex justify-content-center">
    <!-- <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="Cari Nama Mu..." autocomplate="off">
        <button type="submit" name="cari">Cari</button>
    </form> -->
    </div>
    <div class="d-flex justify-content-center">
<table class="table table-bordered border-primary" style="width:1000px ">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>almond</th>
                <th>chocolate</th>
                <th>cornetto</th>
                <th>chocolate2</th>
                <th>strawberry</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($toko as $valo) { ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $valo["name"] ?></td>
                    <td><?= $valo["almond"] ?></td>
                    <td><?= $valo["chocolate"] ?></td>
                    <td><?= $valo["cornetto"] ?></td>
                    <td><?= $valo["chocolate2"] ?></td>
                    <td><?= $valo["strawberry"] ?></td>
                    <td>
                    <a class="btn btn-primary" href="ubah.php?id= <?= $valo["id"] ?>" role="button">Ubah</a> |
                    <a class="btn btn-primary" href="hapus.php?id= <?= $valo["id"] ?>" role="button" onclick="return confirm('Yakin?');">Hapus</a>
                </td>

                </tr>
                <?php $i++ ?>
           <?php } ?>
        </tbody>
    </table>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>