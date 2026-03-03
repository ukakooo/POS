<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori Elektronik
            ['barang_id' => 1, 'kategori_id' => 1, 'supplier_id' => 3, 'barang_kode' => 'BRG001', 'barang_nama' => 'Televisi', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'supplier_id' => 3, 'barang_kode' => 'BRG002', 'barang_nama' => 'Kipas', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 3, 'kategori_id' => 1, 'supplier_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'DeskLamp', 'harga_beli' => 100000, 'harga_jual' => 150000],
            
            // Kategori Pakaian
            ['barang_id' => 4, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Jaket Coat', 'harga_beli' => 30000, 'harga_jual' => 50000],
            ['barang_id' => 5, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Kaos', 'harga_beli' => 70000, 'harga_jual' => 120000],
            ['barang_id' => 6, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Hoodie', 'harga_beli' => 100000, 'harga_jual' => 150000],
            
            // Kategori Makanan
            ['barang_id' => 7, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Sosis', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 8, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Nugget', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 9, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG009', 'barang_nama' => 'Kentang Goreng', 'harga_beli' => 12000, 'harga_jual' => 17000],
            
            // Kategori Minuman
            ['barang_id' => 10, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG010', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 4000],
            ['barang_id' => 11, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Milo', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 12, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Teh', 'harga_beli' => 4000, 'harga_jual' => 6000],
            
            // Kategori Novel
            ['barang_id' => 13, 'kategori_id' => 5, 'supplier_id' => 1, 'barang_kode' => 'BRG013', 'barang_nama' => 'No longer Human', 'harga_beli' => 99000, 'harga_jual' => 149000],
            ['barang_id' => 14, 'kategori_id' => 5, 'supplier_id' => 1, 'barang_kode' => 'BRG014', 'barang_nama' => 'Crime and Punishment', 'harga_beli' => 49500, 'harga_jual' => 749000],
            ['barang_id' => 15, 'kategori_id' => 5, 'supplier_id' => 1, 'barang_kode' => 'BRG015', 'barang_nama' => 'Dracula', 'harga_beli' => 99000, 'harga_jual' => 1399000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
