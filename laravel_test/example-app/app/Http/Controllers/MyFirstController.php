<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    //
    public function test(){
        $variable1 = 'guirpreet';
        return view('welcome',compact('variable1') );
    }


    public function create(){
        return view('add_user');
    }

    public function store(Request $request){
        $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
        ]);
        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->password = $request->password;
        $company->save();
        return redirect()->route('companies.index')
        ->with('success','Company has been created successfully.');
            }
}
