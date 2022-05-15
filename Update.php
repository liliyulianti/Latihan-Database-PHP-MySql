<?php


require_once('./connection.php');
$ID = $_GET['ID'];


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jenis_kelamin'];
$tanggallahir = $_POST['tanggal_lahir'];
$tempatlahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];

echo $nim . '<br>';
echo $nama . '<br>';
echo $jeniskelamin . '<br>';
echo $tanggallahir . '<br>';
echo $tempatlahir . '<br>';
echo $alamat . '<br>';

$sqlQuery = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jeniskelamin', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir',  alamat='$alamat' WHERE id='$ID'";

if ($conn->query($sqlQuery) === true) {
  echo "Data berhasil diperbarui";
} else {
  echo "Data gagal diperbarui";
}

?>

<br>

<a href="data.php">Kembali ke List Data</a>