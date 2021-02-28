<?php 

$koneksi = mysqli_connect(
    "db4free.net",
    "nhisx_skirpsi@localhost",
    "bagus246" ,
    "elok_cookies");

    // Check connection
    if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
