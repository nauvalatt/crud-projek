<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\barang as ModelsBarang;
use App\Models\kategori as ModelsKategori;
use Livewire\WithPagination;

class BarangIndex extends Component
{
    public $kategoris; // Properti untuk menyimpan kategori
    public $selectedCategory = null; // Untuk menyimpan kategori yang dipilih

    public $merk, $seri, $spesifikasi, $stok; // Properti form lainnya

    protected $rules = [
        'selectedCategory' => 'required', // Pastikan kategori dipilih
        'merk' => 'nullable|max:30',
        'seri' => 'nullable|max:40',
        'spesifikasi' => 'nullable',
        'stok' => 'required|integer',
    ];

    public function mount()
    {
        // Memuat data kategori saat komponen diinisialisasi
        $this->kategoris = ModelsKategori::all();
    }

    public function render()
    {
        $databarang = ModelsBarang::with('kategori')->orderBy('id', 'asc')->paginate(2);
    
        return view('livewire.barang-index', [
            'barangs' => $databarang,
            'kategoris' => $this->kategoris, // Mengirim data kategori ke view
        ]);
    }


    public function create(){
    return redirect()->route('create-route-name');
    }
    public function store()
    {
        // Validasi data
        $validate = $this->validate();
    
    
        // Simpan data barang dengan kategori yang dipilih
        ModelsBarang::create([
            'kategori_id' => $this->selectedCategory,
            'merk' => $this->merk,
            'seri' => $this->seri,
            'spesifikasi' => $this->spesifikasi,
            'stok' => $this->stok,
        ]);
    
        $this->resetForm();
        session()->flash('message', 'Barang berhasil ditambahkan.');
    }
    
    private function resetForm()
    {
        $this->selectedCategory = null;
        $this->merk = '';
        $this->seri = '';
        $this->spesifikasi = '';
        $this->stok = '';
    }
}
