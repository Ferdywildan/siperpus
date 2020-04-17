<?php 

include 'koneksi.php';
include '../aset/header.php';

$ID = $_GET['id_buku'];

$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE buku.id_buku = '$ID' ");

$query1 = mysqli_query($koneksi, "SELECT * FROM kategori");





if(isset($_POST['simpan'])){

    $id = $_GET['id_buku'];

    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $ringkasan = $_POST['ringkasan'];
    $cover = $_POST['cover'];
    $stok = $_POST['stok'];
    $id_kategori = 2;
    

    $sql = "UPDATE buku SET
            judul = '$judul',
            penerbit  = '$penerbit',
            pengarang = '$pengarang',
            ringkasan = '$ringkasan',
            cover = '$cover',
            stok = '$stok',
            id_kategori = '$id_kategori'
            WHERE id_buku = '$id'
            ";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    // var_dump($count);
         
    if($count==1){
        echo "<script>
                alert('Data Berhasil Diubah'); 
                document.location.href='index.php';
              </script>";
        
    }
    else{
        echo "<script>
        alert('Data Gagal Diubah'); 
        document.location.href='edit.php';
      </script>";
    }
}
?>

<div class="container">
 <div class="row mt-4">
  <div class="col-md-9">
   <div class="card">
    <div class="card-header">
    <h2>Edit Data buku</h2>
    </div>
    <div class="card-body">
         <form method="post" action="">

         <?php while($edit = mysqli_fetch_assoc($query)): ?>
                <div class="form-group">
                 <label for="buku">judul</label>
                 <input type="text" class="form-control" name="judul" id="judul"  value="<?= $edit['judul']?>">
                </div>

                <div class="form-group">
                 <label for="buku">penerbit</label>
                 <input type="text" class="form-control" name="penerbit" id="penerbit"   value="<?= $edit['penerbit']?>">
                </div>  

                <div class="form-group">
                 <label for="buku">Telfon</label>
                 <input type="text" class="form-control" name="pengarang" id="pengarang"  value="<?= $edit['pengarang']?>">
                </div>

                <div class="form-group">
                 <label for="buku">ringkasan</label>
                 <input type="text" name="ringkasan" id="ringkasan" class="form-control" value="<?= $edit['ringkasan']?>"></textarea>
                </div>

                <div class="form-group">
                 <label for="buku">cover</label>
                 <input type="cover" class="form-control" name="cover" id="cover"  value="<?= $edit['cover']?>"> 
                 </div>

                 <div class="form-group">
                 <label for="buku">stok</label>
                 <input type="text" class="form-control" name="stok" id="stok"  value="<?= $edit['stok']?>"> 
                 </div>
                
                <?php
                     endwhile;
                ?>
                               
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
         </form>        
    </div>
   </div>
  </div>
 </div>
</div>    






<?php

include '../aset/footer.php';

?>
