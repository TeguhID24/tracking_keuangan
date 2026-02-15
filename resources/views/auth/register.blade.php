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

            <div class="max-w-md">
                <h2 class="text-4xl font-bold leading-tight">Mulai Perjalanan Finansial Anda Hari Ini.</h2>
                <ul class="mt-8 space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="bg-blue-500 rounded-full p-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 italic">Gratis selamanya untuk fitur dasar.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-blue-500 rounded-full p-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 italic">Keamanan data enkripsi tingkat bank.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-blue-500 rounded-full p-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 italic">Pantau aset dari mana saja secara real-time.</span>
                    </li>
                </ul>
            </div>

            <p class="text-sm text-blue-200">© 2026 GuhTrack Inc. Terdaftar & Diawasi.</p>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white dark:bg-[#0f172a]">
            <div class="max-w-md w-full">
                <div class="mb-10 text-center lg:text-left">
                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white">Buat Akun Baru</h1>
                    <p class="text-slate-500 dark:text-slate-400 mt-2">Bergabunglah dengan pengguna lainnya.
                    </p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Nama Lengkap')"
                            class="font-semibold text-slate-700 dark:text-slate-300" />
                        <x-text-input id="name"
                            class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl py-3"
                            type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                            placeholder="Masukkan nama lengkap Anda" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')"
                            class="font-semibold text-slate-700 dark:text-slate-300" />
                        <x-text-input id="email"
                            class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl py-3"
                            type="email" name="email" :value="old('email')" required autocomplete="username"
                            placeholder="nama@email.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="password" :value="__('Password')"
                                class="font-semibold text-slate-700 dark:text-slate-300" />
                            <x-text-input id="password"
                                class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl py-3"
                                type="password" name="password" required autocomplete="new-password"
                                placeholder="Minimal 8 karakter" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')"
                                class="font-semibold text-slate-700 dark:text-slate-300" />
                            <x-text-input id="password_confirmation"
                                class="block mt-1 w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 focus:ring-blue-500 focus:border-blue-500 rounded-xl py-3"
                                type="password" name="password_confirmation" required autocomplete="new-password"
                                placeholder="Ulangi password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-lg text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-[1.02]">
                            {{ __('Daftar Sekarang') }}
                        </button>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="font-bold text-blue-600 hover:underline">Masuk di
                                sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
