<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="panggilzessy.php" method="post">
  <h2>Form Input Data Mahasiswa</h2>
  <label for="nim">Nim:</label><br>
  <input type="text" id="nim" name="nim" required><br>
  <label for="Nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" required><br>
  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br>
  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="Text" id="tempat_lahir" name="tempat_lahir" required><br>
  <label for="jurusan">Jurusan:</label><br>
  <select name="jurusan">
    <option value="Sistem Informasi">Sistem Informasi
    <option value="Manajemen">Manajemen
</select>
<br>
  <label for="tahun_masuk">Tahun Masuk:</label><br>
  <select name="tahun_masuk">
    <option value="2020">2020
    <option value="2021">2021
    <option value="2022">2022
    <option value="2023">2023
    <option value="2024">2024
</select>
<br>
<p>
  <input type="submit" value="Submit">
</form>
</center>
</body>
</html>