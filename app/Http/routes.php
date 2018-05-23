<?php


Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});


Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id?}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/json', 'ProdutoController@listaJson');
