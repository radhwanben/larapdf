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
                        <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Export</th>
                            <th scope="col">Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($articles as $article)
                            <tr>
                           <td>{{ $article->title }}</td>
                           <td>{!! $article->body !!}</td>
                           <td> <a href="" class="btn btn-warning">pdf</a> </td> 
                           <td><a href="" class="btn btn-success far fa-eye" > show</a>
                           <a href="" class="btn btn-primary fa fa-pen" >edit</a>
                                <a href="" class="btn btn-danger fa fa-trash" >delete</a>
                           </td>

                            </tr>
                            @endforeach
                          
                        </tbody>
                        </table>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
