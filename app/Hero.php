<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'life_points',
        'damage',
        'defense',
        'damage',
        'speed',
        'attack_speed',
    ];


    public function heroClass(){
        return $this->hasOne('App\HeroClass');
    }
}
