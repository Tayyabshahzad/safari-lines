<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'state',
        'city',
        'country',
        'security_question',
        'security_answer',
        'address_01',
        'address_02',
        'phone_number',
        'post_code',
        'service_provider_category_id ',

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
