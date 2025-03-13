<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
  </head>
  <body>
    <h1 class="text-3xl font-bold underline text-clifford">
      Hello world!
    </h1>
  </body>
</html> -->

@extends('layouts.app')

@section('title', 'Arterie Studio')

@section('content')

    <br></br>
    <h1 class="text-4xl font-serif font-semibold text-center text-gray-800">Welcome, Artists!</h1>
    <p class="text-center mt-2 text-lg text-gray-600">Elevate your art with premium art materials & get ready to inspire others!</p>
    

    <form action="/search" method="GET" class="mt-6 flex justify-center">
            <input type="text" name="q" placeholder="Search for products..." 
                class="p-2 border border-gray-300 rounded-l-lg focus:outline-none w-1/2">
            <button type="submit" class="bg-[#024731] text-white px-4 py-2 rounded-r-lg">Search</button>
        </form>

    <br></br>

    <p class="text-center text-base text-gray-700 leading-relaxed max-w-2xl mx-auto">
    🎨Arterie Studio adalah sebuah toko yang menyediakan berbagai perlengkapan seni berkualitas untuk para seniman, baik expert maupun beginner. Dengan koleksi yang mencakup cat air, cat minyak, gouache, akrilik, art media, dan berbagai alat bantu seni lainnya, Arterie Studio berkomitmen untuk mendukung kreativitas setiap individu.  
    <br><br>
    Kamu seorang pemula yang baru memulai perjalanan seni? <br></br>Atau, seorang profesional yang sedang mencari perlengkapan terbaik? <br></br>Siapapun kamu, Arterie Studio siap menjadi partner dalam setiap langkah kreatifmu!
</p>
<br>

    <!-- <img src="{{ asset('images/art-banner.jpg') }}" alt="Art Supplies" class="mt-6 w-full rounded-lg shadow"> -->

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4">
      @foreach ($supplies as $supply)
          <div class="bg-white p-4 shadow">
              <img src="{{ asset('images/' . $supply['image']) }}" class="w-full">
              <br></br>
              <a href="/catalog" class="bg-green-100 text-[#024731] px-4 py-2 rounded">Browse</a>
          </div>
      @endforeach
    </div>
    <br></br>

    <p class="text-center text-base text-gray-700 leading-relaxed max-w-2xl mx-auto">
    <br><br>
    Kunjungi katalog produk kami dan temukan inspirasi melalui berbagai pilihan produk yang kami tawarkan🤗🎨✨
</p>
    <div class="text-center mt-6">
        <a href="/catalog" class="bg-[#024731] text-white px-4 py-2 rounded">Browse Our Catalog</a>
    </div>
@endsection

