<?php
$koneksi = mysqli_connect("localhost","root","","katalog_buku2");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_error());
}
?>
