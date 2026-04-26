@extends('layout.app')

@section('title', 'Dashboard')

@section('navbar')
    <x-navbar />
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-24">
    <div class="text-center space-y-4 pt-8">
        <h1 class="font-header text-4xl sm:text-5xl font-bold text-ken-light">Welcome to the stream, <span class="text-ken-teal">{{ $username }}</span>!</h1>
        <p class="font-body text-lg sm:text-xl text-ken-sand">Enjoy the chill vibes and late-night gaming.</p>
    </div>

    <div id="clips" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Clips & Highlights</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">Crazy Valorant Clutch</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">1v5 situation with 10 HP.</p>
                </div>
            </div>
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/jNQXAC9IVRw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">Chill Minecraft Build</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">Building the ultimate base.</p>
                </div>
            </div>
            <div class="bg-ken-dark rounded-xl overflow-hidden shadow-lg border border-ken-teal/10 hover:border-ken-teal/40 transition-colors">
                <div class="aspect-[9/16] w-full relative">
                    <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/9bZkp7q19f0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="p-4">
                    <h3 class="font-header font-semibold text-lg text-ken-light">Funny Stream Moments</h3>
                    <p class="font-p text-sm text-ken-light/60 mt-1">Trying not to laugh challenge.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="arts" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Fanart Gallery</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('art1.jpg') }}" alt="Fanart 1" onerror="this.src='https://placehold.co/400x400/1E2A38/4FB3A2?text=Art+1'" class="w-full aspect-square object-cover rounded-md">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('art2.jpg') }}" alt="Fanart 2" onerror="this.src='https://placehold.co/400x400/1E2A38/4FB3A2?text=Art+2'" class="w-full aspect-square object-cover rounded-md">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('art3.jpg') }}" alt="Fanart 3" onerror="this.src='https://placehold.co/400x400/1E2A38/4FB3A2?text=Art+3'" class="w-full aspect-square object-cover rounded-md">
            </div>
            <div class="bg-ken-dark rounded-lg p-2 border border-ken-teal/20 transform hover:scale-105 transition-transform">
                <img src="{{ asset('art4.jpg') }}" alt="Fanart 4" onerror="this.src='https://placehold.co/400x400/1E2A38/4FB3A2?text=Art+4'" class="w-full aspect-square object-cover rounded-md">
            </div>
        </div>
    </div>

    <div id="reviews" class="scroll-mt-24">
        <div class="flex items-center gap-4 mb-8">
            <h2 class="font-header text-3xl font-bold text-ken-teal">Game Reviews</h2>
            <div class="h-px bg-ken-teal/30 flex-grow"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-ken-dark p-6 rounded-xl border-l-4 border-ken-sand shadow-lg">
                <h3 class="font-header text-xl font-bold text-ken-light mb-2">Elden Ring</h3>
                <div class="flex gap-1 mb-4 text-ken-sand">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="font-p text-ken-light/80 leading-relaxed">Game yang bikin begadang dan stress bareng. Tapi kepuasan waktu ngalahin boss-nya ga ada lawan. Wajib dimainin buat yang suka tantangan.</p>
            </div>
            <div class="bg-ken-dark p-6 rounded-xl border-l-4 border-ken-teal shadow-lg">
                <h3 class="font-header text-xl font-bold text-ken-light mb-2">Stardew Valley</h3>
                <div class="flex gap-1 mb-4 text-ken-sand">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>☆</span>
                </div>
                <p class="font-p text-ken-light/80 leading-relaxed">Pilihan tepat buat chill stream malam hari pas lagi capek tugas kuliah. Santai, musiknya enak, dan bikin rileks banget.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
