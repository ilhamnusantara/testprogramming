@extends('halamanUtama')
@section('content')
    <div class="card-body">
        <div class="col-sm-12 text-right">
            <form method="get" action="{{route('produk.create')}}">
                <a type="submit" class="btn btn-info btn-sm-4" id="create" href="{{route('produk.dijual')}}">Produk bisa dijual</a>
                <button class="btn btn-primary btn-sm-4" type="submit">
                    Create
                </button>
            </form>
        </div>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
                <th>id produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produks as $produk)
                <tr>
                    <td class="project-state text-center">{{$produk->id_produk}}</td>
                    <td class="project-state">{{$produk->nama_produk}}</td>
                    <td class="project-state">{{$produk->harga}}</td>
                    <td class="project-state">{{$produk->kategori}}</td>
                    <td class="project-state">{{$produk->status}}</td>
                    <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="{{route('produk.edit', $produk->id_produk)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form method="POST" action="{{route('produk.destroy', $produk->id_produk)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <input type="submit" class=" btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus, lanjutkan?')" value="Delete">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Instansi</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
