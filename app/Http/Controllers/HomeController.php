<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index() {
        $all_movies = Movie::all(); // SELECT * FROM movies;
        $data = [
            'testo' => 'Ciao a tutti',
            'movies' => $all_movies
        ];
        return view('home', $data);
    }

    public function contatti() {
        $data = [
            'testo' => 'Contattaci!'
        ];
        return view('contatti', $data);
    }
}
