<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Form extends Component implements HasForms
{
    use InteractsWithForms;

    public $name;
    public $email;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name'),
            TextInput::make('email')->email()->required(),
        ];
    }

    public function render()
    {
        return view('livewire.form');
    }
}
