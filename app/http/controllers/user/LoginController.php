<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;

Use Str;
Use Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
   
    public function login_api()
    {
        //https://stackoverflow.com/questions/28459172/how-do-i-get-http-request-body-content-in-laravel

        /*cors
            https://stackoverflow.com/questions/56158474/cors-issue-with-react-app-and-laravel-api
        */
     
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
    
         session()->regenerate();

        return response()->json([
            'success'=>'login Successful !',
            'URL' => "../dashboard"
        ],200);
        
    }

}
