<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Commande;

class MainController extends Controller
{
    public function afficheAcceuil()
    {
       // Fonction retournant une page avec des paramètres
        return view('pages.front-office.welcome', 
        [
           'nomSite'      => 'Service en ligne de mon Ministère',   
           'nomMinistere' => 'Ministere de Laravel au Burkina Faso',   
        ]
        );
    }
    
    public function afficheProcedure($param)
    {
         // Fonction retournant une page avec des paramètres recement entrés
       return view('pages.front-office.procedure', 
        [
            'parametre' => $param, 
            'question' => 'baba'       
        ]);
    }

   // Fonction pour créer un nouveau produit première approche
   public function ajoutProduit()
   {
       $produit= New Produit();

       $produit ->uuid= Str::uuid();
       $produit ->designation='Tomate';
       $produit ->description='All invoices and payments happen through GetLance. Count on a simple and streamlined process.
       Hourly and fixed-price projects. For hourly work, submit timesheets through GetLance. For fixed-price jobs, set milestones and funds are released via GetLance escrow features.
       Multiple payment options. Choose a payment method that works best for you, from direct deposit or PayPal to wire transfer and more';
       $produit ->prix='1000';
       $produit ->like='21';
       $produit ->pays_source='Burkina Faso';
       $produit ->poids='45.10';

       $produit->save();

   }

    // Fonction pour créer un nouveau produit deuxième approche
    public function ajoutProduitEncore()
    {
        Produit::create(
            [
                'uuid'                 => Str::uuid(),
                'designation'          => 'Banane',
                'description'          => 'Banane de Ouaga bien sucrée',
                'prix'                 => 500,
                'like'                 => 50,
                'pays_source'          => 'Mali',
                'poids'                => '90',
                
            ]
            
            );
    }

    // Fonction pour afficher la liste des produits
    public function getList()
    {
        //$produits = Produit::paginate(10);
        // dump ($produits);'
        return view('pages.front-office.list-produits',[
           'lesproduits' => Produit::paginate(10),
           'lescommandes' => Commande::paginate(10),
        ]);
    }

    // Fonction pour modifier un produit
    public function modifierProduit($id) 
    {
        $produitModifier = Produit::where('id', $id)->update(
            [
                'designation' => 'Orange',
                'description' => 'La description de Orange',
            
            ] );
             dd($produitModifier);
    }


      // Fonction pour supprimer un produit
      public function supprimerProduit($id)
      {
        $produitSupprimer = Produit::find($id);
        // Produit::destroy($id) une autre methode pour supprimer un ou plusiuers objets
        // dd( $produitSupprimer);
        $produitSupprimer ->delete();
        return redirect()->back()->with('statut', 'Supprimer avec succès');
      }
      
     //Fonction pour ajouter commande
     public function ajoutercommande($id)
     {
         $commande= new Commande();
         $commande->produit_id=$id;
         $commande->uuid=Str::uuid();
         $commande->save();
        //dd($commande);
        return redirect()->back()->with('statut', 'Commande ajouté avec succès');
     }
}
