@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="" action="{{ route('articles.store') }}" method="post">
              @csrf

                <div class="mb-3">
                    <label for="titre" class="form-label">Article Titre</label>
                    <input type="text" name="title"  class="form-control"  placeholder="Article Titre">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Article Description</label>
                    <textarea class="form-control" id="tinymce" name="body" rows="3" cols="40"></textarea>
                  </div>

                  <div class="mb-3">
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" />
                    <button class="from-control btn  btn-large btn-success">Save </button>
                    <a href="{{ route('articles.index') }}" class="btn btn-large btn-dark" >back</a>
                  </div>
            </form>
           
        </div>
    </div>
    
    
</div>

<script type="text/javascript">
    tinymce.init({
    selector: 'textarea#tinymce',
    height: 500,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
    content_css: '//www.tiny.cloud/css/codepen.min.css'
  });
      </script>




@endsection