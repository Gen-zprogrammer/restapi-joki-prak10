<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Database extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'no_telpon' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'jenis_kelamin' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
            'bahasa' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'agama' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'tanggal_daftar' => [
                'type'       => 'DATE',
                'null'       => false,
            ],
            'jam_daftar' => [
                'type'       => 'TIME',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pendaftaran');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran');
    }
}
