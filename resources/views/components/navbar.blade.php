<nav class="bg-ken-dark/80 backdrop-blur-md sticky top-0 z-50 shadow-lg border-b border-ken-teal/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="flex items-center gap-3">
                    <img class="h-10 w-10 rounded-full object-cover border-2 border-ken-teal" src="{{ asset('ken.png') }}" alt="Logo Ken" onerror="this.src='https://ui-avatars.com/api/?name=Ken&background=4FB3A2&color=fff'">
                    <span class="font-header font-semibold text-xl text-ken-light tracking-wide">Ken<span class="text-ken-teal">.</span></span>
                </a>
            </div>
            <div class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Dashboard</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#clips" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Clips</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#arts" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Arts</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#reviews" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Reviews</a></li>
                    <li><a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Pengelolaan</a></li>
                </ul>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="text-ken-sand hover:text-white transition-colors font-medium flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    Profil
                </a>
                <a href="{{ route('logout') }}" class="bg-ken-teal hover:bg-teal-500 text-ken-bg px-5 py-2 rounded-lg font-semibold transition-all shadow-[0_0_15px_rgba(79,179,162,0.3)]">Logout</a>
            </div>
        </div>
    </div>
</nav>
