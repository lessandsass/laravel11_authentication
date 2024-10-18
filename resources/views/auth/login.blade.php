@extends('layouts.app')

@section('content')
    <div class="text-slate-300 flex justify-center flex-col h-screen my-auto items-center">
        <div class="w-4/12 bg-slate-800 p-6 rounded-lg">

            @if (session('status'))
                <div class="mb-6 text-center font-medium bg-red-500 p-4 rounded-lg text-slate-100 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Your email address"
                        class="bg-slate-900 w-full border border-2 p-4 rounded-lg focus:outline-none @error('email') border-red-500 @else border-slate-600 @enderror"

                        value="{{ old('email') }}"
                    >

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        class="bg-slate-900 w-full border border-2 p-4 rounded-lg focus:outline-none @error('password') border-red-500 @else border-slate-600 @enderror"

                        value="{{ old('password') }}"
                    >

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-4">
                    <button
                        type="submit"
                        class="bg-blue-700 w-full font-medium p-4 rounded-lg text-slate-300 hover:bg-blue-600"
                    >
                        Login
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection


