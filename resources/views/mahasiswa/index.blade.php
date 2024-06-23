@extends('mahasiswa.layout')

@section('content')
  <div class="row mt-5">
    <div class="col-lg-12 margin-tb">
      <div class="float-start">
        <h2>CRUD Mahasiswa</h2>
      </div>
      <div class="float-end">
        <a class="btn btn-success" href="{{ route('mahasiswa.create')}}">Create New Mahasiswa</a>
      </div>
    </div>
  </div>

  @if ($message = Session::get("success"))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mahasiswa)
    <tr>
      <td>{{ ++$i }}</td>
      <td>{{ $mahasiswa->nama }}</td>
      <td>{{ $mahasiswa->kelas }}</td>
      <td>
        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post">
          <a class="btn btn-info" href="{{ route('mahasiswa.show', $mahasiswa->id) }}">Show</a>
          <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>

          @csrf
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="nama">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Kelas:</strong>
                <input type="text" name="kelas" class="form-control" placeholder="kelas">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </td>
    </tr>
  </table>

  {!! $mahasiswa->link() !!}
@endsection