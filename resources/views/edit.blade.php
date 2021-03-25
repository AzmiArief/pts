@extends('layout.index')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create</h3>
    </div>
    <form role="form" action="updateLatihan" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
      <div class="card-body">
        <div class="form-group">
          <label for="nama_karyawan">Name</label>
          <input type="text" class="form-control" id="nama_karyawan" 
          placeholder="Enter Name" name="nama_karyawan" value="{{ $data->nama_murid }}">
        </div>
        <div class="form-group">
            <label for="hadir">Hadir</label>
            <input type="number" max="100" class="form-control" id="hadir"
            placeholder="Enter Status" name="hadir">
        </div>
        <div class="form-group">
            <label for="izin">Izin</label>
            <input type="number" max="100" class="form-control" id="izin"
            placeholder="Enter Status" name="izin">
      </div>
      <div class="form-group">
        <label for="bolos">Bolos</label>
        <input type="number" max="100" class="form-control" id="bolos"
        placeholder="Enter Status" name="bolos">
      </div>
      <div class="form-group">
        <label for="status_karyawan">Keterangan</label>
        <select name="status_karyawan" class="form-control" id="status_karyawan" >
        <option value="0" {{ $data->status_karyawan == 0 ? "selected" : "" }}> Tidak Aktif</option>
        <option value="1" {{ $data->status_karyawan == 1 ? "selected" : "" }}> Aktif</option>
        </select>
  </div>     
    </form>
@endsection