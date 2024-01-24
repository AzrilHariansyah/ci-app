<div class="container">
    
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
  <div class="card-header">
    Form edit data barang
  </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>                
            <form action="" method="post">
                <input type="hidden" name="id" class="form-control" id="nama" value="<?= $barang["id"]?>">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $barang["nama"]?>">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kode barang</label>
        <input type="text" name="namabarang" class="form-control" id="nama" value="<?= $barang["databarang"]?>">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kode wilayah</label>
        <input type="text" name="wilayah" class="form-control" id="nama" value="<?= $barang["wilayah"]?>">
        </div>
        <input type="submit" name="edit" class="btn
        btn-primary" value="Edit Data">
        </form>
            </div>
            </div>

        


        </div>
    </div>




</div>