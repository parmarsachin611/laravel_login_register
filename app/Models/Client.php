<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

	protected $fillable = [
        'name',
        'address',
        'state',
        'country',
        'contact_person',
        'contact_number',
        'alternate_contact_number',
        'tax_registration_number',
        'date_of_registration',
        'tax_period',
        'trn_certificate',
        'created_by',
        'is_active'
    ];

    protected $hidden = [
        'account_id',
        'remember_token',
    ];
	

	protected $casts = [
        'created_at' => 'datetime',
    ];

}
