<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //metodo index
    public function index(){
    	$users = [
		    'Pepe',
		    'Luis',
		    'Raul',
		    //...s
		];

        //similar a var_dum
        //dd(compact('users'));

    	//return 'Perfil del usuario';
    	return view('users.index' , [
		    'users' => $users
		]);
    }

    public function show($id){
        //return "Detalles del usuario: {$id}";

        return view ('users.show', compact('id'));
    }


    public function create(){
    	return "Crear nuevo usuario";
    }
}
