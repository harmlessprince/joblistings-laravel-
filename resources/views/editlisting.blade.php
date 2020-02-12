
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Listing <a href="/dashboard" class="btn  btn-danger float-right"> Go Back </a></div>
                <div class="card-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
                        @method('PUT')
                         <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $listing->name,['class'=>'form-control', 'placeholder'=>'Company name'])}}
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'Email')}}
                            {{Form::email('email', $listing->email,['class'=>'form-control', 'placeholder'=>'Contact mail'])}}
                            @error('email')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('phone', 'Phone')}}
                            {{Form::tel('phone', $listing->phone,['class'=>'form-control', 'placeholder'=>'Contact number'])}}
                            @error('phone')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('address', 'Address')}}
                            {{Form::text('address', $listing->address,['class'=>'form-control', 'placeholder'=>'Business Address'])}}
                            @error('address')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('website', 'Website')}}
                            {{Form::url('website', $listing->website,['class'=>'form-control', 'placeholder'=>'Business website'])}}
                            @error('website')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('bio', 'Bio')}}
                            {{Form::textarea('bio', $listing->bio,['class'=>'form-control', 'placeholder'=>'Tell us about the business'])}}
                            @error('bio')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                            {{Form::submit('Update Listing!',['class'=>'btn btn-success float-right'])}}
                    {!! Form::close() !!}

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
