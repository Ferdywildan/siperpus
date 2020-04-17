<?php
include 'koneksi.php';
$id = $_GET["id_pinjam"];
$query1 = mysqli_query($koneksi,"DELETE FROM detail_peminjaman where id_pinjam='$id'");
$query2= mysqli_query($koneksi,"DELETE FROM detail_peminjaman where id_pinjam='$id'");


if(($query1&&$query2)==1){
    echo
    "<script>
    alert('Data Berhasil di hapus');
    document.location.href ='index.php';</script>";

    
}
?>