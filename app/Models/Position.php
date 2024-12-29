<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // Relasi ke model Employee
    public function employees()
    {
        return $this->hasMany(Employee::class, 'position_id'); // Sesuaikan foreign key jika berbeda
    }
}
