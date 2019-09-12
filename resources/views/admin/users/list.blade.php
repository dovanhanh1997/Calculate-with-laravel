@extends('layouts/app')
@section('content')
<h1>This is List User</h1>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="" class="btn btn-primary">Update</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>
@endsection
