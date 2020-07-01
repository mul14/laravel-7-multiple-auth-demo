@extends('layout')

@section('content')

<div class="mb-10 text-center">
    Welcome, {{ auth(session('guard'))->user()->username }}
</div>

<form method="POST" action="/logout">
    @csrf
    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded w-full">Logout</button>
</form>

@endsection
