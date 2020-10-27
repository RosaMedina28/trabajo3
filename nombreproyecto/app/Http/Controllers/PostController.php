<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function mostrarpost()
    {
        return Post::all();
    }
    public function createpost(Request   $request)
    {
    $r = new Post;  

        $r->Usuario_id = $request->input('Usuario_id');   
        $r->tittle = $request->input('tittle');
        $r->contenido = $request->input('contenido');

        $r ->save();  

        return response()->json($request,201); 
    }
    public function eliminarpost($id)
  
    {
        $drop=Post::find($id);
        $drop->delete();

        return response()->json(200);
    }
    public function refreshpost(Request $reff, $id)
    {
        $ref = Post::find($id);
        $ref->tittle= $reff ->input ('tittle');
        $ref->contenido= $reff ->input('contenido');
        $ref->save();

        return response()->json(208);
    }
}
