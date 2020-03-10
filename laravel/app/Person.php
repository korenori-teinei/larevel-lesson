<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;


class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')' . ' : ' . $this->mail;
    }

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function setUpdatedAt($value)
    {
        return $this;
    }

    public function setCreatedAt($value)
    {
        return $this;
    }

    public $timestamps = false;

    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}