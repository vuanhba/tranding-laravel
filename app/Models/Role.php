<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Permission
{
    use HasFactory;
    protected $table="roles";
    protected $fillable = [
        'name',
        'display_name',
        'group',
        'guard_name'
    ];
}
