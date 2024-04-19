<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            // Transaksi Penjualan 1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 41,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 42,
                'harga' => 15000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 43,
                'harga' => 12000,
                'jumlah' => 3,
            ],
            // Transaksi Penjualan 2
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 44,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 45,
                'harga' => 9000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 46,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            // Transaksi Penjualan 3
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 47,
                'harga' => 7500,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 48,
                'harga' => 8500,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 49,
                'harga' => 9200,
                'jumlah' => 1,
            ],

            // Data untuk transaksi 4
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 50,
                'harga' => 7800,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 41,
                'harga' => 10200,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 42,
                'harga' => 15100,
                'jumlah' => 1,
            ],

            // Data untuk transaksi 5
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 43,
                'harga' => 12500,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 44,
                'harga' => 9000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 45,
                'harga' => 8500,
                'jumlah' => 1,
            ],

            // Data untuk transaksi 6
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 46,
                'harga' => 11000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 47,
                'harga' => 7600,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 48,
                'harga' => 9000,
                'jumlah' => 3,
            ],

            // Data untuk transaksi 7
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 49,
                'harga' => 9500,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 50,
                'harga' => 7800,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 41,
                'harga' => 10500,
                'jumlah' => 1,
            ],

            // Data untuk transaksi 8
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 42,
                'harga' => 15300,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 43,
                'harga' => 12800,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 44,
                'harga' => 9100,
                'jumlah' => 3,
            ],

            // Data untuk transaksi 9
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 45,
                'harga' => 8700,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 46,
                'harga' => 11500,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 47,
                'harga' => 7800,
                'jumlah' => 3,
            ],

            // Data untuk transaksi 10
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 48,
                'harga' => 9200,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 49,
                'harga' => 9600,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 50,
                'harga' => 8000,
                'jumlah' => 3,
            ],
        ];

        DB::table('t_penjualan_detail_table')->insert($data);
    }
}
