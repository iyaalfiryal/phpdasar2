<?php
//superglobal variable
// var_dump($_SERVER);

//$_GET
// $_GET["nama"] = "firyal";
// var_dump($_GET);
$mahasiswa=[
    ["jurusan" => "RPL",
    "nama" => "firyal", 
    "domisili" => "bandung"],

    ["nama" => "haura", 
    "jurusan" => "RPL",
    "domisili" => "bekasi"],

    ["domisili" => "bekasi",
    "nama" => "ica", 
    "jurusan" => "RPL"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $m):?>
            <li>
            <!-- ngirim data  -->
                <a href="latihan3.php?nama=<?= $m["nama"] ?>
                   &jurusan=<?= $m["jurusan"]?>
                &domisili=<?= $m["domisili"]?>">
                <?= $m["nama"];?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>