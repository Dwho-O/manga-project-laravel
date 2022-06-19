<?php

namespace App\Http\Controllers;
use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index(){
        $mangas = Manga::all();
        return view('welcome',['mangas' => $mangas]); 
    }

    public function popular(){
        $mangas = Manga::all();
        return view('popular',['mangas' => $mangas]);
    }
}
