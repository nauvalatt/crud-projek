<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    
    protected $table = 'kategoris';
    protected $fillable = [
        'deskripsi',
        'kategori',
    ];

    // Relasi satu kategori memiliki banyak barang
    public function barangs()
    {
        return $this->hasMany(\App\Models\Barang::class, 'kategori_id');
    }
}
