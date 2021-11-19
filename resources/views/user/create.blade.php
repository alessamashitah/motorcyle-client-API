@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add User') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('user:store')}}" enctype="multipart/form-data"  >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection