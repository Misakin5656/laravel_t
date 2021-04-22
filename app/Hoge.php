<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoge extends Model
{
    protected $guarded = array('id');

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }
}
