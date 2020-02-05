<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
	public function getIndex()
    {
    	$peliculas = Movie::all();
    	return view('catalog.index',['arrayPeliculas' => $peliculas]);
    }

    public function getShow($id)
    {
    	$pelicula = Movie::findOrFail($id);

    	return view('catalog.show',['pelicula' => $pelicula]);
    }

    public function getCreate()
    {
    	return view('catalog.create');
    }

    public function getEdit($id)
    {
    	return view('catalog.edit',array('pelicula'=>Movie::findOrFail($id)));
    }

    public function postCreate(Request $request)
    {
        $movie = new Movie;
        $movie->title=$request->input('title');
        $movie->year=$request->input('year');
        $movie->poster=$request->input('poster');
        $movie->synopsis=$request->input('synopsis');
        $movie->save();
        return redirect()->action('CatalogController@getIndex');
    }

    public function putEdit(Request $request,$id)
    {
        $movie = Movie::findOrFail($id);
        $movie->title=$request->input('title');
        $movie->year=$request->input('year');
        $movie->poster=$request->input('poster');
        $movie->synopsis=$request->input('synopsis');
        $movie->save();
        return redirect()->action('CatalogController@getIndex');
    }
}
