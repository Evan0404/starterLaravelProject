<?php

namespace App\Livewire;

use Livewire\Component;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class Register extends Component
{
    public $name, $email, $password;

    public function render()
    {
        return view('livewire.register')->extends('components.layouts.app')->section('content');
    }

    public function rules() {
        return [
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required'],
        ];
    }

    public function save() {
        $this->validate();

        $user  = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user, true);
        return $this->redirect('/dashboard', navigate: true);
    }
}
