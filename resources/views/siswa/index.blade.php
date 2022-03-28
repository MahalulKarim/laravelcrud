@extends('layout.header')
@section('title','index siswa')
@section('content')
<h2 class="mb-2">Data Siswa</h2>
<a href="{{url('/tambah_siswa')}}" class="btn btn-primary">Tambah Siswa</a>
@if(session('status'))
<div class="row pt-2 mb-2">
  <div class="col md-4">
     <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('status')}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
  </div>
  <div class="col"></div>
  <div class="col"></div>

</div>

@endif
<table class="table">
 <thead>
  <tr> 
    <th>Nis</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
  </tr>
 </thead>
 <tbody>
 @foreach($data as $d)
 <tr>
    <td>{{$d->nis}}</td>
    <td>{{$d->nama}}</td>
    <td>{{$d->alamat}}</td>
    <td>
     <a href="{{url('/edit_siswa/'.$d->id)}}" class="btn btn-primary">Edit</a>
     <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$d->id}}">Hapus</a>
    </td>
  </tr>

  <!-- Modal -->
   <div class="modal fade" id="hapus{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-md">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Hapus Data!</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
           <h5 class="text-center text-danger">Yakin Hapus Data {{$d->nama}}!</h5>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
           <a href="{{url('/hapus/'.$d->id)}}" class="btn btn-danger">Hapus</a>
         </div>
       </div>
     </div>
   </div>



  @endforeach
 </tbody>
</table>



@endsection
 
