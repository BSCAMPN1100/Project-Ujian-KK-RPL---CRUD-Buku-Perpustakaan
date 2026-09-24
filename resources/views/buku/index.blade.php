@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="header-actions">
        <h1>📚 Daftar Buku Perpustakaan</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        @if($buku->isEmpty())
            <p style="text-align:center; color:#6b7280;">Belum ada data buku.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Rak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buku as $i => $b)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $b->kode_buku }}</td>
                            <td>{{ $b->judul }}</td>
                            <td>{{ $b->penulis }}</td>
                            <td>{{ $b->penerbit }}</td>
                            <td>{{ $b->tahun_terbit }}</td>
                            <td>{{ $b->kategori }}</td>
                            <td>{{ $b->stok }}</td>
                            <td>{{ $b->rak }}</td>
                            <td>
                                <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('buku.destroy', $b->id) }}"
                                      method="POST"
                                      style="display:inline-block;"
                                      onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
