@extends('layouts.app')

  
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show article</h2>
            </div>

        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $article->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description:</strong>
                {!! $article->body !!}
            </div>
        </div>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
        <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
    </div>
@endsection
