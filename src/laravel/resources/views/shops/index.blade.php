<x-guest-layout>
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Shop') }}
            </h2>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($shops as $shop)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{ route('shops.show', $shop->id) }}">
                            <dt>{{ $shop->name }}</dt>
                            <dd>{{ $shop->description }}</dd>
                            <img src="{{ $shop->image }}" alt="sweet img" class="h-auto w-1/3">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>