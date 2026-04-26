@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-ken-bg">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute inset-0 bg-gradient-to-tr from-ken-bg via-ken-dark to-ken-teal/30"></div>
    </div>
    <div class="relative z-10 w-full max-w-md p-8 bg-ken-dark/90 backdrop-blur-xl rounded-2xl shadow-2xl border border-ken-teal/30 mx-4">
        <div class="text-center mb-10">
            <h1 class="font-header text-4xl font-bold text-ken-light mb-2">Welcome Back<span class="text-ken-teal">.</span></h1>
            <p class="text-ken-sand font-body text-sm">Grab your coffee, let's play some games.</p>
        </div>
        <form action="{{ route('processLogin') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-ken-light mb-2 font-body">Username</label>
                <input type="text" name="username" id="username" required class="w-full px-4 py-3 bg-ken-bg border border-ken-teal/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-ken-teal text-ken-light font-p transition-all placeholder-gray-500" placeholder="Enter your username">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-ken-light mb-2 font-body">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-4 py-3 bg-ken-bg border border-ken-teal/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-ken-teal text-ken-light font-p transition-all placeholder-gray-500" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-ken-teal hover:bg-teal-500 text-ken-bg font-bold py-3 px-4 rounded-lg transition-all transform hover:-translate-y-1 shadow-[0_0_20px_rgba(79,179,162,0.4)]">
                Login to Dashboard
            </button>
        </form>
    </div>
</div>
@endsection
