@extends('layouts.app')

@section('title', 'Our Catalog')

@section('content')
    <h1 class="text-2xl font-bold">Art Supplies Catalog</h1>
    <!-- <h1 class="text-3xl font-bold text-blue-500">Art Supplies Catalog</h1> -->

    <form action="/search" method="GET" class="mt-6 flex justify-center">
        <input type="text" name="q" placeholder="Search for products..." 
            class="p-2 border border-gray-300 rounded-l-lg focus:outline-none w-1/2">
        <button type="submit" class="bg-[#024731] text-white px-4 py-2 rounded-r-lg">Search</button>
    </form>

    <div class="mt-4">
        <label class="font-semibold">Filter by Category:</label>
        <select onchange="window.location.href='?category=' + this.value" class="border p-2">
            <option value="">All</option>
            <option value="Art Media">Art Media</option>
            <option value="Pencils">Pencils</option>
            <option value="Oil Pastels">Oil Pastels</option>
            <option value="Paints">Paints</option>
            <option value="Brushes">Brushes</option>
            <option value="Art Tools">Art Tools</option>
            
        </select>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 shadow">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full">
                <h2 class="text-lg font-bold">{{ $product['name'] }}</h2>
                <p class="text-xl font-bold text-green-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                <p>Category: {{ $product['category'] }}</p>
                <a href="/product/{{ $product['id'] }}" class="text-blue-500">View Details</a>
            </div>
        @endforeach

    </div>
@endsection

  