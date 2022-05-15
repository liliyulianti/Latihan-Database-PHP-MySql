<?php

require_once('./connection.php');

$sqlQuery = "SELECT * FROM mahasiswa";
$result = $conn->query($sqlQuery);

//if ($result->num_rows > 0 ) {
  //  while ($row = $result->fetch_assoc()) {
  //      echo "ID: " . $row['id'] . ', NIM: ' . $row['nim'] . ', Nama: ' . $row['nama'] .', Jenis Kelamin: ' . $row['jenis_kelamin'] . ', Tempat Lahir: ' . $row['tempat_lahir'] . ', Tanggal Lahir: ' . $row['tanggal_lahir'] . ', Alamat: ' . $row['alamat'] . '<br>';
    //}
//} else {
  //  echo "Tidak ada data";
//}
if ($result->num_rows > 0) {


?>

<h1>List Data</h1>

<a href="form_insert.php">Tambah Data</a>

<table border="1">
<tr>
    <th>#ID</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
  while ($row = $result->fetch_assoc()) {
?>

<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['nim']?></</td>
    <td><?php echo $row['nama']?></</td>
    <td><?php echo $row['jenis_kelamin']?></</td>
    <td><?php echo $row['tempat_lahir']?></</td>
    <td><?php echo $row['tanggal_lahir']?></</td>
    <td><?php echo $row['alamat']?></</td>
    <td>
      <a href="form_edit.php?id=<?php echo $row['id'];?>">Edit</a>
      |
      <a href="delete.php?id=<?php echo $row['id'];?>">Hapus</a>
    
    </td>

</tr>
<?php
  }
?>
</table>

<?php
} else {
echo "Tidak ada data";
}

?>

