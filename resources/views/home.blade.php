@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                    $user = Auth::user()
                    ?>
                    Bonjour {{ $user->firstname }}. Vous pouvez retrouver la liste des utilisateur <a href="/listusers">ici</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
