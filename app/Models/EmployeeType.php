<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    use HasFactory;

    protected $primaryKey = "employee_type_id";

    protected $fillable = [
        "employee_type_id",
        "position"
    ];
}
