@extends('layouts.app')
@section('title', 'Accueil')
@section('content')


<div class="container my-5">
    <div class ="nav justify-content-end">
        <a href="{{ route('etudiant.create')}}" class="btn btn-primary">
        Ajouter un étudiant
        </a>
    </div>
    
    <p class="fw-semibold fs-3">Liste des étudiants</p>

    <table class="table table-hover my-4">
        <thead class="bg-secondary text-center">
            <tr>
            <th scope="col" class="text-white">Nom</th>
            <th scope="col" class="text-white">Email</th>
            <th scope="col" class="text-white">Phone</th>

            <th scope="col" class="text-white">Adresse</th>
            </tr>
        </thead>
        <tbody>
            @forelse($etudiants as $etudiant)
                <tr>
                    <td scope="row"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="text-decoration-none text-black text-left">{{ $etudiant->nom }}</a> </td>
                    <td scope="row"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="text-decoration-none text-black text-left">{{ $etudiant->email }}</a></td>
                    <td scope="row"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="text-decoration-none text-black text-left">{{ $etudiant->phone }}</a></td>
                    <td scope="row"><a href="{{ route('etudiant.show', $etudiant->id) }}" class="text-decoration-none text-black text-left">{{ $etudiant->adresse }}</a></td>
                </tr>
            @empty
                <li class="text-danger"> Aucun article de etudiant disponible </li>
            @endforelse
        </tbody>
    </table>
    
    <div class="text-center py-3 fw-semibold">{{ $etudiants }}</div>
                
</div>



@endsection