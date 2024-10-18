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
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2 w-4 h-4 text-blue-600  border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 bg-gray-700 dark:border-gray-600">
                        <label for="remember">Remember Me</label>
                    </div>
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


