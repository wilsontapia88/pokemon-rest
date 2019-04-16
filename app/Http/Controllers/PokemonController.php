<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonController extends Controller
{
    //-----------------------------------------------------------------------------------
    public function index(Pokemon $pokemon)
    {
        return Pokemon();
    }

    //-----------------------------------------------------------------------------------
    public function store(Request $request)
    {
        //Instanciamos la clase Pokemons
        $pokemon = new Pokemon;
        //Declaramos el nombre con el nombre enviado en el request
        $pokemon->name = $request->name;
        //Guardamos el cambio en nuestro modelo
        $pokemon->save();
    }

    //-----------------------------------------------------------------------------------
    public function show($id)
    {
        //Solicitamos al modelo el Pokemon con el id solicitado por GET.
        return Pokemon::where('id', $id)->get();
    }

   //-----------------------------------------------------------------------------------
    public function update(Request $request, $id)
    {
        //
    }

    //-----------------------------------------------------------------------------------
    public function destroy($id)
    {
        //
    }
    //-----------------------------------------------------------------------------------
}
