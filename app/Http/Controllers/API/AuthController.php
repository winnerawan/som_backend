<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use \Illuminate\Http\Response as Res;
use Validator;
use Auth;
use App\Repository\Transformers\UserTransformer;

class AuthController extends ApiController
{

    public function __construct(userTransformer $userTransformer) {
        $this->userTransformer = $userTransformer;
    }

    public function authenticate(Request $request) {

        $rules = array (

            'email' => 'required|email',
            'password' => 'required',

        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator-> fails()){
            return $this->respondValidationError('Fields Validation Failed.', $validator->errors());
        } else {
            $account = \App\User::where('email', $request['email'])->first();
            if ($account) {
                return $this->_login($request['email'], $request['password']);
            }
            else{
                return $this->respondWithError("Invalid Email or Password");
            }
        }
    }

    private function _login($email, $password)
    {
        $credentials = ['email' => $email, 'password' => $password];
        $account = Auth::attempt($credentials);

        if ($account) {
            $user = \App\User::where('email', $email)->first();
            return $this->respond([
                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Login successful!',
                'account' => $user
            ]);
        } else {
            return $this->respond([
                'error' => true,
                'status' => 'Wrong Auth',
                'status_code' => $this->getStatusCode(),
                'message' => 'Login Unsuccessful!',
            ]);
        }
        
    }

    public function register(Request $request) {
        $rules = array (
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required',
            'company' => 'required',
            'position' => 'required',
            'phone' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator-> fails()){
            return $this->respondValidationError('Fields Validation Failed.', $validator->errors());
        }
        else {    
            $user = \App\User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'company' => $request['company'],
                'position' => $request['position'],
                'phone' => $request['phone'],
            ]);

            return $this->respond([
                'error' => false,
                'status' => 'success',
                'status_code' => $this->getStatusCode(),
                'message' => 'Register successful!',
                'account' => $user
            ]);
        }
    }
}
