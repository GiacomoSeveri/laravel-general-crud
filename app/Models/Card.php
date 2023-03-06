<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'name_card', 'type_card', 'ed', 'effect', 'text', 'force', 'costitution'];
}
