<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $IdAkun = $_POST['id_akun'];
    $nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

$sql = "INSERT INTO akun (id_akun,nama,email,password) VALUES 
('$IdAkun','$Nama','$Email','$Password')";

    require_once('../koneksi.php');

if(mysqli_query($con,$sql)){
    echo 'Berhasil Menambahkan Akun';
} else {
    echo 'Gagal Menambahkan Akun';
 }
 mysqli_close($con);
}
?>