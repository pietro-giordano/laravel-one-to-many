@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  @include('partials.success')

                  <h1>{{ $project->title }}</h1>
                  
                  <h5>Slug: {{ $project->slug }}</h5>

                  <p>{{ $project->description }}</p>

                  @if ($project->image)
                        <div>
                              <img class="mb-3 w-50" src="{{ asset('storage/'.$project->image) }}" alt="">
                        </div>
                  @endif

                  <a href="{{ route('admin.projects.index') }}" class="btn btn-info">
                        Torna indietro
                  </a>
            </div>
      </div>
</div>
@endsection