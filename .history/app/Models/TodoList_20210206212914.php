<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'todolists';
    protected $fillable = [
        'task_name','task_description'
    ];
}
