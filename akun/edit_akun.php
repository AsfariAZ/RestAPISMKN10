<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $IdAkun = $_POST['id_akun'];
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

$sql = "UPDATE akun 
    SET
        nama = '$Nama',
        email = '$Email',
        password = '$Password'
    WHERE id_akun = '$IdAkun'";

    require_once('../koneksi.php');

if(mysqli_query($con,$sql)){
    echo 'Berhasil Mengedit Akun';
} else {
    echo 'Gagal Mengedit Akun';
 }
 mysqli_close($con);
}
?>