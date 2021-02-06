<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class profile extends Model
{
    use HasFactory;

    protected $table = "profiles";

    public static function getProfile()
    {
        $records = DB::table('profiles')->select('firstname', 'lastname', 'email', 'phonenumber')->get()->toArray();
        return $records;
    }
}
