<x-main>
    <h2 class="d-flex justify-content-center">CREA</h2>
    <div class="d-flex justify-content-center">
        <form action="{{ route('categorys.store') }}" method="POST" enctype="multipart/form-data" class="col-md-4 ">
            @method('POST')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"
                    placeholder="Inserisci la categoria">
                <label for="name">Nome categoria</label>
                @error('name')
                    <span class="text-danger">
                         Nome Categoria obbligatoria!
                    </span>
                @enderror
            </div>

           

            <div class="d-grid gap-3">
                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
            </div>
        </form>
    </div>



</x-main>