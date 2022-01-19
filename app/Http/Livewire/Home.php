<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $date1;
    public $date2;

    public function render()
    {
        return view('livewire.home');
    }
}
