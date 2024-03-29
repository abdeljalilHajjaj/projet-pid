<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use TCG\Voyager\Traits\VoyagerUser;


class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    use VoyagerUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    'login', 'password','firstname','lastname','email','langue'


    ];

    protected $table='users';

    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role(){

        return $this->belongsTo('App\Role');
    }


     public function reservation(){

    return $this->hasOne('App\Reservation');

   }

}
