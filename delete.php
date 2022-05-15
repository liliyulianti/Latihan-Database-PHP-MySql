<?php

require_once('./connection.php');

$id = $_GET['id'];
echo 'ID : ' . $id;

$sqlQuery = "DELETE FROM mahasiswa WHERE id='$id'";


if ($conn->query($sqlQuery) === true) {
echo "Data berhasil di hapus";
} else {
echo "Data gagal dihapus";
}

?>

<br>

<a href="data.php">Kembali ke list data</a>