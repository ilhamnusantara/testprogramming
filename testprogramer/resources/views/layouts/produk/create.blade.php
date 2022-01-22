@extends('halamanUtama')
@section('content')
    <form action="{{route('produk.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Id Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('id_produk') is-invalid @enderror" name="id_produk" id="id_produk" placeholder="ID Produk" value="{{ old('id_produk') }}">
                        @error('id_produk')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama_produk" placeholder="Nama Produk" value="{{ old('nama_produk') }}">
                        @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Harga <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Harga" value="{{ old('harga') }}">
                        @error('harga')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="{{ old('kategori') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" style="width: 100%;" name="status" id="status">
                            <option disable value>--pilih status--</option>
                            <option value="bisa dijual">bisa dijual</option>
                            <option value="tidak bisa dijual">tidak bisa dijual</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="content float-md-right">
                <a type="submit" class="btn btn-danger btn-lg" id="create" href="{{route('produk.index')}}">Batal</a>
                <button type="submit" class="btn btn-primary btn-lg" id="create">Create Produk</button>
            </div>
        </div>
    </form>
@endsection
