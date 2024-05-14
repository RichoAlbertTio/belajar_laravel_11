<?php

use Illuminate\Support\Facades\Route;

// digunakan untuk melihat list route
// php artisan route:list
// php artisan route:list --except-vendor

//  https://laravel.com/docs/11.x/routing#main-content



// route basic get, put, path delete, post, options
Route::get('/', function () {
     // jika file di view
    return view('welcome');
});

// Route::get('/home', function () {
//      // jika terdapat folder file di view
//     return view('home.example');
// });

// view route simple
// Route::view('/','welcome');
Route::view('/home','home.example',[
    'title' => 'home title',
    'user' => [
        'id' => 1,
        'name' => 'richo',
        'email' => 'richo123@gmail.com'
    ]
]);


// route dumy 
Route::get('dumy', function () {
    echo "data dumy";
});


// redirect routes, jadi mengubah url, jadi ketika url "/default" maka masuk ke "/" 
// (default 302) jika (301 permanen)
Route::redirect('/default', '/', 302);  


// parameter
Route::get('users/{name}', function (string $name) {
    return 'Name '. $name;
});


// email isi opsional
// Route::get('users/{name}/{email?}', function (string $name, string $email = 'kosong') {
//     return "User $name, $email";
// });


// Routes parameter patterns

// Route::get('products/{id}', function (int $id) {
//     return 'Product ID: ' . $id;
// })->where('id', '[0-9]+'); 


// app\Providers\AppServiceProvider.php
// Route::get('products/{id}', function (int $id) {
//     return 'Product ID: ' . $id;
// }); 


Route::get('private/admin/register', function () {
    return 'register page';
})->name('register');


Route::get('/test', function () {
    // return redirect()->route('register');
    return to_route('register');
});
