
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Listing <a href="/dashboard" class="btn  btn-danger float-right"> Go Back </a></div>
                  {{-- <label for="exampleFormControlInput1">Email address</label>
                       <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> --}}
                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
                         <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Company name'])}}
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'Email')}}
                            {{Form::email('email', '',['class'=>'form-control', 'placeholder'=>'Contact mail'])}}
                            @error('email')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('phone', 'Phone')}}
                            {{Form::tel('phone', '',['class'=>'form-control', 'placeholder'=>'Contact number'])}}
                            @error('phone')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('address', 'Address')}}
                            {{Form::text('address', '',['class'=>'form-control', 'placeholder'=>'Business Address'])}}
                            @error('address')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('website', 'Website')}}
                            {{Form::url('website', 'https://',['class'=>'form-control', 'placeholder'=>'Business website'])}}
                            @error('website')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{Form::label('bio', 'Bio')}}
                            {{Form::textarea('bio', '',['class'=>'form-control', 'placeholder'=>'Tell us about the business'])}}
                            @error('bio')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                            {{Form::submit('Click Me!',['class'=>'btn btn-primary float-right'])}}
                    {!! Form::close() !!}

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
