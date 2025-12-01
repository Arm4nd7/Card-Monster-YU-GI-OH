<?php

namespace App\Http\Controllers;

use App\Models\CharacterYuGiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CharacterYuGiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //inicializo la llamada a la api con el metodo get
        $response = Http::get('https://db.ygoprodeck.com/api/v7/cardinfo.php?archetype=Exodia');

        //le indico que debe ser tipo json
        $card = $response->json();

        //renderizo los datos en la vista welcome
        return view('welcome',[
            'card' => $card['data'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CharacterYuGiModel $characterYuGiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CharacterYuGiModel $characterYuGiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CharacterYuGiModel $characterYuGiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CharacterYuGiModel $characterYuGiModel)
    {
        //
    }
}
