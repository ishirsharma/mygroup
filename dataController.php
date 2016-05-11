<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\create_account;
class dataController extends Controller
{
    function create_account_view()
    {
    return view('create_account');
    }
    //
    public function insert()
    {
    $insert = new create_account;
    $insert->first_name = string::get('first_name');
    $insert->last_name = string::get('last_name');
    $insert->email = string::get('email');
    $insert->password = string::get('password');
    $insert->save();	
    }
}
