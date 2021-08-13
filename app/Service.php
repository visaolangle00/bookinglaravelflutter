<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable=[
        'name',
        'price',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function stylists(){
        return $this->belongsToMany(Stylist::class);
    }
}
