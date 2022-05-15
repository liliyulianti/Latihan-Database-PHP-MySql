<?php

require_once('connection.php');


$id = $_GET['id'];

$sqlQuery = "SELECT * FROM mahasiswa WHERE id='$id'";  ;
$result = $conn->query($sqlQuery);

if ($result->num_rows == 0) {
    echo 'Tidak ada data yang ditemukan';
} else {
    $row = $result->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
    
<h1>Form Edit</h1>
<form action="update.php?ID=<?php echo $row['id']?>" method="post">
    <p>NIM :</p>
    <input type="text" name="nim" value="<?php echo $row['nim'];?>"> 
    <br>
    <p>Nama Lengkap : </p>
    <input type="text" name="nama" value= "<?php echo $row['nama'];?>">
    <br>
    <p>Jenis Kelamin</p>
    <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki" <?php echo $row ['jenis_kelamin'] == 'Laki-laki' ? 'checked' : ''; ?>>
    <label for="male">Laki-laki</label>
    <input type="radio" id="female" name="jenis_kelamin" value="Perempuan" <?php echo $row ['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ; ?>> 
    <label for="female">Perempuan</label>
    <br>
    <p>Tempat Lahir</p>
    <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'];?>">
    <br>
    <p>Tanggal Lahir</p>
    <input type= "date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'];?>">
    <br>
    <p>Alamat</p>
    <textarea name="alamat" cols="30" rows="4"><?php echo $row['alamat'];?>   
    </textarea>
    <br>
    <input type="submit" value="Simpan">

</form>

</body>
</html>

<?php
}
?>