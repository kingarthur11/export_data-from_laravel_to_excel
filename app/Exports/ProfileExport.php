<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProfileExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'id',
            'firstname',
            'lastname',
            'phonenumber',
            'email'
        ];  
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Profile::all();
        return collect(User::getProfile());
    }
}
