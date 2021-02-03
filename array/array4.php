<?php 
//array assosiative = keynya kita buat string sendiri
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

// echo $mahasiswa[0]["nama"];
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
    <?php foreach($mahasiswa as $m):?>
        <ul>
            <li>Nama : <?= $m["nama"];?></li>
            <li>Jurusan : <?= $m["jurusan"];?></li>
            <li>Dom : <?= $m["domisili"];?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>