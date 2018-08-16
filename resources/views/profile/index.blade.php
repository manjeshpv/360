@extends('layout')

@section('content')
    <br>
    <br>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Email</th>
                <th>{{$user->email}}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>USN</td>
                <td>{{$user->usn}}</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>{{$user->wifi_username}}</td>
            </tr>
            <tr>
                <td>Wifi Password</td>
                <td>{{$user->wifi_password}}</td>
            </tr>
            <tr>
                <td>Portal Password</td>
                <td>{{$user->portal_password}}</td>
            </tr>
            <tr>
                <td>Department</td>
                <td>{{$user->department_id}}</td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>{{$user->mobile}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection