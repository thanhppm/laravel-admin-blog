<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    public function users()
	{
	  return $this->belongsToMany('App\User');
	}

	public function permissions()
    {
      return $this->belongsToMany('App\Permission', 'permission_role', 'role_id', 'permission_id');
    }
}
