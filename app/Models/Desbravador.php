<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Clube;
use App\Models\Unidade;

class Desbravador extends Model
{

    //  Belongs to, indicando que cada desbravador pertence a um clube a uma unidade.

    public function clube()
    {
        return $this->belongsTo(Clube::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}
