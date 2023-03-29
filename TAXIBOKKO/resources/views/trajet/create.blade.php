@extends('layout.app')
@section('content')
    <div class="container col-md-4">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Ajout de trajet</h3>
            </div>
            <div class="card-body">
                <form action="/store" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Depart</label>
                        <input type="text" class="form-control" name="depart" autofocus autocomplete="off">
                        <label for="">Arrivée</label>
                        <input type="text" class="form-control" name="arrive" autocomplete="off">
                        <label for="">Duree</label>
                        <input type="number" class="form-control" name="duree" step="0.1">
                        <label for="">Prix</label>
                        <input type="number" min="100" max="10000" class="form-control" name="prix">
                        <br><br>
                        <div class="row">
                            <button type="submit" class="btn btn-success col-md-3" style="margin-left: 30%">Ajouter</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
