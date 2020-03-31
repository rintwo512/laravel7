<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ac extends Model
{
    protected $table = "airco";
    protected $fillable = ['aset', 'wing', 'lantai', 'lokasi', 'merk', 'jenis', 'type', 'status'];
}