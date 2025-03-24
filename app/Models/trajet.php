<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trajet extends Model
{
    protected $fillable = [
        'arrivee', 'date', 'depart', 'heure', 'placesDisponibles'
    ];



    public function reservations()
    {
        return $this->hasMany(reservations::class);
    }
}
