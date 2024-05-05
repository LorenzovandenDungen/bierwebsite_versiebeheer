<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bier extends Model
{
    protected $table = 'bier';

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function submerken()
    {
        return $this->hasMany(Bier::class, 'valt_onder_id');
    }
}
