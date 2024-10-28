<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // $fillable give columns for save in database -- mass assignment
    // protected $fillable = ['name', 'email', 'phone', 'joining_date', 'salary', 'is_active'];
    // protected $guarded = ['eamil', 'name'] this is for not fill column if we didnot want to save in database []-> for all column fill imp.
    protected $guarded = [];
}
