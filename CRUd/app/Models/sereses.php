<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sereses extends Model
{
    use HasFactory;
    protected $table ='sereses';
    protected $primaryKey = 'id';
    protected $fillable=['name', 'image', 'name_of_create', 'category', 'date_creation'];
}
