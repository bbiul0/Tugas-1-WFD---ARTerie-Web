<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$supplies = [
    ['image' => 'easel1.jpg'],
    ['image' => 'supplies2.jpg'],
    ['image' => 'supplies3.jpg'],
    ['image' => 'acrylic1.jpg'],
    ['image' => 'gouache1.jpg'],
    ['image' => 'paletteknife1.jpg'],
];

$products = [
    ['id' => 1, 'name' => 'Winsor & Newton Oil Paints', 'category' => 'Paints', 'image' => 'oilpaint1.jpg', 'price' => 250000],
    ['id' => 2, 'name' => 'V-tec Oil Paint Set', 'category' => 'Paints', 'image' => 'oilpaint2.jpg', 'price' => 78000],
    ['id' => 3, 'name' => 'Maries Oil Paint Set', 'category' => 'Paints', 'image' => 'oilpaint3.jpg', 'price' => 99000],
    ['id' => 4, 'name' => 'Miya Himi Jelly Gouache Set 48s', 'category' => 'Paints', 'image' => 'gouache1.jpg', 'price' => 336000],
    ['id' => 5, 'name' => 'Meeden Gouache Paint Set', 'category' => 'Paints', 'image' => 'gouache2.jpg', 'price' => 225000],
    ['id' => 6, 'name' => 'Castle Gouache Paint', 'category' => 'Paints', 'image' => 'gouache3.jpg', 'price' => 210000],
    ['id' => 7, 'name' => 'Art Ranger Acrylic Starter Pack', 'category' => 'Paints', 'image' => 'acrylic1.jpg', 'price' => 170000],
    ['id' => 8, 'name' => 'Mont Marte Acrylics', 'category' => 'Paints', 'image' => 'acrylic2.jpg', 'price' => 185000],
    ['id' => 9, 'name' => 'Acrylic Paint Metallic Vitro', 'category' => 'Paints', 'image' => 'acrylic3.jpg', 'price' => 96000],
    
    ['id' => 10, 'name' => 'Mont Marte Watercolor Paint Set', 'category' => 'Paints', 'image' => 'watercolor1.jpg', 'price' => 210000],
    ['id' => 11, 'name' => 'Portable Watercolor Pans', 'category' => 'Paints', 'image' => 'watercolor2.jpg', 'price' => 135000],
    ['id' => 12, 'name' => 'Giorgione Watercolor Set', 'category' => 'Paints', 'image' => 'watercolor3.jpg', 'price' => 170000],
    ['id' => 13, 'name' => 'Canvas 20x20', 'category' => 'Art Media', 'image' => 'canvas1.jpg', 'price' => 11000],
    ['id' => 14, 'name' => 'Textured Sketchbook by Art Media', 'category' => 'Art Media', 'image' => 'sketchbook1.jpg', 'price' => 18000],
    ['id' => 15, 'name' => 'Giorgione Watercolor Paper Pad A3', 'category' => 'Art Media', 'image' => 'paper1.jpg', 'price' => 70000],

    ['id' => 16, 'name' => 'Maries Charcoal Pencil', 'category' => 'Pencils', 'image' => 'pencil1.jpg', 'price' => 7500],
    ['id' => 17, 'name' => 'Mungyo Artists Oil Pastels', 'category' => 'Oil Pastels', 'image' => 'pastel1.jpg', 'price' => 175000],
    ['id' => 18, 'name' => 'Bomeijia Artists Mix Brush Set', 'category' => 'Brushes', 'image' => 'brush1.jpg', 'price' => 36000],
    ['id' => 19, 'name' => 'Palette Knives Set', 'category' => 'Art Tools', 'image' => 'paletteknife1.jpg', 'price' => 21000],
    ['id' => 20, 'name' => 'Jerrys Artist Ruler', 'category' => 'Art Tools', 'image' => 'ruler1.jpg', 'price' => 59000],
    ['id' => 21, 'name' => 'Meeden Drawing Board Table Stand Easel', 'category' => 'Art Tools', 'image' => 'easel1.jpg', 'price' => 325000],
];


Route::get('/', function () use ($supplies) {
    return view('home', ['supplies' => $supplies]);
});

Route::get('/catalog', function (Request $request) use ($products) {
    $category = $request->query('category');
    $filteredProducts = $category ? array_filter($products, fn($p) => $p['category'] == $category) : $products;

    return view('catalog', ['products' => $filteredProducts]);
});


Route::get('/search', function (Request $request) use ($products) {
    $query = $request->query('q');
    $searchResults = $query ? array_filter($products, fn($p) => stripos($p['name'], $query) !== false) : [];
    
    return view('search', ['query' => $query, 'results' => $searchResults]);
});

Route::get('/product/{id}', function ($id) use ($products) {
    $product = collect($products)->firstWhere('id', $id);
    if (!$product) abort(404);
    return view('product', ['product' => $product]);
});

// <!-- use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/catalog', function () {
//     return view('catalog');
// });

// Route::get('/product/{id}', function ($id) {
//     return view('product', ['id' => $id]);
// }); -->
