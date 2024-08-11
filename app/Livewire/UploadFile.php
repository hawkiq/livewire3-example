<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class UploadFile extends Component
{
    use WithFileUploads;


    public $file;

    public function mount()
    {
        // Debug the initial state
        logger('Component mounted with:', ['uploadedFile' => $this->file]);
    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required',
        ]);
    }

    public function upload()
    {
        dd('Upload');
        $path = $this->file->store('uploads', 'public');
        $size = $this->file->getSize();
        $ext = $this->file->extension();
        $name = $this->file->getClientOriginalName();

        Upload::create([
            'name' => $name,
            'path' => $path,
            'size' => $size,
            'ext' => $ext,
        ]);
        session()->flash('message', 'File uploaded successfully.');
        $this->file = null;
        $this->dispatch('update-list');
    }


    public function render()
    {
        return view('livewire.upload-file');
    }
}
