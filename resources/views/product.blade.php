@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-3xl font-bold">{{ $product['name'] }}</h1>
        <!-- <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="mt-4 w-full rounded-lg shadow"> -->

        <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="mt-4 w-full max-w-lg lg:w-1/3 mx-auto rounded-lg shadow">

        <p class="text-xl font-bold text-green-600">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
        <p class="mt-4 text-lg">Category: <span class="font-semibold">{{ $product['category'] }}</span></p>

        <div class="mt-6">
            <a href="/catalog" class="bg-[#024731] text-white px-4 py-2 rounded">Back to Catalog</a>
        </div>
    </div>
@endsection
