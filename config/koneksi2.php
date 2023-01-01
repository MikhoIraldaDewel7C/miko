<?php
$server = "localhost";
$username = "smpnkahi_user";
$password = "1208mikodewel";
$database = "smpnkahi_skrip";

$koneksi2 = mysqli_connect($server, $username, $password, $database);
mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "<h1>Koneksi database gagal : " . mysqli_connect_error() . "</h1>";
    exit();
}
