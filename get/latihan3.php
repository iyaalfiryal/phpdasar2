<?php 
//isset = ngecek variable udah dibikin atau blm
//cek apakah tidak ada data di $_GET
//ketika blm dibikin maka akan dipaksa piondah ke halamn 2
if( !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["domisili"])    
    ){
        //redirect = memindahkan ke hlaman lain
        header("Location: latihan2.php");
        exit;
}

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
        <li><?= $_GET["nama"]?> </li>
        <li><?= $_GET["jurusan"]?></li>
        <li><?= $_GET["domisili"]?></li>
    <ul>

    <a href="latihan2.php">back</a>
</body>
</html>