<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Closure;
use Illuminate\Support\Facades\Http;

class ServiceProvoviderController extends Controller
{
    public function StoreServiceProvider(Request $request)
    {

        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string',  'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'confirm_password' => ['required', 'string',  'max:255'],
            'password' => ['required', 'string',  'max:255'],
            'city' => ['required', 'string',  'max:255'],
            'country' => ['required', 'string',  'max:255'],
            'g-recaptcha-response' => ['required',function (string $attribute, mixed $value, Closure $fail) {
                $g_responce = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
                    "secret" => env('RECAPTCHA_SECRET_KEY'),
                    "response" => $value
                ]);
                if (!$g_responce->json('success')) {
                    $fail("The {$attribute} is invalid.");
                }
            },],
        ]);
        $user = User::create([
            'name' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('service-provider');

        $user->UserDetail()->create([
            'company_name' => $request->companyName,
            'state' => $request->state,
            'city' => $request->city,
            'country' => $request->country,
            'security_question' => $request->security_question,
            'security_answer' => $request->security_answer,
            'address_01' => $request->address_01,
            'address_02' => $request->address_02,
            'phone_number' => $request->phone_number,
            'post_code' => $request->post_code,
            'service_provider_category_id' => $request->service_provider_category_id,
        ]);


        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    public function StoreCustomer(Request $request)
    {

        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string'],
            'lastName' => ['required', 'string',  'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'confirm_password' => ['required', 'string',  'max:255'],
            'password' => ['required', 'string',  'max:255'],
            'city' => ['required', 'string',  'max:255'],
            'country' => ['required', 'string',  'max:255'],
            'g-recaptcha-response' => ['required',function (string $attribute, mixed $value, Closure $fail) {
                $g_responce = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[
                    "secret" => env('RECAPTCHA_SECRET_KEY'),
                    "response" => $value
                ]);
                if (!$g_responce->json('success')) {
                    $fail("The {$attribute} is invalid.");
                }
            },],
        ]);


        $user = User::create([
            'name' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('customer');

        $user->UserDetail()->create([
            'state' => $request->state,
            'city' => $request->city,
            'country' => $request->country,
            'security_question' => $request->security_question,
            'security_answer' => $request->security_answer,
            'address_01' => $request->address_01,
            'address_02' => $request->address_02,
            'post_code' => $request->post_code,
        ]);


        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
