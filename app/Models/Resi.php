<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    protected $fillable = [
        'agen',
        'no_resi',
        'status_bagging'
    ];
}
