<?php 
//array biasa
$mahasiswa = ["firyal", "Teknik Informatika", "fifihuwaida@gmail.com"];

echo $mahasiswa[0];

//array di dalam array
$mahasiswi = [
    ["firyal", "Teknik Informatika", "fifihuwaida@gmail.com"],
    ["haura", "Teknik Informatika", "haura@gmail.com"],
    ["ica", "Teknik Informatika", "ica@gmail.com"],
];

echo $mahasiswi[2][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan list</title>
</head>
<body>
    <h1>Mahasiswa</h1>
    <ul>
        <li><?php echo $mahasiswa[0] ?></li>
        <li><?php echo $mahasiswa[1] ?></li>
        <li><?php echo $mahasiswa[2] ?></li>
    </ul>

    <ul>
        <?php foreach($mahasiswa as $m):?>
        <li> <?= $m?></li>
        <?php endforeach; ?>
    </ul>

    <!-- mencetak array di dalam array menggunakan foreach -->
    <ul>
        <?php foreach($mahasiswi as $mhs):  echo"<br>";?>
            <?php foreach($mhs as $m): ?>
                <li> <?= $m;?> </li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>