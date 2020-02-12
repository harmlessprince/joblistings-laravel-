@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <a href="/listings/create" class="float-right btn btn-success"> Create Listing </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                
            </div>
            <div class="card">
                <div class="card-header">Listings </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        @forelse ($listings as $listing)
                        <tbody>
                            <tr>
                                <td scope="row">{{$listing->name}}</td>
                                <td><a href="listings/{{$listing->id}}/edit" class="btn btn-success"> Edit </a></td>
                            <td>
                                {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'onsubmit'=>'return confirm("Are you sure you want to delete this listings?")']) !!}
                                    @method('DELETE')
                                    {{Form::submit('Delete',['class'=>'btn btn-danger '])}}
                                {!! Form::close() !!}
                            </td>
                            
                            </tr>
                            @empty
                            <tr>
                                <td>No listings attached to this user</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                   
                        
                   
                        
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
