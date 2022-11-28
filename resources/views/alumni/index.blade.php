@extends('layouts.layout')

@section('container')
    <div class="my-4" id="">
        <img src="img/Gedung.jpg" alt="" class="img-fluid" style="width: 100%;">
    </div>
    <div class="row">
        <div class="col-6 text-start">
            <h1>Data Alumni</h1>
        </div>
        <div class="col-6 text-end">
            <h3>
                <a href="{{ route('alumni.create') }}" id="add">+ Add data</a>
            </h3>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-6 text-start">
            <form method="get" action="{{ route('alumni.index') }}">
                @csrf
                <select name="major_id">
                    <option value="1">HTL</option>
                    <option value="2">PPLG</option>
                    <option value="3">TJKT</option>
                    <option value="4">MPLB</option>
                    <option value="5">DKV</option>
                    <option value="6">PMN</option>
                    <option value="7">KLN</option>
                </select>
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="col-6 align-self-end text-end justify-content-end float-right">
            <form action="{{ route('alumni.index') }}" method="GET">
                @if (request('major_id'))
                    <input type="hidden" name="major_id" value="{{ request('major_id') }}">
                @endif
                <div class="input-group mb-3" style="width: 300px">
                    <input type="text" class="form-control" placeholder="Search..." aria-describedby="button-addon2"
                        name="search">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table justify-content-center text-center align-center">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Graduation year</th>
            <th>Major</th>
            <th>Status</th>
            <th>Position</th>
            <th width="280px">Action</th>
        </thead>

        <tr>
            @foreach ($alumnis as $alumnus)
        <tr>
            <td><img src="/img/{{ $alumnus->foto }}" alt="" width="200px"></td>
            <td>{{ $alumnus->name }}</td>
            <td>{{ $alumnus->graduate }}</td>
            <td>{{ $alumnus->major->name }}</td>
            <td>{{ $alumnus->status }}</td>
            <td>{{ $alumnus->position }}</td>
            <td>
                <form action="{{ route('alumni.destroy', $alumnus->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('alumni.edit', $alumnus->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin ingin menghapus postingan ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        {{ $alumnis->links() }}
    @endsection
