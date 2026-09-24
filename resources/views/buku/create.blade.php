@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h1>➕ Tambah Buku</h1>

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
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" value="{{ old('kode_buku') }}" placeholder="Contoh: BK-001">
            </div>

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Judul buku">
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" value="{{ old('penulis') }}" placeholder="Nama penulis">
            </div>

            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" value="{{ old('penerbit') }}" placeholder="Nama penerbit">
            </div>

            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" placeholder="Contoh: 2020">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Contoh: Fiksi, Sains">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" value="{{ old('stok') }}" placeholder="Jumlah stok">
            </div>

            <div class="form-group">
                <label>Rak</label>
                <input type="text" name="rak" value="{{ old('rak') }}" placeholder="Contoh: A-1">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
