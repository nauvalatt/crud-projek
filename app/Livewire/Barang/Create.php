<?php

namespace App\Livewire\Barang;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required')]
    public $merk;
    #[Validate('required')]
    public $seri;
    #[Validate('required')]
    public $spesifikasi;
    #[Validate('required')]
    public $stok;
    #[Validate('required')]
    public $kategori_id;

    public function store()
    {
        dd($this->validate());
    }

    public function render()
    {
        return view('livewire.barang.create', [
            'categories' => Kategori::all(),
        ]);
    }
}
