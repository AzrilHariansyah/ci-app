<div class="container">
    <?php if($this->session->flashdata('flash')): ?>
    <div class="row mt-3">
      <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data pemesanan<strong>Berhasil</strong> <?=
      $this->session->flashdata('flash');  ?>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    </div>
      <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>Databarang/tambah" class="btn btn-primary">Tambah data barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar barang</h3>
            <table class="table" id='example'>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">data barang</th>
      <th scope="col">wilayah</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=0; foreach($barang as $brg):?>
        <tr>
            
            
            
            <th scope="row"><?= ++$i ?></th>
            <td><?= $brg["nama"] ?></td>
            <td><?= $brg["data_barang"] ?></td>
            <td><?= $brg["wilayah"] ?></td>
            <td>
              <a href="<?= base_url(); ?>databarang/hapus/<?= $brg["id"] ?>" class="btn btn-danger" onclick="return confirm('yakin hapus ?')">hapus</a>
              <a href="<?= base_url("databarang/edit/"). $brg["id"]?>" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        <?php endforeach;?>
  </tbody>
</table>
        </div>
    </div>


</div>