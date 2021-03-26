<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',                      [MainController::class, 'afficheAcceuil'] )->name('accueil');

Route::get('procedure/{param}',      [MainController::class, 'afficheProcedure'])->name('procedure')  ;
Route::get('ajout-produit',          [MainController::class, 'ajoutProduit'])->name('a.produit') ;
Route::get('ajout2',                 [MainController::class, 'ajoutProduitEncore'])->name('a2.produit') ;
Route::get('list-produits',          [MainController::class, 'getList'])->name('list.produit') ;
Route::get('modification/{id}',      [MainController::class, 'modifierProduit'])->name('modifier.produit') ;
Route::get('supprimer/{id}',         [MainController::class, 'supprimerProduit'])->name('supprimer.produit') ;
Route::get('ajoutercommande/{id}',   [MainController::class, 'ajoutercommande'])->name('ajoutercommande') ;
Route::get('produits/liste',         [MainController::class, 'getList'])->name('produits.liste') ;
