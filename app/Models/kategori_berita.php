<?php

// Model KategoriBerita
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBerita extends Model
{
    use HasFactory;
    
    protected $table = 'kategori_berita';
    protected $primaryKey = 'id_kategori';
    
    protected $fillable = [
        'nama_kategori',
        'slug',
        'deskripsi'
    ];
    
    // Relasi: Kategori memiliki banyak artikel
    public function artikels()
    {
        return $this->hasMany(ArtikelBerita::class, 'id_kategori', 'id_kategori');
    }
}
