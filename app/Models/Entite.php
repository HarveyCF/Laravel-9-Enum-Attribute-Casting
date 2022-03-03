<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\NomEntite;

class Entite extends Model
{
    use HasFactory;

    // Comment out to deactivate enum attribute casting
    protected $casts = [
        'nom' => NomEntite::class,
    ];
}