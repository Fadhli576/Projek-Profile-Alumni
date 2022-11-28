<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni_profiles';
    protected $guarded = ['id'];


    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name','like','%'.$search.'%');
        }); 

        $query->when($filters['major_id'] ?? false, function($query, $major){
            return $query->where('major_id','like','%'.$major.'%');
        }); 

    }
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
