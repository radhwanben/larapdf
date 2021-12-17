@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="col-md-2">
                    <a href="{{ route('articles.create') }}" class="btn btn-success" >Create New </a> 
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                    <div class="container table-responsive py-5">
                    <a href="{{route('articles.index')}}" class="btn btn-primary">Articles</a>
                    <a href="{{route('all')}}" class="btn btn-light">generate pdf</a>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
