<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="form.css" rel="stylesheet"></link>
</head>
<body>
    <div class= container>
        <h2>Masukan Data Siswa</h2>
    <form action="" method="post">
            <label><b>Nama</b></label><br>
            <input type="text" id="nama" name="nama" required><br>
            <label><b>Nis</b></label><br>
            <input type="number" id="nis" name="nis" required><br>
            <label><b>Rayon</b></label><br>
            <input type="text" id="nama" name="rayon" required><br>
            <button type= "submit" value="kirim" class="soni"><b>Kirim</b></button>
            <button type= "submit" value="cetak" class="sons"><a href= 'link.php'>cetak</a></button>
            <button type= "submit" value="cetak" class="soi"><a href= 'link.php'><a href = distroy.php>hapus data</a></button>
    </form>

    <?php

    session_start();


    if(!isset($_SESSION['dataSiswa'])) {
        $_SESSION['dataSiswa']= array();
    }if(isset($_POST['nama']) && isset($_POST['nis']) && isset($_POST['rayon'])){
        $data = array(
            'nama' => $_POST['nama'],
            'nis' => $_POST['nis'],
            'rayon' => $_POST['rayon']
        );
        array_push($_SESSION['dataSiswa'], $data);
    }if(isset($_GET['hapus'])) {
        $index = $_GET['hapus'];
        unset($_SESSION['dataSiswa'][$index]);
        header('Location: http://localhost/Datsheesh/form.php');
        exit;
    }

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo '<th>Action</th>';
    echo'</tr>';
   



    foreach($_SESSION['dataSiswa'] as $index => $value){
        echo '<tr>';
        echo '<td>'. $value['nama'] .'</td>';
        echo '<td>'. $value['nis'] .'</td>';
        echo '<td>'. $value['rayon'] .'</td>';
        echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
        echo '</tr>';
    }
        echo '<table/>';


?>
</div>
</body>
</html>