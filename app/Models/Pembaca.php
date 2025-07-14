<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembaca extends Model
{
    use HasFactory;

    protected $table = 'pembaca';
    protected $primaryKey = 'id_pembaca';

    protected $fillable = [
        'nama_pembaca',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];
}
