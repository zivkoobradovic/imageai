<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\RenderImageAI;


class MainForm extends Component
{
    public $imageService;
    public function render()
    {
        $this->imageService = RenderImageAI::test();
        return view('livewire.main-form');
    }
}
