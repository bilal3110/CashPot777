<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_name',
        'admin_username',
        'admin_password',
        'remember_token'
    ];

    protected $hidden = [
        'admin_password',
    ];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
