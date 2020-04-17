
<?php
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Buku</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_tambah.php">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                  <label for="stok">penerbit</label>
                  <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan penerbit">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="pengarang">pengarang</label>
                  <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan Pengarang">
                  <small class="form-text text-muted">Contoh: pidi baiq</small>
                </div>
                <div class="form-group">
                  <label for="stok">ringkasan</label>
                  <textarea cols="50" rows="10" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan ringkasan"></textarea>
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">cover</label>
                  <input type="file" class="form-control" name="cover" id="cover" placeholder="Masukkan cover">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan Stok">
                  <small class="form-text text-muted"></small>
                </div>
                 <!-- <div class="form-group">
                  <label for="stok">Kategori</label><br>
                  <input type="radio" name="id_kategori" value="1">Fiksi<br>
                  <input type="radio" name="id_kategori" value="2">Non Fiksi<br>
                </div> -->
                 <div class="form-group">
                  <label for="stok">Kategori</label>
                  <select class="form-control" name="id_kategori" style="width : 50">
                    <option value="">---pilih kategori---</option>
                    <option value="1">Fiksi</option>
                     <option value="2">Non Fiksi</option>
                  </select>
                </div>


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