<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class avis extends Model
{
    protected $fillable = [
        'commentaire', 'conducteur_id', 'passager_id', 'note'
    ];
    public function conducteur()
    {
        return $this->belongsTo(Conducteur::class);
    }
    public function passager()
    {
        return $this->belongsTo(Passager::class);
    }
}
