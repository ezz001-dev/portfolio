<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_title',
        'project_date',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
