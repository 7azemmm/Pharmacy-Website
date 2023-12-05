<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $guard_name = 'web';

    public function users()
{
    return $this->belongsToMany(user::class);
}

public function permissions()
{
    return $this->belongsToMany(Permission::class);
}
}