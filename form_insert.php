<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form insert data</title>
</head>
<body>
<h1>Form Insert</h1>
<form action="insert.php" method="post">
    <p>NIM :</p>
    <input type="text" name="nim"> 
    <br>
    <p>Nama Lengkap : </p>
    <input type="text" name="nama">
    <br>
    <p>Jenis Kelamin</p>
    <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki">
    <label for="male">Laki-laki</label>
    <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
    <label for="female">Perempuan</label>
    <br>
    <p>Tempat Lahir</p>
    <input type="text" name="tempat_lahir">
    <br>
    <p>Tanggal Lahir</p>
    <input type="date" name="tanggal_lahir">
    <br>
    <p>Alamat</p>
    <textarea name="alamat" cols="30" rows="4"></textarea>
    <br>
    <input type="submit" value="Simpan">

</form>


</body>
</html>