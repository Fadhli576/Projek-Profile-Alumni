@extends('layouts.layout')

@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Edit</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('alumni.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alumni.update', $alumnus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="card mx-auto" style="width: 50%">
            <div class="row mx-auto">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong> <br>
                        <img class="img-fluid my-2" src="/img/{{ $alumnus->foto }}" alt="" width="300px">
                        <input type="file" name="foto" class="form-control" placeholder="image">
                    </div>
                </div>
                @error('foto')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name"
                            value="{{ $alumnus->name }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Graduation Year:</strong>
                        <select name="graduate" class="form-select" aria-label="Default select example">
                            <option {{ $alumnus->graduate == '2010' ? 'selected' : '' }} value="2010">2010</option>
                            <option {{ $alumnus->graduate == '2011' ? 'selected' : '' }} value="2011">2011</option>
                            <option {{ $alumnus->graduate == '2012' ? 'selected' : '' }} value="2012">2012</option>
                            <option {{ $alumnus->graduate == '2013' ? 'selected' : '' }} value="2013">2013</option>
                            <option {{ $alumnus->graduate == '2014' ? 'selected' : '' }} value="2014">2014</option>
                            <option {{ $alumnus->graduate == '2015' ? 'selected' : '' }} value="2015">2015</option>
                            <option {{ $alumnus->graduate == '2016' ? 'selected' : '' }} value="2016">2016</option>
                            <option {{ $alumnus->graduate == '2017' ? 'selected' : '' }} value="2017">2017</option>
                            <option {{ $alumnus->graduate == '2018' ? 'selected' : '' }} value="2018">2018</option>
                            <option {{ $alumnus->graduate == '2019' ? 'selected' : '' }} value="2019">2019</option>
                            <option {{ $alumnus->graduate == '2020' ? 'selected' : '' }} value="2020">2020</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <strong>Major:</strong> <br>
                        <select name="major_id" class="form-select" aria-label="Default select example">
                            <option selected hidden>Select Major</option>
                            <option {{ $alumnus->major->name == 'HTL' ? 'selected' : '' }} value="1">HTL</option>
                            <option {{ $alumnus->major->name == 'PPLG' ? 'selected' : '' }} value="2">PPLG</option>
                            <option {{ $alumnus->major->name == 'TJKT' ? 'selected' : '' }} value="3">TJKT</option>
                            <option {{ $alumnus->major->name == 'MPLB' ? 'selected' : '' }} value="4">MPLB</option>
                            <option {{ $alumnus->major->name == 'DKV' ? 'selected' : '' }} value="5">DKV</option>
                            <option {{ $alumnus->major->name == 'PMN' ? 'selected' : '' }} value="6">PMN</option>
                            <option {{ $alumnus->major->name == 'KLN' ? 'selected' : '' }} value="7">KLN</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Position:</strong>
                        <input type="text" name="position" class="form-control" placeholder="Position"
                            value="{{ $alumnus->position }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <input type="radio" name="status" value="Working"
                            {{ $alumnus->status == 'Working' ? 'checked' : '' }}> Working
                        <input type="radio" name="status" value="Not Working"
                            {{ $alumnus->status == 'Not Working' ? 'checked' : '' }}> Not yet Working
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary my-4">Submit</button>
                </div>
            </div>
        </div>

    </form>


@endsection
