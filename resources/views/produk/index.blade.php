@extends('template.template')

<!-- Memberi nama untuk halaman kategori -->

@section('page-title')
Halaman Produk
@endsection

<!-- End penamaan halaman kategori -->

<!-- Bagian Konten dari halaman Kategori -->
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title">Data Semua Produk</h5>
                <p class="text-muted">Menampilkan seluruh data produk</p>

                <!-- button modals -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalform2">
                    Tambah Baru
                </button>

                <!-- Alert -->
                
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Yeay!</strong> {{session('success')}}.
                </div>
                @endif

                

                <!-- End of alert -->

                <!-- Area tabel -->
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped">
                        <thead>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Kategori Produk</th>
                        </thead>
                        <tbody>
                            <!-- loop  -->
                            @foreach ($data as $item)
                            <tr>
                                <td><a href="{{route('kategori.show', $item->id)}}" class="btn">{{$item->nama_kategori}}</a></td>
                                <td>{{$item->kode_unik}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalform2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('kategori.store')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" required id="field-1" placeholder="Wiskas">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Harga</label>
                                <input type="number" class="form-control" name="harga" required id="field-2" placeholder="20000">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Expired (Kosongkan jika no-expiration)</label>
                                <input type="date" class="form-control" name="expired" required id="field-3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Stok</label>
                                <input type="number" class="form-control" name="expired" required id="field-4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">link</label>
                                <input type="text" class="form-control" name="expired" placeholder="https://produksaya.com/produk" required id="field-4">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea name="deskripsi" id="" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<!-- end halaman konten. -->