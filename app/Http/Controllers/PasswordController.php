<?php


namespace App\Http\Controllers;
use App\Models\Password;

class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function generate()
    {
        $password = new Password();
        $password->save();
        return response()->json($password, 200);
    }
    

    //
}
