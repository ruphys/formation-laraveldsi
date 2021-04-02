<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        "phone_number",
        'password',
        "role_id",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone_number;
    }

    public function role()
    {
        return $this->BelongsTo(Role::class);
    }

    public function isAdmin()
    {
        if($this->role->role=="admin" OR $this->role->role=="super-admin" )
            return true;
        else
            return false;
    }
}
