<?php
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$type = $_POST['type'];
$cekuser = mysql_query("SELECT * FROM user_tbl WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!<br/>";
echo "<a href='daftar.php'>&amp;amp;laquo; Back</a>";
} else {
if(!$username || !$pass) {
echo "Masih ada data yang kosong!<br/>";
echo "<a href='daftar.php'>&amp;amp;laquo; Back</a>";
} else {
$simpan = mysql_query("INSERT INTO user_tbl(username, password, type) VALUES('$username','$pass','$type')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?>