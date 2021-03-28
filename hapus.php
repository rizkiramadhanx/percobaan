<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM mahasiswa WHERE nim = " . $nim;
mysqli_query($mysqli, $sql);
if (mysqli_affected_rows($mysqli) > 0) 
    {
    echo "<script> alert('Berhasil menghapus data!'); document.location.href = 'index.php';</script>";
    } 
else 
    {
        echo "<script> alert('Gagal menghapus data!');document.location.href = 'index.php'; </script>";
    }
?>