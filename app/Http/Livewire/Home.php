<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    
    public function help()
    {
        redirect()->route('help.index');
    }
    
    public function render()
    {
        return view('livewire.home');
    }
}
