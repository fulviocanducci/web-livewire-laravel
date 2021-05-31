<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Help extends Component
{
    public function render()
    {
        return view('livewire.help');
    }

    public function home()
    {
        return $this->redirectRoute('home.index');
    }
}
