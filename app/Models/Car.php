<?php

namespace App\Models;

use App\Models\Owners;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    public function owners()
    {
        return $this->belongsTo(Owners::class);
    }

}
