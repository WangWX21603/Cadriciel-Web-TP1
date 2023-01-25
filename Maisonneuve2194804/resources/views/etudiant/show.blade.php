@extends('layouts.app')
@section('title', 'Etudiant')
@section('content')

<div class="container">
    <div class="row  px-5">
        <div class="col-12">
            
            <div class ="nav justify-content-end">
              <a href="{{ route('etudiant.index') }}" class="btn btn-outline-primary btn-md mt-5">Retourner</a>
            </div>

            <h3 class="display-one mt-5 text-uppercase">
                {{ $etudiant->nom }}
            </h3>
            <hr>
            <p class="font-italic"><strong class="text-uppercase">Adresse :</strong> {{ $etudiant->adresse }}</p>
            <p class=""><strong class="text-uppercase">Phone :</strong> {{ $etudiant->phone }}</p>
            <p class=""><strong class="text-uppercase">Email :</strong> {{ $etudiant->email }}</p>
            <p class=""><strong class="text-uppercase">Date de Naissance :</strong> {{ $etudiant->dateNaissance }}</p>
            <p class=""><strong class="text-uppercase">Ville: </strong>{{ $etudiant->etudiantHasVille->nom }}</p>

        </div>


        <div class="col-2 my-5">
          <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-success ">Mettre à jour</a>
        </div>

        <div class="col-2 my-5">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Effacer
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un étudiant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Êtes-vous certain de vouloir effacer les données de {{ $etudiant->nom }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ferme</button>
        <form action="{{ route('etudiant.edit', $etudiant->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
