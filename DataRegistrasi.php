<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $pekerjaan = $_POST["pekerjaan"];

  echo "Nama: $nama<br>";
  echo "Alamat: $alamat<br>";
  echo "Tempat Lahir: $tempat_lahir<br>";
  echo "Tanggal Lahir: $tanggal_lahir<br>";
  echo "Jenis Kelamin: $jenis_kelamin<br>";
  echo "Pekerjaan: $pekerjaan<br>";
}
?>
</center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
</form>