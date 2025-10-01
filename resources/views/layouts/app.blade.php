<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DigiRent') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-slate-50">
        @include('layouts.navigation')

        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <main>
            @if (isset($slot))
                {{ $slot }}
            @endif
        </main>
    </div>

    <footer class="bg-gray-800 text-gray-300">
        <div class="border-b border-gray-700">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center text-sm">
                <p>Rent Services Based In Purwokerto</p>
                <a href="/" class="text-white text-2xl font-bold tracking-wider">DigiRent</a>
                <div class="flex items-center space-x-3">
                    <span>On social networks:</span>
                    <a href="https://www.instagram.com/usernameanda" target="_blank"
                        class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049 1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.08 2.525c.636-.247 1.363-.416 2.427-.465C9.53 2.013 9.884 2 12.315 2zM12 7.177a4.823 4.823 0 100 9.646 4.823 4.823 0 000-9.646zM12 14.823a2.823 2.823 0 110-5.646 2.823 2.823 0 010 5.646zM16.802 6.11a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-6 py-10">
            {{-- PERUBAHAN TATA LETAK KOLOM FOOTER DI SINI --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- 1. DigiRent (Kolom Kiri) --}}
                <div>
                    <h3 class="font-bold text-white text-lg mb-4">DigiRent</h3>
                    <p class="text-sm">
                        Jasa sewa barang terlengkap dan terjangkau di Purwokerto. Solusi memenuhi kebutuhan harianmu,
                        tanpa harus membeli produk yang kamu inginkan.
                    </p>
                </div>

                {{-- 2. Contact Us (Kolom Tengah) --}}
                <div>
                    <h3 class="font-bold text-white text-lg mb-4">Contact Us</h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span>0882-2149-8208 (Arvan Murbiyanto)</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span>0813-2737-9540 (Zidane Maulana Fajrian)</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span>0815-3333-5534 (Dewa Bagus Alvin Pratama)</span>
                        </div>
                    </div>
                </div>

                {{-- 3. Informasi (Pindah ke posisi kanan) --}}
                <div>
                    <h3 class="font-bold text-white text-lg mb-4">Informasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li>
                            <a href="#" class="hover:text-white hover:underline transition-colors">Syarat &
                                Ketentuan</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white hover:underline transition-colors">Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="border-t border-gray-700">
            <div class="container mx-auto px-6 py-4 text-center text-sm">
                &copy; {{ date('Y') }} DigiRent. All Rights Reserved.
            </div>
        </div>
    </footer>

    <a href="https://wa.me/6288221498208" target="_blank"
        class="fixed bottom-5 right-5 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition-transform hover:scale-110">
        <span class="sr-only">Butuh bantuan?</span>
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.45L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.886-.001 2.269.655 4.498 1.803 6.27l.205.323-1.202 4.383 4.463-1.189.324.201z" />
        </svg>
    </a>
</body>

</html>
