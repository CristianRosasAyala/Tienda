<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;
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

Route::get('/', function () {

    /* $prod = New Product();

    $prod->nombre = 'Producto 3';
    $prod->slug = 'Producto 3';
    $prod->category_id = 2;
    $prod->descripcion_corta = 'Producto ';
    $prod->descripcion_larga = 'Producto ';
    $prod->especificaciones = 'Producto ';
    $prod->datos_de_interes = 'Producto ';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No';
    $prod->save();
    return $prod;
 */

$cat = Category::find(2)->products;
return $cat;


    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
