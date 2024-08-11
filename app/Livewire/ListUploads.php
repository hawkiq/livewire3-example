<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithPagination;

class ListUploads extends Component
{
    use WithPagination;

    #[On('update-list')]
    public function render()
    {
        return view('livewire.list-uploads', [
            'files' => Upload::paginate(6)
        ]);
    }
}
