@extends('layouts.main')

@section('title','Data')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<div class="my-5">
    <a href="/adddata" class="btn btn-primary">New</a>
    <a href="/deletedata" class="btn btn-primary">Delete</a>
</div>
    <table class = 'table table-striped'>
        <thead>
            <tr>
                <td><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked"></label>
                  </div>
                </td>
                <td>Action</td>
                <td>Project Name</td>
                <td>Client</td>
                <td>Project Start</td>
                <td>Project End</td>
                <td>Status</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $data)
            <tr>
                <td><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault"></label>
                  </div></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="/editdata/{{ $data->project_name }}">Edit</a>
                </td>
                <td>{{ $data->project_name }}</td>
                <td>{{ $data->client_name}}</td>
                <td>{{ $data->project_start }}</td>
                <td>{{ $data->project_end }}</td>
                <td>{{ $data->Project_status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection