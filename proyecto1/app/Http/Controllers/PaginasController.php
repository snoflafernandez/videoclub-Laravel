<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
	public function nosotros(){
		return view ('nosotros'); // return 'Nosotros desde el controlador'
	}
	public function contacto(){
		return view ('contacto'); // return 'Nosotros desde el controlador'
	}
}
?>