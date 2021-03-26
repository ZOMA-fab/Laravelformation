<x-master-layout >

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Liste des produits</h3>
        <br>
        @if (session('statut'))
        
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{session('statut')}} 
        </div>
           
        @endif

        @if ($lesproduits->count() > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Désignation</td>
                    <td>Prix</td>
                    <td>Pays d'origne</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>

            <tbody>
                @foreach ($lesproduits as $produit)           
                <tr>
                    <td>{{ $produit->designation }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->pays_source }}</td>
                    <td class="d-flex"><a href="{{route('supprimer.produit',$produit->id)}}" class="btn btn-danger"><svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg></a>
                      <a href="{{route('ajoutercommande',$produit->id)}}" class="btn btn-primary ml-2"><svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg></a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{$lesproduits->links()}}

        @else
            <p> 
                Aucun produit n'a été retrouvé
            </p>
        @endif
        </div>
        
                
        <div class="col-md-6">
            <h3>Liste des commandes</h3>
        <br>
        @if (session('statut'))
        
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            {{session('statut')}} 
        </div>
           
        @endif

        @if ($lescommandes->count() > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Désignation</td>
                    <td>Prix</td>
                    <td>Pays d'origne</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($lescommandes as $commande)           
                <tr>
                    <td>{{ $commande->produit->designation }}</td>
                    <td>{{ $commande->produit->prix }}</td>
                    <td>{{ $commande->produit->pays_source }}</td>
                    <td><a href="{{route('supprimer.produit',$produit->id)}}" class="btn btn-danger"><svg style="width:25px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                      </svg></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$lescommandes->links()}}

        @else
            <p> 
                Aucune commande n'a été retrouvé
            </p>
        @endif
        </div>
    </div>
</div>


</x-master-layout>