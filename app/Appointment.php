<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =[
        'dated_at',
        'duration',
    ];

    protected $dates =[
        'dated_at',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function stylist(){
        return $this->belongsTo(Stylist::class);
    }
}
