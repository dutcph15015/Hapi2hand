<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comments extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class,'cmt_user_id','id');
    }

    public function reply()
    {
        return $this->hasMany(Comments::class,'cmt_parent_id','id');
    }
}
