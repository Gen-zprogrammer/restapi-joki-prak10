<?php
namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Pendaftaran extends ResourceController
{
    protected $modelName = 'App\Models\PendaftaranModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->fail('Data tidak ditemukan');
        }
        return $this->respond($data);
    }

    public function create()
    {
        $data = $this->request->getPost();
        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);

        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($pendaftaran)) {
            return $this->respondCreated($data);
        }

        return $this->fail('Gagal menyimpan data');
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        if (!$this->model->find($id)) {
            return $this->fail('Data tidak ditemukan');
        }

        $pendaftaran = new \App\Entities\Pendaftaran();
        $pendaftaran->fill($data);

        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }

        if ($this->model->save($pendaftaran)) {
            return $this->respondUpdated($data);
        }

        return $this->fail('Gagal memperbarui data');
    }

    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->fail('Data tidak ditemukan');
        }

        if ($this->model->delete($id)) {
            return $this->respondDeleted("Data dengan id $id berhasil dihapus");
        }

        return $this->fail('Gagal menghapus data');
    }
}


