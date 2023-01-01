<?php
$server = "localhost";
$username = "smpnkahi_skrip";
$password = "12081998bcchandra";
$database = "smpnkahi_skrip";

$koneksi2 = mysqli_connect($server, $username, $password, $database);
mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "<h1>Koneksi database gagal : " . mysqli_connect_error() . "</h1>";
    exit();
}
