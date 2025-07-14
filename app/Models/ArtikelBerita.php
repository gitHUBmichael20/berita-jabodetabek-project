<?php

// Model ArtikelBerita
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtikelBerita extends Model
{
    use HasFactory;

    protected $table = 'artikel_berita';
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'judul',
        'slug',
        'konten',
        'gambar',
        'id_admin',
        'id_kategori',
        'status',
        'tanggal_publikasi'
    ];

    protected $casts = [
        'tanggal_publikasi' => 'datetime',
    ];

    // Relasi: Artikel ditulis oleh admin
    public function admin()
    {
        return $this->belongsTo(AdminBerita::class, 'id_admin', 'id_admin');
    }

    // Relasi: Artikel memiliki kategori
    public function kategori()
    {
        return $this->belongsTo(KategoriBerita::class, 'id_kategori', 'id_kategori');
    }

    // Scope untuk artikel yang dipublikasikan
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
