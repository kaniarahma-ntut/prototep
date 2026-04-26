<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function showLogin() {
    //     return view('login');
    // }



    // }

    // public function showProfile(Request $request) {
    //     $username = $request->query('username');
    //     return view('profile', compact('username'));
    // }

    // public function showJadwal() {
    //     $jadwalStreaming = [
    //         ['game' => 'Wuthering Waves',  'hari' => 'Rabu', 'jam' => '19:00', 'platform' => 'YouTube'],
    //         ['game' => 'Hollow Knight Silksong', 'hari' => 'Jumat', 'jam' => '21:00', 'platform' => 'YouTube'],
    //     ];

    //     return view('pengelolaan', compact('jadwalStreaming'));
    // }

    // public function saveJadwal(Request $request) {
    //     $gameBaru = $request->input('nama_game');
    //     $hariBaru = $request->input('hari_stream');
    //     $jamBaru = $request->input('jam_tayang');

    //     return view('dashboard', [
    //         'game' => $gameBaru,
    //         'username' => $request->input('username') // agak wiu wiu. bisa lbih clean lagi!!!
    //     ]

    //     );
    // }

    public function login()
    {
        return view('login');
    }

        // public function login(Request $request) {
        // $request->validate([
        // 'username' => ['required', 'string', 'max:50', 'alpha_num'],
        // 'password' => ['required', 'string', 'min:3', 'max:100'],
        // ], [
        // 'username.required' => 'Username tidak boleh kosong.',
        // 'username.alpha_num' => 'Username hanya boleh huruf dan angka.',
        // 'username.max'      => 'Username maksimal 50 karakter.',
        // 'password.required' => 'Password tidak boleh kosong.',
        // 'password.min'      => 'Password minimal 3 karakter.',
        // 'password.max'      => 'Password maksimal 100 karakter.',
        // ]);


        // $username = $request->input('username');
        // $password = $request->input('password');
        // if ($username == "kentut" && $password=="123"){
        //     return view('dashboard', compact('username'));
        // }
        // else{
        //     return back()->with('error', 'Akun salah! Anda bukan Ken 😡'); // fitur laravel 😎
        // }
        // }

    // public function processLogin(Request $request)
    // {
    //     $username = $request->input('username');
    //     return redirect()->route('dashboard', ['username' => $username]);
    // }

    public function processLogin(Request $request)
    {
    $request->validate([
        'username' => ['required', 'string', 'alpha_num'],
        'password' => ['required', 'string', 'min:3'],
    ]);

    $username = $request->input('username');
    $password = $request->input('password');

    if ($username == "kentut" && $password == "123") {
        return redirect()->route('dashboard', ['username' => $username]);
    }

    return back()->with('error', 'Akun salah! Anda bukan Ken 😡');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $jadwalStreaming = [
            ['hari' => 'Senin', 'jam' => '19:00', 'game' => 'Valorant', 'tipe' => 'Competitive'],
            ['hari' => 'Rabu', 'jam' => '20:00', 'game' => 'Minecraft', 'tipe' => 'Chill Stream'],
            ['hari' => 'Jumat', 'jam' => '21:00', 'game' => 'Elden Ring', 'tipe' => 'Playthrough'],
            ['hari' => 'Sabtu', 'jam' => '19:30', 'game' => 'Just Chatting', 'tipe' => 'QnA & Review'],
        ];
        return view('pengelolaan', ['jadwal' => $jadwalStreaming, 'username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $profileData = [
            'nama' => 'Ken',
            'role' => 'Casual College Gamer',
            'bio' => 'Mahasiswa semester 4 yang hobi ngegame sambil ngopi. Stream buat seneng-seneng dan ngisi waktu luang setelah nugas.',
        ];
        return view('profile', ['username' => $username, 'profileData' => $profileData]);
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
