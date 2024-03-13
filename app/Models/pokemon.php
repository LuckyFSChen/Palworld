<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    use HasFactory;
    protected $table = 'pokemon';
    protected $fillable = [
        'name',
        'hp',
        'mp',
        'atk',
        'def',
        'skill_1',
        'skill_2',
        'skill_3',
        'skill_4',
        'article',
    ];
}
