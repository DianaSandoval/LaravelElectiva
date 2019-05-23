@extends('layouts.base')
@section('content')
LOS USUARIOS SON:
@foreach($users as $user)

ID= {{$user['id']}} NOMBRE={{$user['name']}}
@endforeach
@endsection
