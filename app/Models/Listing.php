<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'logo', 'company', 'location', 'website', 'email', 'description', 'tags']; 

    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'Like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'Like', '%' . request('search') . '%')
                ->orWhere('description', 'Like', '%' . request('search') . '%')
                ->orWhere('tags', 'Like', '%' . request('search') . '%')
            ;
        }

    }
}
