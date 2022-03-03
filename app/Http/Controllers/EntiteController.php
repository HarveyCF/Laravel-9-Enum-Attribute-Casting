<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntiteRequest;
use App\Http\Requests\UpdateEntiteRequest;
use App\Models\Entite;

class EntiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEntiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function show(Entite $entite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function edit(Entite $entite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntiteRequest  $request
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntiteRequest $request, Entite $entite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entite $entite)
    {
        //
    }
}
