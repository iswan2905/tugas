<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $siswa = [
        ['nama'=>'Iswanto', 'tanggal_lahir'=>'2000-05-29','jenis_kelamin'=>'Laki-Laki'],
        ['nama'=>'Nisa Rahayu', 'tanggal_lahir'=>'2000-02-28','jenis_kelamin'=>'Perempuan'],
        ['nama'=>'Silvani Rizky Agustiani', 'tanggal_lahir'=>'2000-08-15','jenis_kelamin'=>'Perempuan'],
        ['nama'=>'Dede Hikmat Ramadhan', 'tanggal_lahir'=>'2000-01-01','jenis_kelamin'=>'Laki-Laki'],
        ['nama'=>'Dani Ramdhani', 'tanggal_lahir'=>'1998-12-25','jenis_kelamin'=>'Laki-Laki'],
        ];

        DB::table('siswa')->insert($siswa);
    }
}
