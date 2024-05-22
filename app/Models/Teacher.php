<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'phone_number',
        'address',
    ];
    public function module():HasOne
    {
        return $this->hasOne(Module::class);
    }
}
