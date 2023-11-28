<?php

namespace App\Http\Controllers;

use App\Models\client;
use illuminate\Http\Requests;
// use App\Http\Requests\StoreclientRequest;
// use App\Http\Requests\UpdateclientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreclientRequest $request)
    {
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'telephone' => 'required',
                'email' => 'required|email|unique:clients',
                'adresse' => 'required',
                // Ajoutez d'autres règles de validation si nécessaire
            ]);
    
            Client::create($request->all());
    
            return redirect()->route('/layouts.dashadmin')->with('success', 'Client ajouté avec succès!');
        }
    

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateclientRequest $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}
