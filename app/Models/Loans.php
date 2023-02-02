<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'email',
        'contact',
        'plan_data',
        'loan_purpose',
        'desire_loan',
        'desire_downpayment',
        'desire_term',
        'drivers_license'
    ];
}
