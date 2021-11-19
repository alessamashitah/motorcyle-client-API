@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('user:create') }}" class="btn btn-primary">Add User</a>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users['data'] as $key=>$user)
                <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td> <a href="{{ route('user:edit', $user['id']) }}" type="button" class="btn btn-primary">Edit</a>
                <tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection