<html>
<head>
    <title>Form Data Mahasiswa</title>
</head>
<body>
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $jurusan = $_POST["jurusan"];
  $tahun_masuk = $_POST["tahun_masuk"];
}
?>
<table border=1 bgcolor="0E46A3">
<tr>
<td colspan=2 align="center"><b>Data Mahasiswa</b></td>
</tr>
<td>Nim</td><td><?php echo $nim; ?></td>
</tr>
<td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
</tr>
<td>Jurusan</td><td><?php echo $jurusan; ?></td>
</tr>
<td>Tahun Masuk</td><td><?php echo $tahun_masuk; ?></td>
</tr>
</table>
<a href="zessy.php">INPUT DATA LAGI</a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
</form>
</center>
</body>
</html>