@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">     
        </div>


        <div class="col-4 ">
            <div>
                <div class="d-flex align-items-center ">
                    <div >
                        <img class="rounded-circle" src="{{ $post->user->profile->profileImage() }}" style="height: 40px">
                    </div>
                    
                    <div class="pl-3">
                        <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        <a href="#">follow</a>
                    </div>
                </div>
                <hr>
                <div>
                    <span>
                        <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                    </span>
                    {{ $post->caption}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

