<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especimen extends Model
{
    use HasFactory;
    
    protected $table;

    function __construct($tabla)
    {
        $this->table = $tabla['db'];

    }
}
