<div>
    <form>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="seri" class="col-sm-2 col-form-label">Seri</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="number" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="spesifikasi" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select id="kategori" class="form-control">
                    <option value="">Pilih kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="button" class="btn btn-primary" name="submit" wire:click="store()">SIMPAN</button>
            </div>
        </div>
    </form>
</div>
