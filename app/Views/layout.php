<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pembelian Barang</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
      <div class="container-fluid">
        <button
          class="btn me-2 text-white"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasSidebar"
          aria-controls="offcanvasSidebar"
        >
          <i class="bi bi-list"></i>
        </button>
        <a class="navbar-brand" href="#">Waryan</a>
        <form class="d-flex ms-auto" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-light" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
    </nav>

    <!-- Sidebar Offcanvas -->
    <div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasSidebar"
      aria-labelledby="offcanvasSidebarLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menu</h5>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul class="list-group">
          <li class="list-group-item border-0">
            <a href="#" class="text-decoration-none text-reset">Home</a>
          </li>
          <li class="list-group-item border-0">
            <a href="<?= base_url('admin/dataproduk')?>" class="text-decoration-none text-reset">Produk</a>
          </li>
          <li class="list-group-item border-0">
            <a href="#" class="text-decoration-none text-reset">Tentang</a>
          </li>
          <li class="list-group-item border-0">
            <a href="#" class="text-decoration-none text-reset">Kontak</a>
          </li>
        </ul>
      </div>
    </div>

    <?= $this->renderSection('main'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>