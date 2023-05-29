@extends('layouts.master')

@section('content')
<div id="find-friends">
    <div class="group-list-find-friends">
        <div class="foto-find-friends">
            <img src="{{ asset('photo-profile/default.png') }}" alt="">
        </div>
        <h2 class="name-find-friends">Kuntomo Argo</h2>
        <form action="#">
            <input type="hidden" value="1">
            <button type="submit" id="btn-add-friends">Add Friends</button>
        </form>
    </div>
</div>

@endsection