@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User profile</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td class="param">First Name:</td>
                                <td>{{$user->first_name}}</td>
                            </tr>
                            @if($user->last_name)
                                <tr>
                                    <td class="param">Last Name:</td>
                                    <td>{{$user->last_name}}</td>
                                </tr>
                            @endif
                            <tr>
                                <td class="param">E-mail:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td class="param">Phone:</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td class="param">Address:</td>
                                <td>{{$user->address}}</td>
                            </tr>
                            <tr>
                                <td class="param">Age:</td>
                                <td>{{$user->age}}</td>
                            </tr>
                            <tr>
                                <td class="param">Date registration:</td>
                                <td>{{$user->created_at->format("d.m.Y")}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
