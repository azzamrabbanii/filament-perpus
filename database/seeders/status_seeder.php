<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class status_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'status' => 'Belum Dikembalikan'
            ],
            [
                'status' => 'Sudah Dikembalikan'
            ]
    ]);
    }
}
