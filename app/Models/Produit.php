<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable= [
        'uuid', 
        'designation', 
        'description',
        'prix', 
        'like', 
        'pays_source', 
        'poids'
    ];

    public function commande()
    {
        return $this->hasMany(Commande::class);
    }
}
