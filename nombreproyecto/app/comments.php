<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function post()
    {
        return $this->belongsTo('App\publicaciones');

        
    }
    protected $fillable = [
        'post_id', 'nombre', 'correo',
    ];
}
