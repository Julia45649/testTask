@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-form">
                <h1>Sign in</h1>
                <div id="wrong"></div>
                <div class="form-group">
                    <img src="{{asset('images/user_icon.png')}}" class="user-name">
                    <input type="text" class="form-control" placeholder="Username " id="userName" onkeyup="validate()" onclick="validate()" required>
                </div>
                <div class="form-group log-status">
                    <img src="{{asset('images/pass_icon.png')}}" class="password">
                    <input type="password" class="form-control" placeholder="Password" id="password" onkeyup="validate()" onclick="validate()" required>
                </div>
                <a class="link" href="#">Lost your password?</a>
                <button type="button" class="log-btn" id="sub" onclick="postAjax()" >Log in</button>
            </div>
        </form>
    </div>
</div>
    <script src="{{asset('js/script.js')}}" type="application/javascript"></script>

@endsection
