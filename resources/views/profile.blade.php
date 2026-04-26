@extends('layout.app')

@section('title', 'Profil Admin')

@section('navbar')
    <x-navbar />
@endsection

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-ken-dark rounded-3xl overflow-hidden shadow-2xl border border-ken-teal/20 relative">
        <div class="h-48 bg-gradient-to-r from-ken-bg via-ken-teal/40 to-ken-bg relative">
            <div class="absolute inset-0 bg-[url('{{ asset('kenbg.png') }}')] bg-cover bg-center opacity-30"></div>
        </div>

        <div class="px-6 sm:px-8 pb-12 relative">
            <div class="-mt-20 mb-6 flex justify-center sm:justify-start">
                <img src="{{ asset('ken.png') }}" alt="Profile" onerror="this.src='https://ui-avatars.com/api/?name=Ken&background=4FB3A2&color=fff&size=150'" class="w-40 h-40 rounded-full border-4 border-ken-dark object-cover shadow-xl bg-ken-bg">
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-start gap-8">
                <div class="flex-1 text-center sm:text-left">
                    <h1 class="font-header text-4xl font-bold text-ken-light mb-1">{{ $profileData['nama'] }}</h1>
                    <p class="font-body text-ken-teal text-lg font-medium mb-4">{{ $profileData['role'] }}</p>
                    <p class="font-p text-ken-light/80 max-w-2xl leading-relaxed mx-auto sm:mx-0">
                        {{ $profileData['bio'] }}
                    </p>
                </div>

                <div class="bg-ken-bg p-5 rounded-xl border border-ken-teal/10 min-w-[220px] w-full sm:w-auto">
                    <h3 class="font-header text-ken-sand mb-3 font-semibold">System Info</h3>
                    <div class="space-y-3 font-p text-sm">
                        <div class="flex justify-between border-b border-ken-light/10 pb-2">
                            <span class="text-ken-light/60">Logged in as:</span>
                            <span class="text-ken-light font-medium">{{ $username }}</span>
                        </div>
                        <div class="flex justify-between border-b border-ken-light/10 pb-2">
                            <span class="text-ken-light/60">Status:</span>
                            <span class="text-green-400 font-medium">Online</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-ken-light/60">Access:</span>
                            <span class="text-ken-teal font-medium">Admin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
