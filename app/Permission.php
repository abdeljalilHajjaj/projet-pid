<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
travail de Bilalit
*/

class Permission extends Model
{

    public function Role(){

        return $this->belongsToMany('App\Role','permission_role','id');
    }

}

