<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Desbravador;

class Unidade extends Model
{
    public function desbravadores()
    {
        return $this->hasMany(Desbravador::class);
    }
}
