<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [ 'name', 'group_id' ];
    protected $table = 'users';
    protected $with = ['group'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}