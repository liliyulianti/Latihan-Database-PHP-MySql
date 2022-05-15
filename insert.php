<?php

require_once('./connection.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jeniskelamin= $_POST['jenis_kelamin'];
$tempatlahir= $_POST['tempat_lahir'];
$tanggallahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

echo $nim . '<br>';
echo $nama . '<br>';
echo $jeniskelamin . '<br>';
echo $tempatlahir . '<br>';
echo $tanggallahir . '<br>';
echo $alamat . '<br>';

$sqlQuery = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) VALUES ('$nim', '$nama', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$alamat')";

if ($conn->query($sqlQuery) === true ) {
echo "Data berhasil disimpan";
} else {
echo "Data gagal disimpan";
}



?>

<br>

<a href="data.php">Kembali ke list data</a>