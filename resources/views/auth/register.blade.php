@extends('layouts.app')

@section('content')
<form method="POST">
    @csrf

    <label>{{ __('Name') }}</label>
    <input type="text" name="name" />

    <label>{{ __('Email') }}</label>
    <input type="text" name="email" />

    <label>{{ __('Confirm Password') }}</label>
    <input type="password" name="password" />

    <label>{{ __('Confirm Password') }}</label>
    <input type="password" name="password_confirmation" />

    <button>
        Submit
    </button>
</form>
@endsection
