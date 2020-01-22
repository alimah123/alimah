<?php
include('connection.php');
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$umur=$_POST['umur'];
$jenis_kelamin=['jenis_kelamin'];
$jabatan=['jabatan'];
$insert=mysqli_query($connect,"UPDATE INTO karyawan SET nama='$nama',alamat='$alamat',umur='$umur',jenis_kelamin='$jenis_kelamin',jabatan='jabatan'WHERE id='$id'");
if($insert)
header('location:list.php');
else
echo'update data gagal';
?>