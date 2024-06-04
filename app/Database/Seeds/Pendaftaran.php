<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pendaftaran extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Friskha',
                'email' => 'prisj@gmail.com',
                'no_telpon' => '08123',
                'jenis_kelamin' => 'Wanita',
                'bahasa' => 'Indonesia, Jepang',
                'agama' => 'Katolik',
                'tanggal_daftar' => '2024-06-03',
                'jam_daftar' => '7.35.40',
            ],
            [
                'nama' => 'Bibitz',
                'email' => 'ubitonk@gmail.com',
                'no_telpon' => '0865',
                'jenis_kelamin' => 'Pria',
                'bahasa' => 'Mandarin, India',
                'agama' => 'Hindu',
                'tanggal_daftar' => '2024-06-03',
                'jam_daftar' => '07:30:45',
            ],
            [
                'nama' => 'Nanon',
                'email' => 'nanoncintaku@gmail.com',
                'no_telpon' => '0876',
                'jenis_kelamin' => 'Pria',
                'bahasa' => 'Thailand',
                'agama' => 'Kristen',
                'tanggal_daftar' => '2024-06-04',
                'jam_daftar' => '11:35:30',
            ],
        ];

        $this->db->table('pendaftaran')->insertBatch($data);
    }
}