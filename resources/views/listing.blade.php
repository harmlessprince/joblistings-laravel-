@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}} <a href="/listings" class="btn btn-danger float-right"> Go Back</a></div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Address: </strong> {{$listing->address}} </li>
                        <li class="list-group-item"><strong>Website:</strong> <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a> </li>
                        <li class="list-group-item"><strong>Email:</strong> {{$listing->email}}</li>
                        <li class="list-group-item"><strong>Phone: </strong> {{$listing->phone}}</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
