<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="DataRegistrasi.php" method="post">
  <h2>Form Registrasi</h2>
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" required><br>
  <label for="alamat">Alamat:</label><br>
  <textarea rows="3" cols="35" name="alamat"> </textarea><br>
  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>
  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>
  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" required>
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br>
  <label for="pekerjaan">Pekerjaan:</label><br>
  <select name="pekerjaan">
    <option value="Pelajar">Pelajar
    <option value="Karyawan">Karyawan
    <option value="Wirausaha">Wirausaha
    <option value="Lain-lain">Lain-lain
</select>
<br>
<p>
  <input type="submit" value="Submit">
  <input type="reset" value="Cancel">
</form>
</center>
</body>
</html>