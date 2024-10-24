@extends('template.template')

<!-- Memberi nama untuk halaman kategori -->

@section('page-title')
Halaman Kategori
@endsection

<!-- End penamaan halaman kategori -->

<!-- Bagian Konten dari halaman Kategori -->
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="header-title">Kategori Produk</h5>
                <p class="text-muted">Data produk berdasarkan kategori</p>

                <!-- button modals -->
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalform2">
                    Tambah Baru
                </button>

                <!-- Area tabel -->
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped">
                        <thead>
                            <th>Nama Kategori</th>
                            <th>Kode Unik</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="btn">Elektronik</a></td>
                                <td>2323434345</td>
                            </tr>
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
                    <h5 class="modal-title">Tambah Kategori Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" required id="field-1" placeholder="Elekrtronik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode Unik</label>
                                <input type="text" class="form-control" name="kode_unik" required id="field-2" placeholder="EL-1">
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