@extends('template.template')

@section('page-title')
Detail Kategori
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-3">
                <h5 class="header-title">
                    {{$data->nama_kategori}}
                </h5>
                <!-- bagian tabel -->
                <div class="table-responsive p-3">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 30%;">Nama Kategori</th>
                            <td>{{$data->nama_kategori}}</td>
                        </tr>
                        <tr>
                            <th>Kode Unik</th>
                            <td>{{$data->kode_unik}}</td>
                        </tr>
                    </table>

                    <form action="" method="post">
                        @csrf
                        <a href="" class="btn text-primary">Edit</a>
                        <button type="submit" class="btn text-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal -->
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