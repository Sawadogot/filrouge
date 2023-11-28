<!-- resources/views/clients/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des clients</h1>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <!-- <th>Actions</th> -->
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->téléphone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->Adresse }}</td>
                        <!-- <td>{{ $client->Actions }}</td> -->
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Aucun client trouvé</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
