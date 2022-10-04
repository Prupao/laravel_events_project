<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\EventController;

/*Route::get('/', [HomeController::class, 'Index']);

Route::get('/produtos', [ProdutosController::class, 'index']);*/

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

Route::get('/events/{id}', [EventController::class, 'show']);

Route::post('/events',[EventController::class, 'store']);

/*Route::get('/produtos/{id}',function($id){
    return view('product',['id' => $id ]);
});*/

//Route::view('/', 'home');

/*Route::get('/produtos',function(){
    return view('produtos');
}); */

/*Route::get('/produtos/{nomeProduto}/comentario/{id}', function($nomeProduto, $id){
    echo "Esse é o comentário: ".$id.", do produto: ".$nomeProduto;
});

*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
