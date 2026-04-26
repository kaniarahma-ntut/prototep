@extends('layout.app')

@section('title', 'Pengelolaan Jadwal')

@section('navbar')
    <x-navbar />
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-ken-dark p-6 sm:p-8 rounded-2xl shadow-xl border border-ken-teal/20">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4 text-center sm:text-left">
            <div>
                <h1 class="font-header text-3xl font-bold text-ken-teal mb-2">Pengelolaan Jadwal Streaming</h1>
                <p class="font-body text-ken-light/70">Atur jadwal live stream untuk channel Ken.</p>
            </div>
            <button class="bg-ken-teal hover:bg-teal-500 text-ken-bg px-6 py-3 rounded-lg font-bold transition-all shadow-[0_0_15px_rgba(79,179,162,0.3)] flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Jadwal
            </button>
        </div>

        <div class="overflow-x-auto rounded-xl border border-ken-light/10">
            <table class="w-full text-left border-collapse min-w-[600px]">
                <thead>
                    <tr class="bg-ken-bg text-ken-sand font-header text-lg border-b border-ken-light/10">
                        <th class="p-4 font-semibold">Hari</th>
                        <th class="p-4 font-semibold">Jam</th>
                        <th class="p-4 font-semibold">Game</th>
                        <th class="p-4 font-semibold">Tipe Stream</th>
                    </tr>
                </thead>
                <tbody class="font-p text-ken-light">
                    @foreach($jadwal as $j)
                    <tr class="border-b border-ken-light/5 hover:bg-ken-light/5 transition-colors">
                        <td class="p-4">{{ $j['hari'] }}</td>
                        <td class="p-4">
                            <span class="bg-ken-teal/20 text-ken-teal px-3 py-1 rounded-full text-sm font-semibold">{{ $j['jam'] }}</span>
                        </td>
                        <td class="p-4">{{ $j['game'] }}</td>
                        <td class="p-4">{{ $j['tipe'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
