<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|string|min:3',
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.post', [
            'posts' => ModelsPost::all()
        ]);
    }

    public function insert()
    {
        $this->validate();
        ModelsPost::create(['description' => $this->description, 'done' => false]);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->description = "";
    }
}
