@extends('layouts.app')

@section('title', 'Skill Table')

@section('content')

<h1>Skill de {{$user->firstname}} {{$user->lastname}} (email: {{ $user->email}})</h1>
<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($user->skills as $skill)
    <tr>
        <td>{{$skill->id}}</td>
        <td>{{$skill->name}}</td>
        <td>{{$skill->description}}</td>
        <td><a href="{{ route('skills.edit', $skill->id) }}">Edit</a></td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
