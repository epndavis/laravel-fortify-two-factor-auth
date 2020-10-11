@extends('layouts.app')

@section('content')
<form method="POST" action="/two-factor-challenge">
    @csrf

    <label>{{ __('Code') }}</label>
    <input type="text" name="code" />

    <button>
        Login
    </button>
</form>
@endsection
