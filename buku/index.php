<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'koneksi.php';

$sql = ("SELECT * FROM buku ORDER BY judul");

$res = mysqli_query($koneksi, $sql);

$book = array();

while ($data = mysqli_fetch_assoc($res)) {
    $book[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>    
    </div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"> <i class="fas fa-book"></i> Daftar Buku</h2>
  </div>
  <div class="card-body">

  </div>
</div>
<center>
<a href="tambah.php"><button type="button" class="btn btn-outline-primary" style="width:100%; height:40px">+ Tambah</button></a>
            <div class="card-body">
</center>
<br>
<table class="table"width="600px">
  <thead class="thead-dark">
   <tr>
   <th scope="col">No</th>
   <th scope="col">Judul</th>
   <th scope="col">Pengarang</th>
   <th scope="col">Stok</th>
   <th scope="col">Aksi</th>
   </tr>
</thead>

<?php
                    $no=1;
                    foreach($book as $p){?>

                    <tr>
                        <th scope="row"><?=$no ?></th>
                        <td><?= $p['judul']?></td>
                        <td><?= $p['pengarang']?></td>
                        <td><?= $p['stok']?></td>
                        <td>
                        <a href="detail.php?id_buku=<?= $p["id_buku"];?>" class="badge badge-success">Detail</a>
                           <a href="edit.php?id_buku=<?= $p["id_buku"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_buku=<?= $p["id_buku"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                 <?php
                    $no++;
                        }
                 ?> 
                
             </tbody>
            </table>

<?php
include '../aset/footer.php';
?>

</body>
</html>