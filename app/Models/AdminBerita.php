<?php
// Model AdminBerita
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminBerita extends Model
{
    use HasFactory;

    protected $table = 'admin_berita';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama_admin',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi: Admin memiliki banyak artikel
    public function artikels()
    {
        return $this->hasMany(ArtikelBerita::class, 'id_admin', 'id_admin');
    }
}
