@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Data Makul
                <a href="{{ route('makul.tambah') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">   
                    <div class="table-responsive">
                    <table class="table table-bardered">
                    <tr>
                        <th>NO.</th>
                        <th>KODE MAKUL</th>
                        <th>NAMA MAKUL</th>
                        <th>SKS</th>
                        <th>AKSI</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($makul as $mk)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$mk->kd_makul}}</td>
                        <td>{{$mk->nama_makul}}</td>
                        <td>{{$mk->sks}}</td>
                        <td>
                            <a href="{{ route('edit.makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
