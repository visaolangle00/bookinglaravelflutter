<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =[
        'name',
        'phone',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
