<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passager extends Model
{
    
    protected $fillable = [
        'email','password','nom','prenom','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
