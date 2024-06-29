<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "tik2032_db";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";
$conn = mysqli_connect($server, $user, $pass, $database, 3306, $socket);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>