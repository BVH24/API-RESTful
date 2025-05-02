<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#Creacion de campos Title y content 
class Note extends Model
{
    protected $fillable = ['title', 'content'];
}
