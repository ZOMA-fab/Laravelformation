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
Route::post("produits/enregistrer",  [MainController::class, "enregistrerProduit"])->name('produits.enregistrer');
//Route::get("produits/modifier/{id}", [MainController::class, "editproduit"])->name('produits.modifier');
Route::get("produits/modifier/{produit}", [ProduitController::class, "edit"])->name('produits.modifier');
Route::put("produits/update/{id}",   [MainController::class, "updateProduit"])->name('produits.update');
Route::resource("produits",          ProduitController::class);
Route::get("export-excel",           [MainController::class, "excelExport"])->name('excel.export');