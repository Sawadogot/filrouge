<!-- resources/views/clients/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required>

            <label for="nom">prenom :</label>
            <input type="text" name="nom" required>

            <label for="nom">Téléphone :</label>
            <input type="text" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" required>

            <label for="nom">Adresses :</label>
            <input type="text" name="nom" required>

            <!-- Ajoutez d'autres champs si nécessaire -->

            <a href="{{ route('clients.create') }}"> <button>Ajouter un client</button></a>
        </form>
    </div>
@endsection
