<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            ['nama' => 'Laptop ASUS ROG Strix G15', 'harga' => 18000000],
            ['nama' => 'iPhone 14 Pro Max', 'harga' => 20000000],
            ['nama' => 'Printer Canon Pixma G2010', 'harga' => 1900000],
            ['nama' => 'Meja Belajar Kayu Minimalis', 'harga' => 750000],
            ['nama' => 'Kipas Angin Cosmos 16 inch', 'harga' => 250000],
            ['nama' => 'Monitor LG 24 inch Full HD', 'harga' => 1700000],
            ['nama' => 'Mouse Logitech Wireless M330', 'harga' => 250000],
            ['nama' => 'Keyboard Mechanical Rexus', 'harga' => 450000],
            ['nama' => 'Headset JBL Quantum 100', 'harga' => 600000],
            ['nama' => 'Buku Tulis Sidu 58 Lembar', 'harga' => 3500],
        ];

        foreach ($barangs as $barang) {
            Barang::create([
                'nama' => $barang['nama'],
                'harga' => $barang['harga'],
                'stok' => rand(10, 100),
                'deskripsi' => fake()->sentence(8),
            ]);
        }
    }
}
