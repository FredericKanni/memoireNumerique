<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{ /*
    login api *
    @return \Illuminate\Http\Response */


    public function login(Request $request)
    {

        // $array = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'password' => 'required'
        // ], ['required' => 'l\'attribut :attribute est requis'])->validate();
        if (Auth::attempt([
            'name' => request('name'),
            'password' => request('password')
        ])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('myApp')->accessToken;
            return response()->json(['success' => $success], 200);
        } 
        else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
        // return json_encode($array);
    }




    /*
    Register api *
    @return \Illuminate\Http\Response */
    /* public function register(Request $request) {
          $validator = FacadesValidator::make($request->all(),
           [ 'name' => 'required',
            'email' => 'required|email','password' => 'required', 'confirm_password' => 'required|same:password', ]);
             if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401); }
                $input = $request->all(); $input['password'] = bcrypt($input['password']);
                $user = User::create($input); $success['token'] = $user->createToken('myApp')->accessToken; 
                $success['name'] = $user->name;
                return response()->json(['success'=>$success], 200); } 
                  */
    public function token()
    {
        return view('admin/deconnexion');
    }
}