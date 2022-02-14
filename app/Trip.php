<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // aggiunto protected per forzare il collegamento
    protected $table = 'trip';
}
