@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>✏️ Edit Buku</h1>

    @if($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" value="{{ old('kode_buku', $buku->kode_buku) }}">
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}">
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}">
            </div>

            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}">
            </div>

            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori', $buku->kategori) }}">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" value="{{ old('stok', $buku->stok) }}">
            </div>

            <div class="form-group">
                <label>Rak</label>
                <input type="text" name="rak" value="{{ old('rak', $buku->rak) }}">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
