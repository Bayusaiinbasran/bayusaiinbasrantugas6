<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
        'judul', 'isi', 'users_id', 'kategori_berita_id'
    ];

    protected $casts=[
        
    ];
}
