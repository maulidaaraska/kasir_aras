 <?php $page = isset($page) ? $page : '';
    ?>
 <form action="<?= base_url('produk/update') ?>" method="post" enctype="multipart/form-data">

     <input type="hidden" name="id_produk" value="<?= $user->id_produk ?>">
     <div class="col-md-8">
         <div class="card mb-4">
             <h5 class="card-header">Edit Data Produk</h5>
             <div class="card-body demo-vertical-spacing demo-only-element">
                 <div class="row">
                     <div class="col mb-3">
                         <label class="form-label">Nama</label>
                         <input type="text" name="nama" class="form-control" value="<?= $user->nama ?>">
                     </div>
                 </div>
                 <div class="row g-2">
                     <div class="col mb-0">
                         <label class="form-label">Harga</label>
                         <input type="number" name="harga" class="form-control" value="<?= $user->harga ?>">
                     </div>

                     <div class="col mb-0">
                         <label class="form-label">Stok</label>
                         <input type="number" name="stok" class="form-control" value="<?= $user->stok ?>">
                     </div>
                 </div>

                 <div class="row">
                     <div class="col mb-0">
                         <label class="form-label">Kode Produk</label>
                         <input type="text" name="kode_produk" class="form-control" value="<?= $user->kode_produk ?>">
                     </div>
                 </div>
                 <div class="col mb-3">
                     <label class="form-label">Gambar</label>
                     <?php if (!empty($user->gambar)) { ?>
                         <input type="hidden" name="old_image" value="<?= $user->gambar ?>">
                     <?php } ?>
                     <input type="file" name="gambar" class="form-control">
                     <small>(Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
                 </div>



                 <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
         </div>
     </div>
 </form>