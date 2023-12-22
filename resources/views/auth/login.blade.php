<!-- resources/views/home.blade.php -->

@extends('layouts.auth')

@section('title', 'Home')

@section('content')
    <div class="wrapper flex flex-col justify-center items-center">
        <x-card title="Login">
            <div id="login-alert"></div>
            <form action="" class="flex flex-col gap-2" hx-post='/api/auth/login' hx-target="#login-alert"
                hx-swap="innerHTML">
                <label for="email">Email</label>
                <input name="email" type="email" class="border border-solid rounded h-8 p-2" required>
                <label for="password">Password</label>
                <input name="password" type="password" class="border border-solid rounded h-8 p-2" required>
                <div class="flex gap-2">
                    <input type="checkbox" name="remember_me" id="">
                    <span>Remember me</span>
                </div>
                <button class="w-full bg-blue-500 mt-4 h-8 rounded text-white shadow-sm" type="submit">Masuk</button>
            </form>
        </x-card>
    </div>
@endsection
