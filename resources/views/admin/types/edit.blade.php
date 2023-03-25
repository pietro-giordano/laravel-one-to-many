@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  <h1>Modifica Tipologia</h1>
                  <a href="{{ route('admin.types.index') }}" class="btn btn-info">
                        Torna indietro
                  </a>
            </div>
      </div>

      @include('partials.errors')

      <div class="row mb-4">
            <div class="col">
                  <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
                        @csrf

                        @method('PUT')

                        <div class="mb-3">
                              <label for="name" class="form-label">Nome tipologia *</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{ old('name'), $type->name }}" placeholder="Inserisci il nome nuova tipologia..." required maxlength="128">
                        </div>

                        <p>I campi contrassegnati con * sono obbligatori</p>

                        <div>
                              <button type="submit" class="btn btn-warning">
                                    Modifica
                              </button>
                        </div>
                  </form>
            </div>
      </div>
</div>
@endsection