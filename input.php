<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];

$sql = "INSERT INTO mahasiswa (nim, nama, jenis_kelamin) VALUES ('$nim', '$nama',
'$jenis_kelamin')";

if (mysqli_query($mysqli, $sql)) {
 header('location: index.php');
} else {
echo "Error: " . mysqli_error($mysqli);
 }

?> 