<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalPerkuliahan;

class JadwalPerkuliahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_perkuliahan') -> insert([
            [
                'id' => 1,
                'hari' => 'Senin',
                'jam' => '1 - 2',
                'kodeMK' => 'PBO01',
                'mataKuliah' => 'Pemrograman Berbasis Objek',
                'dosen' => 'Dr. Sule S.Kom, M.Sc',
                'ruang' => 'LPR07',
            ],

            [
                'id' => 2,
                'hari' => 'Selasa',
                'jam' => '3 - 4',
                'kodeMK' => 'BI01',
                'mataKuliah' => 'Business Inteligence',
                'dosen' => 'Drs. Fikri S.Tr.Kom, M.Sc',
                'ruang' => 'RT04',
            ]
        ]);
    }
}