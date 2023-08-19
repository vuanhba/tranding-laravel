<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permisstion extends Permission
{
    use HasFactory;
    protected $table="permissions";
    protected $fillable=[
        'name',
        'display_name',
        'group'
    ];
}
