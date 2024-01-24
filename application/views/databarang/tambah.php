<div class="container">
    
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
  <div class="card-header">
    Form tambah data barang
  </div>
            <div class="card-body">
                <?php if( validation_errors() ) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>                
            <form action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kode barang</label>
        <input type="text" name="namabarang" class="form-control" id="nama">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kode wilayah</label>
        <input type="text" name="wilayah" class="form-control" id="nama">
        </div>
        <button type="submit" name="tambah" class="btn
        btn-primary">Tambah Data</button>
        </form>
            </div>
            </div>

        


        </div>
    </div>




</div>