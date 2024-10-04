<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <div class="container">
        @if ($errors->any())
            <div class="pt-3">
                <div class="alert alert-danger"></div>
                <ul>
                    @foreach ($errors->all() as $barangs)
                        <li>{{ $barangs }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('message'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
        </div>
            
        @endif
        <!-- START FORM -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" wire:model="merk">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seri" class="col-sm-2 col-form-label">Seri</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" wire:model="seri">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" wire:model="spesifikasi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" wire:model="stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="spesifikasi" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select wire:model="selectedCategory" id="kategori" class="form-control">
                            <option value="">Pilih kategori</option>
                            @if ($kategoris && $kategoris->count() > 0)
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                @endforeach
                            @else
                                <option value="">Tidak ada kategori tersedia</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary" name="submit"
                        wire:click="store()">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
