<?php

namespace App\Database\Migrations;
class Admin extends \CodeIgniter\Database\Migration   //this was the correction
{
    public function up()                              //insertion in database
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_type' => [
                'type'       => 'ENUM',
                'constraint' => ['admin', 'user'],    // also this
                'default'    => 'user',
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()                           //dropping table
    {
        $this->forge->dropTable('admin');
    }
}