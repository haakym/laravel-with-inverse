<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [ 'name' ];
    protected $table = 'groups';
    protected $with = ['users'];

    public function users()
    {
        return $this->hasMany(User::class, 'group_id', 'id');
    }
}