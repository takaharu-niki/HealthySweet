<x-guest-layout>
    @foreach ($shops as $shop)
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
            <a href="{{ route('shops.show', $shop->id) }}" class="max-w-screen-sm">
                <dt>{{ $shop->name }}</dt>
                <dd>{{ $shop->description }}</dd>
                <img src="{{ $shop->image }}" alt="sweet img" class="h-auto">
            </a>
        </div>
    @endforeach
</x-guest-layout>