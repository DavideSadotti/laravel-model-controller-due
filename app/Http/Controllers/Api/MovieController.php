<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getAll(){

        $movies = Movie::all();

        return response()->json($movies);
    }
}