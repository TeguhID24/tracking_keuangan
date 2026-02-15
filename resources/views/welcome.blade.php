<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuhTrack - Kendalikan Keuangan Anda</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="bg-[#F8FAFC] dark:bg-[#0f172a] text-[#1e293b] dark:text-[#f1f5f9] min-h-screen">

    <header
        class="fixed top-0 w-full z-50 px-6 py-4 glass dark:bg-[#1e293b]/80 border-b border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-blue-600 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight">GuhTrack</span>
            </div>

            @if (Route::has('login'))
                <nav class="flex gap-4 items-center">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="text-sm font-medium hover:text-blue-600 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium hover:text-blue-600 transition">Masuk</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="bg-blue-600 text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-blue-700 transition shadow-lg shadow-blue-500/30">Daftar
                                Sekarang</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">

            <div class="space-y-8">
                <div
                    class="inline-flex items-center gap-2 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider">
                    <h3>Manajemen Keuangan Cerdas</h3>
                </div>

                <h1
                    class="text-5xl lg:text-6xl font-extrabold leading-[1.1] tracking-tight text-slate-900 dark:text-white">
                    Pantau Setiap Rupiah <span class="text-blue-600">Tanpa Ribet.</span>
                </h1>

                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl">
                    Aplikasi tracking keuangan modern untuk mencatat pengeluaran, menyusun anggaran harian, dan melihat
                    laporan analisis kekayaan secara real-time.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('register') }}"
                        class="bg-slate-900 dark:bg-white dark:text-slate-900 text-white px-8 py-4 rounded-xl font-bold hover:scale-105 transition-transform duration-200">
                        Mulai Gratis
                    </a>
                    <div class="flex -space-x-2 items-center">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=1"
                            alt="">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=2"
                            alt="">
                        <img class="w-10 h-10 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?u=3"
                            alt="">
                        <span class="pl-4 text-sm text-slate-500 font-medium">Pengguna Dijamin Puas</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 pt-4 text-sm font-medium">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z">
                            </path>
                        </svg>
                        Laporan Otomatis
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z">
                            </path>
                        </svg>
                        Multi-Rekening
                    </div>
                </div>
            </div>

            <div class="relative">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl blur opacity-20 dark:opacity-40">
                </div>
                <div
                    class="relative bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl shadow-2xl overflow-hidden shadow-blue-500/10">
                    <div
                        class="p-4 border-b border-slate-100 dark:border-slate-700 flex justify-between items-center bg-slate-50/50 dark:bg-slate-800/50">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="text-[10px] text-slate-400 uppercase font-bold tracking-widest">Dashboard Preview
                        </div>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="h-32 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-4 text-white">
                            <p class="text-xs opacity-80">Total Saldo</p>
                            <p class="text-2xl font-bold mt-1">Rp 12.450.000</p>
                            <div class="mt-4 flex justify-between text-[10px] bg-white/10 p-2 rounded-lg">
                                <span>Pemasukan: +2.3M</span>
                                <span>Pengeluaran: -1.1M</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="h-4 w-1/3 bg-slate-200 dark:bg-slate-700 rounded"></div>
                            <div
                                class="flex justify-between items-center p-3 border border-slate-100 dark:border-slate-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded bg-orange-100 flex items-center justify-center text-orange-600 text-xs">
                                        ☕</div>
                                    <span class="text-sm font-medium">Coffee Latte</span>
                                </div>
                                <span class="text-sm text-red-500 font-bold">-Rp 35.000</span>
                            </div>
                            <div
                                class="flex justify-between items-center p-3 border border-slate-100 dark:border-slate-700 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded bg-blue-100 flex items-center justify-center text-blue-600 text-xs">
                                        💼</div>
                                    <span class="text-sm font-medium">Gaji Bulanan</span>
                                </div>
                                <span class="text-sm text-green-500 font-bold">+Rp 8.000.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="py-10 border-t border-slate-200 dark:border-slate-800 text-center text-slate-500 text-sm">
        <p>&copy; 2026 GuhTrack Inc. Memberdayakan keuangan Anda.</p>
    </footer>
</body>

</html>
