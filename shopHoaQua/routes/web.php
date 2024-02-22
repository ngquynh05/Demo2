<?php

// use App\Http\Controllers\Admin\Users\LoginController;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;


#admin
// Route::get("admin/users/login", [LoginController::class,"index"])->name("login");
// Route::post("admin/users/login/store", [LoginController::class,"store"]);

// Route::middleware(["auth"])->group(function () {
//     Route::prefix("admin")->group(function () {
//         Route::get("/", [MainController::class,"index"])->name("admin");        
//         Route::get("main", [MainController::class,"index"]);

//     #Menu
//     // Route::prefix("menus")->group(function () {
//     //     Route::get("add", [MenuController::class,"create"]);
//     //     Route::post("add", [MenuController::class,"store"]);
//     //     });
//     });
// });

Route::prefix("menus")->group(function () {
    Route::get("add", [MenuController::class,"create"]);
    Route::post("add", [MenuController::class,"store"]);
    Route::get("list", [MenuController::class,"index"]);
    Route::get("edit/{menu}", [MenuController::class,"show"]);
    Route::delete("destroy", [MenuController::class,"destroy"]); 
});

// Route::get("/", [MainController::class,"index"]);


// Route::get("admin/main", [MainController::class,"index"]);


// Route::get("admin/menu/add", [MenuController::class,"create"]);
// Route::post("admin/menu/add", [MenuController::class,"store"]);







    




