<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    
    protected $table = "tbl_voucher";
    protected $primaryKey = "voucher_id";

    public $timestamps  = false;
}
