@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-lg-5 pt-2">
            <img class="rounded-circle p-3" style="width: 100%" src="{{ $user->profile->profileImage() }}">
        </div>
        <div class="col-9 pt-4">
            <div class="d-flex justify-content-between align-bottom pb-3">
                <div class="d-flex align-items-center">
                    <div class="h4 pt-2">{{ $user->username }}</div> 
                    <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>
            @can('update', $user->profile)
                <button><a href="/p/create">add post</a></button>
            @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{ $user->profile->id }}/edit">edit user</a>
            @endcan
            <div class="d-flex pb-2">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-3"><strong>{{ $user->profile->followers->count() }}</strong> Followers</div>
                <div class="pr-3"><strong>{{ $user->following->count() }}</strong> Following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong>

            </div>
            <div>{{ $user->profile->description }}
            </div>
            <div><a href="#" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
        
    </div> 
    
    <div class="row pt-5 ">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img class="w-100" src="/storage/{{ $post->image}}">
            </a>
        </div>
        @endforeach
    </div> 
</div>
@endsection 

