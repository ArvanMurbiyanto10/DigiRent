<x-app-layout>
    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:flex">
                    <img class="w-full md:w-1/2 rounded-lg object-cover" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="md:pl-8 mt-6 md:mt-0 flex-1">
                        <span class="text-sm text-gray-500">{{ $product->category->name }}</span>
                        <h1 class="text-4xl font-bold text-gray-900 mt-2">{{ $product->name }}</h1>
                        <p class="text-2xl font-semibold text-indigo-600 mt-4">
                            Rp {{ number_format($product->price_per_day, 0, ',', '.') }}<span class="text-lg font-normal text-gray-500">/hari</span>
                        </p>
                        <p class="mt-6 text-gray-600 leading-relaxed">{{ $product->description }}</p>
                        <div class="mt-8">
                            <a href="#" class="inline-block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded-lg">
                                Sewa Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
