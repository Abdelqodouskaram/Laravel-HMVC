<?php 

use Illuminate\Support\Facades\Route;

$module_namespace = "Modules\Parts\Http\Controllers";

Route::prefix('/api')->namespace($module_namespace)->group(function () {
    Route::get('/', "PartController@index");
});