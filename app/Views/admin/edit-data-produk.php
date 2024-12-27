<?= $this->extend('admin/layout'); ?>

<?= $this->section('main'); ?>

<div class="container mt-5 pt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Edit Produk</h1>
    </div>
    <div class="mb-3">
    <form action="<?= base_url('admin/dataproduk/' . $produk['id'] . '/update') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= esc($produk['nama_produk']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" value="<?= esc($produk['harga']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="foto_produk">Foto Produk</label>
                <input type="file" name="foto_produk" id="foto" class="form-control">
                <?php if (!empty($produk['foto_produk'])): ?>
                    <img src="<?= base_url('uploads/' . $produk['foto_produk']); ?>" alt="Foto Produk" class="img-fluid mt-3" style="max-height: 200px; width: 100px;">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>