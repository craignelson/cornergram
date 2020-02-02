@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method ('PATCH')
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                
                <div class="row">
                    <label for="title" class="col-md-4 col-form-label">title</label>

                    <input id="title" 
                           type="text" 
                           class="form-control"
                           name="title" 
                           value="{{ old('title') ?? $user->profile->title }}" 
                           required autocomplete="title" autofocus>

                    @if($errors->has('title'))
                            <strong>{{ $errors->first('title') }}</strong>
                    @endif
                </div>



                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">description</label>

                    <input id="description" 
                           type="text" 
                           class="form-control"
                           name="description" 
                           value="{{ old('description') ?? $user->profile->description }}" 
                           required autocomplete="description" autofocus>

                    @if($errors->has('description'))
                            <strong>{{ $errors->first('description') }}</strong>
                    @endif
                </div>

                <div class="row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url" 
                           type="text" 
                           class="form-control"
                           name="url" value="{{ old('url') ?? $user->profile->url }}" 
                           required autocomplete="url" autofocus>

                    @if($errors->has('url'))
                            <strong>{{ $errors->first('url') }}</strong>
                    @endif
                </div>
            
                <div class="row pt-3">

                    <label for="image" class="col-form-label pr-3">Profile Image</label>

                    <input type="file" class="form-control-file" name="image" id="image">
                        @if ($errors->has('image'))
                                <strong>{{ $errors->first('image') }}</strong>
                        @endif
                </div>
                
                <div class="row pt-3">
                    <button class="btn btn-primary" action="submit">Save Profile</button>
                </div>
                
            </div>
        </div>
    </form>
</div>
@endsection

