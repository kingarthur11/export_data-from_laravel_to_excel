<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\ProfileExport;
use Excel;

class ProfileController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function addUser(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required|max:255',

        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
               
        ]);
       return redirect()->route('dashboard');
    }

    public function exportIntoExcel()
    {
        return Excel::download(new ProfileExport, 'employeelist.xlsx');
    }
}
