<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'titulo', 'preparacion', 'ingredientes', 'categoria_id', 'imagen'
    ];

    //Obtiene la categoría de la receta.
    public function categoria() {
        return $this -> belongsTo(CategoriaReceta::class);
    }
}
