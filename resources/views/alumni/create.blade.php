@extends('layouts.layout')

@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Create</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('alumni.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mx-auto" style="width: 50%">
            <div class="row mx-auto">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="foto" class="form-control">
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
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                @error('name')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-6">
                    <div class="form-group">
                        <strong>Graduation Year:</strong>
                        <select name="graduate" class="form-select" aria-label="Default select example">
                            <option selected hidden>Select Graduation Year</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                </div>
                @error('graduate')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-6">
                    <div class="form-group">
                        <strong>Major:</strong> <br>
                        <select name="major_id" class="form-select" aria-label="Default select example">
                            <option selected hidden>Select Major</option>
                            <option value="1">HTL</option>
                            <option value="2">PPLG</option>
                            <option value="3">TJKT</option>
                            <option value="4">MPLB</option>
                            <option value="5">DKV</option>
                            <option value="6">PMN</option>
                            <option value="7">KLN</option>
                        </select>
                    </div>
                </div>
                @error('major')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Position:</strong>
                        <input type="text" name="position" class="form-control" placeholder="Position">
                    </div>
                </div>
                @error('position')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        <input type="radio" name="status" value="Working"> Working
                        <input type="radio" name="status" value="Not Working"> Not yet Working
                    </div>
                </div>
                @error('status')
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                    </div>
                @enderror
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary my-4">Submit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
