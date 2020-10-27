<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  
    public function comentarios()
    {
        return $this->hasMany('App\Comentarios');

    }

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'Usuario', 'tittle', 'contenido',
    ];
}
