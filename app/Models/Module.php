<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    use HasFactory;
    public function teacher():BelongsTo{
        return $this->belongsTo(Teacher::class);
    }

    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }
}
