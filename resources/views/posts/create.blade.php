@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add new post</h1>
                </div>
                
                <div class="row">
                    <label for="caption" class="col-md-4 col-form-label">Image Caption</label>

                    <input id="caption" 
                           type="text" 
                           class="form-control"
                           name="caption" value="{{ old('caption') }}" 
                           required autocomplete="caption" autofocus>

                    @if($errors->has('caption'))
                            <strong>{{ $errors->first('caption') }}</strong>
                    @endif
                </div>
            
                <div class="row pt-3">

                    <label for="image" class="col-form-label pr-3">Image</label>

                    <input type="file" class="form-control-file" name="image" id="image">
                    @if ($errors->has('image'))
                            <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>
                
                <div class="row pt-3">
                    <button class="btn btn-primary" action="submit">submit</button>
                </div>
                
            </div>
        </div>
    </form>
</div>
@endsection

