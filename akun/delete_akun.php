<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $IdAkun = $_POST['id_akun'];
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

$sql = "DELETE FROM akun WHERE id_akun = '$IdAkun'";

    require_once('../koneksi.php');

if(mysqli_query($con,$sql)){
    echo 'Berhasil Mendelete Akun';
} else {
    echo 'Gagal Mendelete Akun';
 }
 mysqli_close($con);
}
?>