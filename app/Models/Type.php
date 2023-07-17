<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table   = 'types';
    protected $guarded = [''];

    public function attributes()
    {
        return $this->hasMany(Attribute::class, 'atb_type_id', 'id' )->orderBy('atb_name', 'ASC');
    }
}
