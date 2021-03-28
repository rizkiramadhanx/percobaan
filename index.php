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
        <h2>
            <left>DAFTAR MAHASISWA TEKNIK INFORMATIKA</left>
        </h2>
        <br />
             <a href="form_input.html"> + TAMBAH MAHASISWA</a>
        <br />
        <br />
         <table border="1" >
        <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JENIS KELAMIN</th>
        <th>AKSI</th>
        </tr>
        
        <?php
        include 'koneksi.php';
        $query = "select * from mahasiswa";
        $data = mysqli_query($mysqli, $query);
        while ($d = mysqli_fetch_array($data)) {
        ?>
       <tr>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td>
        <a href="form_edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
         <a href="hapus.php?nim=<?php echo $d['nim']; ?>"
        onclick="return confirm('Hapus data?')">HAPUS</a>
      </td>
         </tr>
         <?php
         } 
        ?>
        </table>
    </div>     
 <div class="kosong"></div>
 <div class="footer">
<p> kopiright 2020</p>
 </div>
    
</body>
</html>