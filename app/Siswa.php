<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // 
    protected $table = 'siswa';
    protected $fillable = ['nama', 'tanggal_lahir','jenis_kelamin'];
    protected $visible = ['nama', 'tanggal_lahir','jenis_kelamin'];
    public $timestamps = true;
}
