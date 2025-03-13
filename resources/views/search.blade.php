@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <h1 class="text-3xl font-bold text-center">Search Results for "{{ $query }}"</h1>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-6">
        @if(count($results) > 0)
            @foreach($results as $product)
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full rounded-lg">
                    <h2 class="text-lg font-bold mt-2">{{ $product['name'] }}</h2>
                    <p class="text-xl font-bold text-green-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <p class="text-sm text-gray-600">{{ $product['category'] }}</p>
                    <a href="/product/{{ $product['id'] }}" class="text-blue-500">View Details</a>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-600 mt-4">No products found.</p>
        @endif
    </div>

    <div class="text-center mt-6">
        <a href="/catalog" class="bg-[#024731] text-white px-4 py-2 rounded">Back to Catalog</a>
    </div>
@endsection
