<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Desbravador;
use App\Models\Unidade;

class Clube extends Model
{
    // metodo para criar relacao 'um para muitos' -> hasMany()

    // One to Many, indicando que um clube pode ter muitas unidades.
    public function desbravadores()
    {
        // Define a one-to-many relationship.
        return $this->hasMany(Desbravador::class);
    }

    public function unidades()
    {
        return $this->hasMany(Unidade::class);
    }

}
