<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                "id" => "1",
                "nama" => "budi",
                "nim" => "191502502",
                "prodi_id" => 1,
                
            ],
            [
                "id" => "2",
                "nama" => "doremi",
                "nim" => "201502502",
                "prodi_id" => 1,
                
            ],
        ];

        foreach($mahasiswa as $mhs){
            \App\Models\Mahasiswa::firstOrCreate($mhs);
        }
    }
}
