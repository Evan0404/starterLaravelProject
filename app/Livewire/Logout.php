<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        $this->redirect('/login', navigate : true);
    }

    public function render()
    {   
        if(!Auth::check()){
            $this->redirect('/login', navigate:true);
        }
        return view('livewire.logout');
    }
}
