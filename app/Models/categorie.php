<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $fillable=['nom'];

    public function matieres(){
        return $this->belongsToMany(matiere::class)->withTimestamps();
    }
}
