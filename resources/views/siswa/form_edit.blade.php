@extends('layout.header')
@section('title','edit siswa')
@section('content')
<h2>Edit Siswa</h2>
<div class="row">
  <div class="col">
  <form action="{{url('/simpan_edit/'.$data->id)}}" method="POST"  enctype="multipart/form-data">
  @method('patch')
    @csrf
      <div class="form-group">
         <label for="nis"></label>
         <input type="number" name="nis" class="form form-control @error('nis') is-invalid @enderror" 
         readonly value="{{$data->nis}}">
         @error('nis')
          <div class="invalid-feedback">{{$message}}</div>   
         @enderror  
      </div>
      <div class="form-group pt-2">
         <label for="nama"></label>
         <input type="text" name="nama" class="form form-control @error('nama') is-invalid @enderror" required 
         placeholder="Nama" value="{{$data->nama}}">
         @error('nama')
          <div class="invalid-feedback">{{$message}}</div>   
         @enderror
      </div>
      <div class="form-group pt-2">
      <label for="alamat"></label>
        <textarea name="alamat" class="form form-control  @error('alamat') is-invalid @enderror" 
        cols="30" rows="10" required>{{$data->alamat}}</textarea>
        @error('alamat')
          <div class="invalid-feedback">{{$message}}</div>   
         @enderror
      </div>
      <div class="form-group pt-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
  <div class="col"></div>
  <div class="col"></div>
</div>



@endsection
 
