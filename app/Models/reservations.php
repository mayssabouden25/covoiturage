<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = [
        'passager_id', 'trajet_id', 'statut'
    ];

    public function passager()
    {
        return $this->belongsTo(Passager::class);
    }

    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }

}
