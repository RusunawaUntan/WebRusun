<?php 
$warga = [
    [
    "nama" => "Rizqy",
    "nim" => "h102",
    "ttd" => "231001",
    "lama" => "3"
    ],
    [
    "nama" => "Rizqy norwahid",
    "nim" => "h105",
    "ttd" => "231002",
    "lama" => "5"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <table border="1">
    <h2>data penghuni</h2>
    <tr>
        <th>1</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Tanggal lahir</th>
        <th>Lama</th>
        <th>aksi</th>
    </tr>
   
    <tr>
   
        <?php foreach ($warga as $wrg) : ?>
        <td>1</td>
        <td><?= $wrg["nama"]?></td>
        <td><?= $wrg["nim"]?></td>
        <td><?= $wrg["ttd"]?></td>
        <td><?= $wrg["lama"]?></td>
        <td><a href="updatePenghuni.php?nim=<?=$wrg["nim"]?>">ubah</a> | <a href="">hapus</a></td>

    </tr>
    <?php endforeach; ?>
    </table>
    
    </div>
    
</body>
</html>