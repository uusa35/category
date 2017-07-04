<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 7/4/17
 * Time: 8:30 AM
 */

Route::group(['namespace' => 'Usama\Category\Controllers\Frontend'], function () {
    Route::resources('category', 'CategoryController');
});

Route::group(['namespace' => 'Usama\Category\Controllers\Backend', 'prefix' => 'backend'], function () {
    Route::resources('category', 'CategoryController');
});