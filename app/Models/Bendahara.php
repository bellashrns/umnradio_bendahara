<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bendahara extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'value',
        'notes',
        'status'
    ];
    
    protected $guarded = ['id'];
}