<?php
require 'koneksi.php';

$aa = query ("SELECT * FROM organigram");

?>

<!DOCTYPE html>
<htmmmml lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.....</title>
</head>
<body>


<h3> DATA SISWA <h3>
    <table border="1">
    <thead>
        <th>NO</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>Status</th>

    <?php $i = 1?>
    <?php foreach ($aa as $bb) :?>
    </thead>
    <tbody>
        <tr>
            <td><?= $i;?></td>
            
            <td><?php echo $bb ['nisn'];?></td>
            <td><?php echo $bb ['nama'];?></td>
            <td><?php echo $bb ['status'];?></td>
    </tr>
    <?php $i++?>
    <?php endforeach; ?>

    </tbody>
    </table>
    </body>
    </html>