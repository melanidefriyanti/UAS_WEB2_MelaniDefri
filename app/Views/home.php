<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<!-- Main Content -->
<div class="container mt-5 pt-4">
  <div class="row mt-3">
    <!-- Search Bar -->
    <div class="col-12 mb-4">
      <input
        type="text"
        class="form-control"
        placeholder="Cari produk..." />
    </div>

    <?php foreach ($produk as $index => $item) : ?>
      <!-- Product Cards -->
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <img
            src="<?= base_url('uploads/' . $item['foto_produk']); ?>"
            class="card-img-top"/>
          <div class="card-body">
            <h5 class="card-title"><?= $item['nama_produk']; ?></h5>
            <p class="card-text">Rp<?= number_format($item['harga'], 0, ',', '.'); ?></p>
            <a href="<?= base_url('chart') ?>" class="btn btn-primary"><i class="bi bi-cart-plus"></i> Pesan Sekarang</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</div>
<?= $this->endSection(); ?>