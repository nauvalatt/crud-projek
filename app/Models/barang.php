<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;
    protected $fillable = [
        'merk',
        'seri',
        'spesifikasi',
        'stok',
        'kategori_id',
    ];
    public function user(){
        return $this->belongsTo(\App\Models\User::Class);   
    }
    public function kategori(){
        return $this->belongsTo(\App\Models\kategori::Class);
    }
}
