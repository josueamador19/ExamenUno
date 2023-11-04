<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorios extends Model
{
    use HasFactory;
    
    protected $table = 'directorios';
    protected $primaryKey = 'codigoEntrada';
    public $incrementing = false;
    public $timestamps = false;

}
