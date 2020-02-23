<?php

Route::middleware(['web', 'auth', 'admin', 'csrf'])
    ->prefix('/admin')
    ->namespace('Terrarium\HelloWorld\Controllers')
    ->group(function() {
         Route::get('admin/terrarium/helloworld', 'HelloWorldController@index')
            ->name('terrarium.helloworld.index');

         Route::get('admin/settings/helloworld', 'SettingsController@index')
             ->name('terrarium.helloworld.settings');

         Route::post('/admin/settings/helloworld', 'SettingsController@update');
    });