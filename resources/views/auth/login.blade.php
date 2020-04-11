@extends('layouts.auth', ['title' => __('Sign in')])

@section('content')
<div class="w-full max-w-sm mx-auto p-8">
    <h1 class="text-center mb-8 font-bold text-3xl">{{ config('app.name') }}</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="bg-white rounded shadow w-full">
            <div class="flex flex-col w-full p-6">
                <div class="mb-6">
                    <label for="email" class="mb-2 block">{{ __('Email Address') }}</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="rounded p-2 h-12 border bg-white rounded w-full" placeholder="john@doe.com">
                    @error('email')
                    <div class="text-xs text-red-600 font-semibold mt-1">{{ $errors->first('email') }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="mb-2 block">{{ __('Password') }}</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="rounded p-2 h-12 border bg-white rounded w-full" placeholder="******">
                    @error('password')
                    <div class="text-xs text-red-600 font-semibold mt-1">{{ $errors->first('password') }}</div>
                    @enderror
                </div>
            </div>
            <div class="p-6 flex items-center bg-gray-100 rounded-b">
                <button type="submit" class="flex items-center justify-center w-full h-12 px-4 rounded bg-gray-800 text-white | hover:bg-gray-900">{{ __('Sign in') }}</button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection
