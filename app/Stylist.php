<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    protected $fillable =[
        'name',
        'photo',
        'score',
    ];

    public function appointments(){
        return $this->hasMany(Appointent::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
