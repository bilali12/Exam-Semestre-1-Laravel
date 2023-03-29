@extends('layout.app')
@section('content')
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header text-center"><h3>Les Trajets</h3></div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Depart</th>
                            <th>Arrivée</th>
                            <th>Duree</th>
                            <th>Prix</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($trajets as $trajet )
                        <tr>
                            <td>{{$trajet->depart}}</td>
                            <td>{{$trajet->arrive}}</td>
                            <td>{{$trajet->duree}}</td>
                            <td>{{$trajet->prix}}</td>

                            {{-- <td><a href="{{ route('trajet.destroy',['id' =>$trajet->id ]) }}" class="text-danger">supprimer</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
