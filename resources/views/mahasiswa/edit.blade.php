@extends('mahasiswa.layout')

@section('content')
<div class="row mt-5">
  <div class="col-lg-12 margin-tb">
    <div class="float-start">
      <h2>Edit Mahasiswa</h2>
    </div>
    <div class="float-end">
      <a class="btn btn-success" href="{{ route('mahasiswa.index')}}">Back</a>
    </div>
  </div>
</div>

@if ($error->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input. <br><br>
  <ul>
    @foreach ($error->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">

  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Nama:</strong>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="nama">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Kelas:</strong>
        <input name="kelas" value="{{ $mahasiswa->kelas }}" class="form-control" placeholder="kelas">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 text-center mt-3">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
@endsection