<?php

include_once("config.php");

if(isset($_POST['tambah_krs'])){
    $kode = $_POST['kodematkul'];
    $matkul = $_POST['namamatkul'];
    $kelas = $_POST['kelas'];
    $sks = $_POST['sks'];
    $jadwal = $_POST['jadwal'];

    $result = mysqli_query($con, "INSERT INTO krs(kode_matkul, nama_matkul, kelas, sks, waktu) VALUES ('$kode', '$matkul', '$kelas', '$sks', '$jadwal')");
}

header('Location:../pages/KRS.php');

?>