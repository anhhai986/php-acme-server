<?php

/*
|--------------------------------------------------------------------------
| ACME Routes
|--------------------------------------------------------------------------
|
| Here acme routes go...
|
*/

Route::group(['prefix' => 'acme/{hash}'], function () {
    Route::get('/directory', 'Api\\Acme\\DirectoryController@index')->name('acme.directory');

    Route::any('/new-nonce', 'Api\\Acme\\NonceController@create')->name('acme.nonce.new');

    Route::group(['middleware' => ['auth', 'acme.sign'],], function () {
        Route::post('/new-acct', 'Api\\Acme\\AccountController@create')->name('acme.account.new');

        Route::post('/key-change', 'Api\\Acme\\KeyController@change')->name('acme.key.change');
        Route::post('/new-order', 'Api\\Acme\\OrderController@create')->name('acme.order.new');
        Route::post('/order/{id}/authz/finalize', 'Api\\Acme\\OrderController@authzFinalize')->name('acme.account.authz_finalize');
        Route::post('/revoke-cert', 'Api\\Acme\\CertController@revoke')->name('acme.cert.revoke');

        Route::any('/order/{id}', 'Api\\Acme\\OrderController@detail')->name('acme.account.order_detail');
        Route::any('/order/{id}/authz/detail/{domain}', 'Api\\Acme\\OrderController@authzDetail')->name('acme.account.authz_detail');
        Route::any('/order/{id}/authz/submit/{domain}', 'Api\\Acme\\OrderController@authzSubmit')->name('acme.account.authz_submit');
        Route::any('/order/{id}/cert', 'Api\\Acme\\OrderController@retriveCert')->name('acme.order.retrive_cert');

        Route::post('/acct/{id}/acme-key/{acme_key}', 'Api\\Acme\\AccountController@detail')->name('acme.account.detail');
    });
});
