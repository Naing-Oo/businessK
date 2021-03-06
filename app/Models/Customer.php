<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =[
        "customer_group_id", "user_id", "name", "company_name",
        "email", "phone_number", "credit_term", "salesman", "id_card", "tax_no", "address", "city",
        "state", "postal_code", "country", "points", "deposit", "expense", "is_active"
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
