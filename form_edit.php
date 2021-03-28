<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
 <div class="headers">
   <img class="logo" src="logo.png"> <p class="namaweb">UNIVERSITAS MUHAMMADIYAH PURWOKERTO</p>
 </div>
 <div class="navigation">
    <p><div style="font-size: 25px; padding-left: 20px;" >Navigation :</div>
        <ul style="font-size: 17px;">
            <li><a href="http://ump.ac.id/">UMP</a></li>
            <li><a href="http://fts.ump.ac.id/">Fakultas Teknik dan Sains</a></li>
            <li><a href="https://informatika.ump.ac.id/index.php/homepage">Teknik Informatika</a></li>
            <li>Instagram</li>
        </ul>
        <div style="font-size: 25px; padding-left: 20px;">Menu Contens :</div>
        <ul style="font-size: 17px;"> 
            <li><a href="biodata.html">Biodata</a></li>
            <li><a href="artikel.html">Artikel</a></li>
            <li><a href="form.html">Form</a></li>
            <li><a href="index.php">Data Mahasiswa</a></li>
        </ul>
    </p>
 </div>
 <div class="contens">
 <h2>EDIT DATA MAHASISWA</h2>
 <br /> 
 <a href="index.php">KEMBALI</a>
<br />
<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa WHERE nim = " . $_GET['nim'];
$data = mysqli_query($mysqli, $sql);
$d = mysqli_fetch_assoc($data);
?>
<form method="post" action="update.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
</td>
</tr>
<tr>
<td>JENIS KELAMIN</td>
<td>
<input type="radio" name="jk" value="L" <?php if ($d['jenis_kelamin'] == 'L') { echo 'checked'; } ?> />Laki-laki
<input type="radio" name="jk" value="P" <?php if ($d['jenis_kelamin'] == 'P') { echo 'checked'; } ?> />Perempuan
 </td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form> 
    </div>     
 <div class="kosong"></div>
 <div class="footer">
<p> kopiright 2020</p>
 </div>
    
</body>
</html>