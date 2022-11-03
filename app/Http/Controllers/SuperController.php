<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function store(Request $request){
        $store= new Etudiant();
        $store->nom = $request->nom;
        $store->email = $request->email;
        $store->genre = $request->genre;
        $store->age = $request->age;

        $store->save();
        return redirect()-> route('home');
    }
    public function home(){
        $etudiants= Etudiant::all();
        $hommes = Etudiant::all()->where('genre','Masculin');
        $femmes = Etudiant::all()->where('genre','Feminin');
        $jeunes = $etudiants->whereBetween('age', [22,24] );
        $total= $etudiants->count();
        return view('home', compact('etudiants', 'hommes', 'femmes','jeunes', 'total'));
    }
    public function crea(){
       
        return view('pages/creationetudiant');
    }
}
