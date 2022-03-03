<?php

use Illuminate\Support\Facades\Route;
use App\Models\Entite;
use App\Enums\NomEntite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Test enum attribute casting
Route::get('/entite', function () {
    $entite = \App\Models\Entite::first();
    return $entite;
});

// Test implicit route binding enum constraint
Route::get('/entite/{nom}', function (NomEntite $nom) {
    return $nom === NomEntite::CF
        ? "L'entité est <strong>Compagnie Fiduciaire</strong>."
        : "C'est une autre entité : <strong>" . $nom->value . "</strong>.";
});

// Test la récupération d'un modèle via un enum binding
Route::get('/entiteByNom/{entite:nom}', function (Entite $entite) {
    return $entite;
});