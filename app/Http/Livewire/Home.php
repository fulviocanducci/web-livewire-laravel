<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    
    public function help()
    {
        return $this->redirectRoute('help.index');
    }
    
    public function render()
    {
        return view('livewire.home');
    }
}
