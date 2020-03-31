@extends('temp.main')
@section('title', 'Data Airco')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="flash-data" data-flashdata="{{session('pesan')}}"></div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                        <a data-toggle="modal" data-target="#modal-tambah" class="btn btn-primary pull-right"><i
                                class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align:center">Aset</th>
                                    <th style="text-align:center">Wing</th>
                                    <th style="text-align:center">Lantai</th>
                                    <th style="text-align:center">Lokasi</th>
                                    <th style="text-align:center">Merk</th>
                                    <th style="text-align:center">Jenis</th>
                                    <th style="text-align:center">Status</th>
                                    <th style="text-align:center">Tanggal Update</th>
                                    <th style="text-align:center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr style="text-align:center">
                                    <td>{{$row->aset}}</td>
                                    <td>{{$row->wing}}</td>
                                    <td>{{$row->lantai}}</td>
                                    <td>{{$row->lokasi}}</td>
                                    <td>{{$row->merk}}</td>
                                    <td>{{$row->jenis}}</td>
                                    <!-- STATUS -->
                                    @if($row->status == "Normal")
                                    <td><a href="#"><span class="label label-success">{{$row->status}}</span></a></td>
                                    @else
                                    <td><a href="#"><span class="label label-danger" title="{{$row->jenis}}"
                                                data-toggle="tooltip">{{$row->status}}</span></a></td>
                                    @endif
                                    <!-- ENDSTATUS -->
                                    <td>{{$row->updated_at}}</td>
                                    <td>
                                        <a href="{{url('/edit/' . $row->id)}}" class="btn btn-info btn-xs"><i
                                                class="fa fa-pencil"></i></a>

                                        <a id="btn-det" data-toggle="modal" data-target="#btn-detail"
                                            data-type="{{$row->type}}" class="btn btn-warning btn-xs"><i
                                                class="fa fa-eye"></i></a>

                                        <a id="btn-del" href="{{url('/delete/' . $row->id)}}"
                                            class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="text-align: center">Form Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="{{url('/data')}}" method="post">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aset">Pemilik Aset *</label>
                            <input type="text" class="form-control" id="aset" name="aset"
                                placeholder="Masukan Pemilik Aset..." required autocomplete="off">
                            <!-- @if($errors->has('aset'))
                        <div class="text-danger">
                            {{$errors->first('aset')}}
                        </div>
                        @endif -->
                        </div>
                        <div class="form-group">
                            <label for="wing">Wing *</label>
                            <select type="text" class="form-control" id="wing" name="wing" placeholder="Masukan Wing..."
                                required autocomplete="off">
                                <option value="">Select</option>
                                <option value="Wing A">Wing A</option>
                                <option value="Wing B">Wing B</option>
                                <option value="Wing C">Wing C</option>
                                <option value="Wing D">Wing D</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lantai">Lantai *</label>
                            <select type="text" class="form-control" id="lantai" name="lantai"
                                placeholder="Masukan Lantai..." required autocomplete="off">
                                <option value="">Select</option>
                                <option value="Lantai 1">Lantai 1</option>
                                <option value="Lantai 2">Lantai 2</option>
                                <option value="Lantai 3">Lantai 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi *</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                placeholder="Masukan Lokasi..." required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="merk">Merk *</label>
                            <select type="text" class="form-control" id="merk" name="merk" placeholder="Masukan Merk..."
                                required autocomplete="off">
                                <option value="">Select</option>
                                <option value="Daikin">Daikin</option>
                                <option value="Panasonic">Panasonic</option>
                                <option value="LG">LG</option>
                                <option value="Sharp">Sharp</option>
                                <option value="Mitshubisi">Mitshibisi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis *</label>
                            <select type="text" class="form-control" id="jenis" name="jenis" required>
                                <option value="">Select</option>
                                <option value="Inverter">Inverter</option>
                                <option value="Convensional">Convensional
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Type *</label>
                            <select type="text" class="form-control" id="type" name="type" required>
                                <option value="">Select</option>
                                <option value="Cassete">Cassete</option>
                                <option value="Standing Floor">Standing Floor</option>
                                <option value="Splite">Splite</option>
                                <option value="Central">Central</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status *</label>
                            <select type="text" class="form-control" id="status" name="status"
                                placeholder="Masukan Status..." required autocomplete="off">
                                <option value="">Select</option>
                                <option value="Normal">Normal</option>
                                <option value="Rusak">Rusak</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary pull-left">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="btn-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Detail Unit</h4>
            </div>
            <form>
                <div class="modal-body" id="detail-body">
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tr style="text-align: center">
                                <td>Type</td>
                                <td id="type"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection



@section('data_table')
<script>
$(document).on("click", "#btn-det", function() {

    const type = $(this).data('type');

    $("#detail-body #type").text(type);

});

$(document).on('click', '#btn-del', function(e) {
    const href = $(this).attr('href')
    e.preventDefault();
    Swal.fire({
        title: 'Apa kamu yakin?',
        text: "Kamu tidak dapat mengembalikan ini!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, hapus itu!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
            Swal.fire(
                'Deleted!',
                'File berhasil dihapus',
                'success'
            )
        }
    });
});
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
@endsection