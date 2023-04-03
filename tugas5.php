<?php

$data1 = [
    ['nama' => 'Encep Rahman Armana', 'nim' => 'D112121053'],
    ['nama' => 'Hanifa NurAisyah', 'nim' => 'D112121056'],
    ['nama' => 'Santi Susanti', 'nim' => 'D112121058'],
];
$data2 = [
    ['nama' => 'Encep Rahman Armana', 'nim' => 'D112121053'],
    ['nama' => 'Hanifa NurAisyah', 'nim' => 'D112121056'],
    ['nama' => 'Santi Susanti', 'nim' => 'D112121058'],
];

$namadec = array_column($data1, 'nama');
array_multisort($namadec, SORT_DESC, $data1);

$nimdec = array_column($data2, 'nim');
array_multisort($nimdec, SORT_DESC, $data2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa Baru</title>
</head>
<body>
    <h3>Daftar Mahasiswa Baru</h3>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data1 as $row): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Daftar Mahasiswa Baru</h3>
    <table border="1" cellspacing="0" cellpadding="3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data2 as $row): 
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>