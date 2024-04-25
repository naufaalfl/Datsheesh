<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="link.css" rel="stylesheet"></link>
</head>
<body>
<div class= container>
    <h2>ini data siswa</h2>
    <form action="" method="post">
    <?php

    session_start();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo'</tr>';

        foreach($_SESSION['dataSiswa'] as $index => $value){
            echo '<tr>';
            echo '<td>'. $value['nama'] .'</td>';
            echo '<td>'. $value['nis'] .'</td>';
            echo '<td>'. $value['rayon'] .'</td>';
            // echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
            echo '</tr>';
    }
        echo '<table/>';
    ?>
    <button type= "submit" value="cetak" class="soni"><a href= 'form.php'>KEMBALI!</a></button>
</div>

</body>
</html>