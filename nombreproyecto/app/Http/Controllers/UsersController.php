<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;




class UsersController extends Controller
{
    public function mostrarus()
    {
        return User::all();
    }
    public function createusu(Request $r)
    {
        $ru = new User; 

        $ru->name = $r->input('name'); 
        $ru->email = $r->input('email');
        $ru->password = Hash::make($r->input('password'));

        $ru->save();  

        return response()->json($r,201); 
    }

    public function eliminarusu($id)
    {
        $drop=User::find($id);
        $drop->delete();

        return response()->json(200);
    }
    public function refreshusu(Request $reff, $id)
    {
        $ref = User::find($id);
        $ref->name= $reff ->input ('name');
        $ref->email= $reff ->input('email');
        $ref->password=   Hash::make($reff ->input('password'));
        $ref->save();

        return response()->json(208);
    }
}
