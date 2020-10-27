<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;

class ComentariosController extends Controller
{
    public function mostrarcom()
    {
        return comments::all();
    }
    public function createcom(Request  $r)
    {
        $comments=comments::create($r->all());
        return $comments;
    }

    public function eliminarcom($id)
    {
        $drop=comments::find($id);
        $drop->delete();

        return response()->json(200);
    }
    public function refreshcom(Request $reff, $id)
    {
        $ref = comments::find($id);
        $ref->post_id= $reff ->input ('post_id');
        $ref->nombre= $reff ->input ('nombre');
        $ref->correo= $reff ->input('correo');
        $ref->save();

        return response()->json(208);
    }
}
