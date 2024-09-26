<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        db::table('users')->insert([
            'name' => 'eka',
            'email' => 'eka@gmail.com',
            'password' => Hash::make('123'),
        ]);
        db::table('kategori_barangs')->insert([
            'nama_kategori' => 'makanan',
        ]);
        db::table('barangs')->insert([
            'nama_barang' => 'mie',
            'harga' => '10000',
            'stok' => '10',
            'kategori_id' => '6',
        ]);
        db::table('pelanggans')->insert([
            'nama' => 'eka',
            'kontak' => '081234567890',
        ]);
        db::table('transaksis')->insert([
            'user_id' => '11',
            'pelanggan_id' => '3',
            'total' => '10000',
            'diskon' => '1000',
            'pajak' => '1000',
            'total_bayar' => '10000',
        ]);
        db::table('detail_transaksis')->insert([
            'transaksi_id' => '2',
            'barang_id' => '4',
            'jumlah' => '1',
            'subtotal' => '10000',
        ]);
    }
}
