<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;



class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.login')->extends('components.layouts.app')->section('content');
    }

    public function rules() {
        return [
            'email' => ['required','email'],
            'password' => ['required'],
        ];
    }

    public function login() {
        $throttleKey = strtolower($this->email) . '|' . request()->ip;
        if(RateLimiter::tooManyAttempts($throttleKey, 6)){
            $this->addError('email',__('auth.throttle', [
                'secconds' => RateLimiter::availableIn($throttleKey)
            ]));
            return null;
        }

        if(!Auth::attempt($this->only(['email', 'password']))){

            RateLimiter::hit($throttleKey);

            $this->addError('email', __('auth.failed'));
            return null;
        }

        return $this->redirect('/dashboard', navigate: true);
    }
}
