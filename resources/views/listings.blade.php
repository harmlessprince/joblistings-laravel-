@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listings  <a href="/dashboard" class="float-right btn btn-success"> Goto Dashboard</a></div>
                <div class="card-body">
                    <div class="list-group">
                        @forelse ($listings as $listing)
                    <a href="/listings/{{$listing->id}}" class="list-group-item list-group-item-action">
                           {{$listing->name}}
                        </a>
                        @empty
                            <p>No listings are available at the moment</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
