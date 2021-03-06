@extends('layout.master')
@section('content')
    <ul>
        @foreach($users as $user)
            <li>Username : {{$user['username']}}</li>
            <li>Password : {{$user['password']}}</li>
            <li>Email : {{$user['email']}}</li>
            <li>Image : <img src="images/{{$user['image']}}" width="100" height="100"></li>
            <li><a href="/user/{{$user['id']}}">Edit</a></li>
            <li><a href="/user/{{$user['id']}}/delete">Delete</a></li>
        @endforeach
    </ul>
    {{@$_REQUEST['message']}}
@endsection