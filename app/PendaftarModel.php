<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendaftarModel extends Model
{
    //masukkan tabel sesuai dengan tabel yang ada pada database

    protected $table = "pendaftar";
    public $timestamps = false;
}
