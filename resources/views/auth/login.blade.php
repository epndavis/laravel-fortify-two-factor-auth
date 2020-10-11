@extends('layouts.app')

@section('content')
<form method="POST">
    @csrf

    <label>{{ __('Email') }}</label>
    <input type="text" name="email" />

    <label>{{ __('Password') }}</label>
    <input type="password" name="password" />

    <button>
        Submit
    </button>
</form>
@endsection
