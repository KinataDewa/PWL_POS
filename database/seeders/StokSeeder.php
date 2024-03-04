<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 31,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 10,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 32,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 20,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 33,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 30,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 34,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 40,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 35,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 50,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 36,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 10,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 37,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 20,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 38,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 30,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 39,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 40,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ],
            [
                'barang_id' => 40,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-27 08:00:00',
                'stok_jumlah' => 50,
                'created_at' => '2024-02-27 08:00:00',
                'updated_at' => '2024-02-27 08:00:00'
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
