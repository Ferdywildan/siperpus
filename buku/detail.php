<?php

include 'koneksi.php';

include '../aset/header.php';

$id = $_GET["id_buku"];

$query = mysqli_query($koneksi, "SELECT * FROM buku INNER JOIN kategori  USING(id_kategori) WHERE buku.id_buku = '$id' ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card">
            <div class="card-header">
            <h2 class="card-title">Detail Buku</h2>                
            </div>
            <div class="card-body">

                <table class="table">    
                <?php
                    while($book = mysqli_fetch_assoc($query)):?>
                    
                    <tr>
                        <td width="150px">judul</td>
                        <td><?= $book['judul']?></td>
                    </tr>    
                    <tr>
                        <td>id</td>
                        <td><?= $book['id_buku']?></td>
                    </tr>
                    <tr>
                        <td>penerbit</td>
                        <td><?= $book['penerbit']?></td>
                    </tr>
                    <tr>
                        <td>pengarang</td>
                        <td><?= $book['pengarang']?></td>
                    </tr>
                    <tr>
                        <td>ringkasan</td>
                        <td><?= $book['ringkasan']?></td>
                    </tr>
                    <tr>
                        <td>cover</td>
                        <td><?= $book['cover']?></td>
                    </tr>
                    <tr>
                        <td>stok</td>
                        <td><?= $book['stok']?></td>
                    </tr>
                    <tr>
                        <td>kategori</td>
                        <td><?= $book['id_kategori']?></td>
                    </tr>
                        <td>Aksi</td>     
                        <td>
                           <a href="edit.php?id_buku=<?= $book["id_buku"];?>  " class="badge badge-warning">Edit</a>
                           <a href="hapus.php?id_buku=<?= $book["id_buku"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                     </tr>
                 <?php
                   endwhile;
                 ?>            

                </table>
                            </div>
                            </div>
                            </div>







                            </body>
</html>

<?php

include '../aset/footer.php';

?>