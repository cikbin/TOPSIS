<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "spk_bus";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "belum tersambung ke database";
} else {
  //echo "Sudah Konek";
}
 ?>
