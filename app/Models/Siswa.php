<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Siswa extends Model
{
    use HasFactory;
    protected $table="tb_siswa";
    protected $guarded=['id'];

    // protected $filelable=['nis','nama','alamat'];
}
