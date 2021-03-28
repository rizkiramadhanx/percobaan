<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$sql = "UPDATE mahasiswa SET nama = '$nama', jenis_kelamin = '$jenis_kelamin' WHERE nim = $nim";
$data = mysqli_query($mysqli, $sql);
if (mysqli_affected_rows($mysqli) > 0) {
echo "<script> alert('Berhasil mengupdate data!');
document.location.href = 'index.php';
</script>";
} else {
echo "Error: Gagal update data. " . mysqli_error($mysqli);
echo "<br><a href=index.php>KEMBALI</a>";
}

?> 