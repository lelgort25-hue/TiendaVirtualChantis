<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class producto extends Model
{
    protected $table='productos';

    protected $fillable=[
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria_id',

    ];

     public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

}
