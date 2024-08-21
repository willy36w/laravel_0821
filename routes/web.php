<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotel');
    // $url = route('f1name');
    // dd($url);
})->name('hotel');

Route::get('/f1', function () {
    return view('f1');
})->name('f1name');

Route::get('/f2', function () {
    return view('f2');
})->name('f2name');

Route::get('/f3', function () {
    return view('f3');
})->name('f3name');



Route::get('/cars', function () {
    return view('car.index');
})->name('cars.index');


Route::get('/cars_create', function () {
    return view('car.create');
})->name('cars.create');


Route::get('/cars_edit', function () {
    return view('car.edit');
})->name('cars.edit');



Route::get('/students', function () {
    return view('student.index');
})->name('students.index');


// Route::get('/students_edit', function () {
//     return view('student.edit');
// })->name('students.edit');


// Route::get('/students_create', function () {
//     return view('student.create');
// })->name('students.create');





Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});

// 範例
Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    $text = "postID => $postId,commentID => $commentId";
    // echo $text;
});


// 實際操作
Route::get('/num1/{num1}/num2/{num2}', function (string $num1, string $num2) {
    $sum = $num1 . $num2;
    $text = "num1 => $num1,num2 => $num2 , sum=>$sum";
    // echo $text;

    return view('sum', ['num1' => $num1, 'num2' => $num2, 'sum' => $sum,]);
});



Route::get('/bobo', function () {
    return view('bobocar.index');
})->name('bobocar.index');


Route::get('/bobo_create', function () {
    return view('bobocar.create');
})->name('bobocar.create');


Route::get('/bobo_edit', function () {
    return view('bobocar.edit');
})->name('bobocar.edit');



// bobocar
use App\Http\Controllers\BobocarController;

Route::get('/bobocars_excel', [BobocarController::class, 'excel']);
Route::resource('bobocars', BobocarController::class);

// dog
use App\Http\Controllers\DogController;

Route::get('/dogs_excel', [DogController::class, 'excel']);
Route::resource('dogs', DogController::class);

// student
use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);
