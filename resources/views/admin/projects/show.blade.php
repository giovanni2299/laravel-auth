@extends('layouts.app')

@section('content')
    <div class="row justify-content-center p-5">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    ecco il progetto che hai visualizzato:
                    {{$project->title}}
                </div>
                <div class="card-body">
                    <p>{{$project->slug}}</p>
                    <p>{{$project->description}}</p>

                    <div class="d-flex gap-2">
                        <a class="btn me-2 btn-primary" href="{{ route('admin.projects.edit', $project) }}">edita personaggio  </a>

                        <form action="{{ route('admin.projects.destroy',$project) }}" method="POST">
                          @method('DELETE')
                          @csrf
          
                          <button class="btn btn-danger" href="">elimina personaggio</button>
          
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection