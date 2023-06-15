<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\insertModel;

class insertModel extends Model
{
    protected $table = insert_Data;
    protected $fillable = [
        'name', 'class'
    ];
}
