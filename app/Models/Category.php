<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = "Category";

    public function Events(){

        return $this->hasMany('App\Models\Event' ,'id', 'category_id');
    }
}
