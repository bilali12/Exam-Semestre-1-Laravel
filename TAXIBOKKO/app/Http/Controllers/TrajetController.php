<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::all();
        return view('trajet.index', ['trajets'=> $trajets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trajet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trajet = new Trajet();
        $trajet->depart = $request->depart;
        $trajet->arrive = $request->arrive;
        $trajet->duree = intval($request->duree);
        $trajet->prix = intval($request->prix);

        $trajet->save();


        return redirect('/trajet/create')->with('flash_message', 'trajet ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     $trajet = Trajet::find($id);

    //     $trajet->delete();
    //     return redirect('/trajet/index')->with('flash_message', 'trajet supprimé');
    // }
}
