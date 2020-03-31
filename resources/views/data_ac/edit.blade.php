@extends('temp.main')

@section('title', 'Update Data')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border" style="text-align: center">
                        <h3 class="box-title">Update Data</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/edit/' . $data->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aset">Pemilik Aset *</label>
                                <input type="text" class="form-control" id="aset" name="aset" value="{{$data->aset}}"
                                    required autocomplete="off">
                                <!-- @if($errors->has('aset'))
                        <div class="text-danger">
                            {{$errors->first('aset')}}
                        </div>
                        @endif -->
                            </div>
                            <div class="form-group">
                                <label for="wing">Wing *</label>
                                <select type="text" class="form-control" id="wing" name="wing" required
                                    autocomplete="off">
                                    <option value="{{$data->wing}}">{{$data->wing}}</option>
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
                                <select type="text" class="form-control" id="lantai" name="lantai" required
                                    autocomplete="off">
                                    <option value="{{$data->lantai}}">{{$data->lantai}}</option>
                                    <option value="">Select</option>
                                    <option value="Lantai 1">Lantai 1</option>
                                    <option value="Lantai 2">Lantai 2</option>
                                    <option value="Lantai 3">Lantai 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi *</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    value="{{$data->lokasi}}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="merk">Merk *</label>
                                <select type="text" class="form-control" id="merk" name="merk" required
                                    autocomplete="off">
                                    <option value="{{$data->merk}}">{{$data->merk}}</option>
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
                                    <option value="{{$data->jenis}}">{{$data->jenis}}</option>
                                    <option value="">Select</option>
                                    <option value="Inverter">Inverter</option>
                                    <option value="Convensional">Convensional
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="type">Type *</label>
                                <select type="text" class="form-control" id="type" name="type" required>
                                    <option value="{{$data->type}}">{{$data->type}}</option>
                                    <option value="">Select</option>
                                    <option value="Cassete">Cassete</option>
                                    <option value="Standing Floor">Standing Floor</option>
                                    <option value="Splite">Splite</option>
                                    <option value="Central">Central</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status">Status *</label>
                                <select type="text" class="form-control" id="status" name="status" required
                                    autocomplete="off">
                                    <option value="{{$data->status}}">{{$data->status}}</option>
                                    <option value="">Select</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="{{url('/data')}}" class="btn btn-default pull-right">Kembali</a>
                            <button type="submit" class="btn btn-primary pull-left">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection