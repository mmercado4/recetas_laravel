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

    //Obtiene la información del usuario. Vía Foreign Key.
    public function autor() {
        return $this -> belongsTo(User::class, 'user_id');
    }
}
