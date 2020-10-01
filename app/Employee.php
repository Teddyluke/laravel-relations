<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

      'name',
      'surname',
      'location_id'

    ];

    public function location() {

      return $this -> belongsTo('App\Location');
    }

    public function tasks()
   {
       return $this-> belongsToMany('App\Task');
   }
}
