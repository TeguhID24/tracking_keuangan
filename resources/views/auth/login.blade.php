<x-guest-layout>
    <div class="flex min-h-screen">
        <div class="hidden lg:flex lg:w-1/2 bg-blue-600 p-12 flex-col justify-between text-white">
            <div class="flex items-center gap-2">
                <div class="bg-white p-2 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <span class="text-2xl font-bold tracking-tight">GuhTrack</span>
            </div>

            <div>
                <h2 class="text-4xl font-bold leading-tight">Kelola keuangan <br> jauh lebih mudah.</h2>
                <p class="mt-4 text-blue-100 text-lg italic">"Sejak menggunakan GuhTrack, pengeluaran bulanan saya jadi
                    lebih terkontrol dan tabungan meningkat pesat!"</p>
                <div class="mt-6 flex items-center gap-3">
                    <img class="w-10 h-10 rounded-full border-2 border-blue-400" src="https://i.pravatar.cc/100?u=9"
                        alt="">
                    <div>
                        <p class="font-semibold text-sm text-white">Teguh Firmansyah/p>
                        <p class="text-xs text-blue-200">Entrepreneur</p>
                    </div>
                </div>
            </div>

            <p class="text-sm text-blue-200">© 2026 GuhTrack Inc. All rights reserved.</p>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white dark:bg-[#0f172a]">
            <div class="max-w-md w-full">
                <div class="mb-10 text-center lg:text-left">
                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white">Selamat Datang Kembali</h1>
                    <p class="text-slate-500 dark:text-slate-400 mt-2">Silakan masuk untuk memantau saldo Anda.</p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="font-semibold" />
                        <x-text-input id="email"
                            class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl"
                            type="email" name="email" :value="old('email')" required autofocus
                            placeholder="nama@email.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <x-input-label for="password" :value="__('Password')" class="font-semibold" />
                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-600 hover:text-blue-500 font-medium"
                                    href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>
                        <x-text-input id="password"
                            class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl"
                            type="password" name="password" required placeholder="••••••••" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-slate-300 text-blue-600 shadow-sm focus:ring-blue-500 dark:bg-slate-800 dark:border-slate-700"
                            name="remember">
                        <label for="remember_me" class="ms-2 text-sm text-slate-600 dark:text-slate-400">Ingat perangkat
                            ini</label>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-[1.02]">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <p class="text-center text-sm text-slate-600 dark:text-slate-400 mt-8">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="font-bold text-blue-600 hover:underline">Daftar
                            Sekarang</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
