@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <div class="card-body">
                    La liste des utilisateurs enregistrés :
                    <br><br>
                    <?php
                    $users = Auth::user()->get()
                    ?>
                    <table>

                        <thead>

                        <th>Email</th>

                        <th>First Name</th>

                        <th>Last Name</th>

                        </thead>

                        <tbody>
                        @foreach($users as $user)

                        <tr>

                            <td>{{$user->email}} </td>

                            <td>{{$user->lastname}} </td>

                            <td>{{$user->firstname}} </td>

                        </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
