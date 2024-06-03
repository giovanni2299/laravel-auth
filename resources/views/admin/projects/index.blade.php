@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Progetti di Giovanni sorretnino</h1>
    <div class="row">
        @foreach ($projects as $project)
                <div class="col-3">
                    ciao
                </div>
            
        @endforeach
        
    </div>
</div>
    
@endsection