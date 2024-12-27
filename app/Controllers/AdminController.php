<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function dataproduk()
    {
        $produkModel = model('ProdukModel');
        $data['produk'] = $produkModel->findAll();
        return view('admin/dataproduk', $data);
    }

    public function create_produk()
    {
        $produkModel = model('ProdukModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('foto_produk');

        if (!$file->hasMoved()) {
            $path = $file->store('images');
            $data['foto_produk'] = $path;
        }

        if ($produkModel->insert($data, false)) {
            return redirect()->to('admin/dataproduk')->with('sukses', 'Data Berhasil Disimpan!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function edit_produk($id)
    {
        $produkModel = model('ProdukModel');
        $data['produk'] = $produkModel->find($id);
        return view('admin/edit-data-produk', $data);
    }

    public function update_produk($id)
    {
        $produkModel = model('ProdukModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('foto_produk');

        if ($file->isValid()) {
            if (!$file->hasMoved())
                $path = $file->store('images');
            $data['foto_produk'] = $path;
        }

        if ($produkModel->update($id, $data)) {
            return redirect()->to('admin/dataproduk')->with('sukses', 'Data Berhasil Disimpan!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function delete_produk($id)
    {
        $produkModel = model('ProdukModel');
        if ($produkModel->delete($id)) {
            return redirect()->to('admin/dataproduk')->with('sukses', 'Data Berhasil dihapus!');
        } else {
            return redirect()->back()->with('gagal', 'Data gagal dihapus!');
        }
    }
}
