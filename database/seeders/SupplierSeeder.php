<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'GRM', 'supplier_nama' => 'Gramedia', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 2, 'supplier_kode' => 'UNQ', 'supplier_nama' => 'Uniqlo', 'supplier_alamat' => 'Batam'],
            ['supplier_id' => 3, 'supplier_kode' => 'RDM', 'supplier_nama' => 'Your Average Supplier', 'supplier_alamat' => 'Bali'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
