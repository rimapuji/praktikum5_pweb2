<?php 
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $sql = 'INSERT INTO input (nim, nama, alamat) ';
    $sql .= "VALUE ('{$nim}', '{$nama}','{$alamat}')";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="main">
            <h1>Tambah Data Mahasiswa</h1>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <div class="input">
                    <label>NIM</label>
                    <input type="text" name="nim" value="<?php echo $data['nim']; ?>" />
                </div>
                <div class="input">
                    <label>NAMA</label>
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" />
                </div>
                <div class="input">
                    <label>ALAMAT</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" />
                </div>
                <br>
                <div class="submit">
                    <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>" />
                    <input type="submit" name="submit" value="Simpan" />
                </div>
            </form>
        </div>
</body>
</html>