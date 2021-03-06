<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now Memoires something great!
|
*/

use App\Categorie;
use Illuminate\Support\Facades\Request;



Route::view('login', 'auth/login');
Route::get('/connexion', 'UsersController@submit')->name('connexion');
Route::get('/deconnexion', 'UsersController@deconnexion');

// Route::get('/admin/dashboard/categorie', 'AdminController@getListCategories');
Route::get('/api/admin', 'ConnectionController@index');
Route::get('/api/memoires/lastMemoires', 'MemoiresController@lastMemoires');
Route::get('/api/mediatheque', 'MediathequeController@getDatas');
/* **************** TODO **************** */

/*Ajout catégorie */
Route::prefix('categorie')->group(function () {
    Route::post('getIdCat', 'MemoiresController@getIdCat');
});

/* **************** InProgress (manque verif) **************** */
Route::prefix('/mediatheque')->group(function () { // affiche les informations de la BDD
    Route::get('/', 'MediathequeController@index');
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/{id}', 'MemoiresController@getByCategories'); // TODO id = détails / description
    Route::get('types', 'MediathequeController@types');
    Route::get('types/{id}', 'MemoiresController@getByTypes')->where('id', "[0-9]+"); // TODO id = détails / description
});

/* **************** Administrateur *************************** */
Route::prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('description', 'AdminController@descView');
    Route::get('equipe', 'AdminController@equipeView');

    Route::get('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::group(['middleware' => 'auth'], function () {
        Route::prefix('/dashboard')->group(function () {
            Route::get('/', 'AdminController@memoiresView');
            Route::get('/{id}', 'AdminController@get');
            Route::get('getCategorie', 'AdminController@getCategorie'); //affiche ds formulaire
            Route::get('media', 'AdminController@getListMedia'); //affiche ds formulaire
            Route::post('categorie/add', 'AdminController@addCategories'); // ajouter une categories
            Route::delete('/{id}', 'MemoiresController@remove')->where('id', "[0-9]+");
        });
     
    });
    //Route::post('/add', 'AdminController@add');
    //Route::post('type/add', 'AdminController@addTypes'); // ajouter un type de fichier

    
});

Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
    Route::get('/', 'MemoiresController@index');
});


 Route::prefix('/api')->group(function () {
    Route::prefix('/memoires')->group(function () { // ajout de données dans la BDD // MemoiresS devient Memoires
        Route::get('/', 'MemoiresController@all');
        Route::delete('{id}', 'MemoiresController@remove')->where('id', "[0-9]+");
        Route::post('add', 'MemoiresController@add'); // ajouter des memoires
        Route::put('{id}', 'MemoiresController@update')->where('id', "[0-9]+");
        Route::post('/categorie/add', 'MemoiresController@addCategorie'); // ajouter une categories
        Route::post('type/add', 'MemoiresController@addType'); // ajouter un type de fichier


    });

   /* Route::prefix('/api')->(function(){
        Route::prefix('/categories')->group(function({
            Route::post('/','CategoriesController@all');
        }))
    })*/
});

/* **************** Valider **************** */
// acceuil
Route::get('/', 'AccueilController@index');
/*
 *  page "Contact"
 */
Route::prefix('contact')->group(function () {
    Route::get('/', 'ContactController@index');
    Route::post('message', 'ContactController@message');
});
/**
 *  page "Je participe"
 */
Route::prefix('jeparticipe')->group(function () {

    Route::post('message', 'JeParticipeController@message');
});
// Recherche
Route::prefix('/recherche')->group(function () {
    Route::post('/', 'RechercheController@recherche');
});
// L'equipe // information
Route::get('/information', function () {
    return view('admin.equipe');
});

Route::prefix('error')->group(function () {
    Route::get('/', function () {
        return view('client/error');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
