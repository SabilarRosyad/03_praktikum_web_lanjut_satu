@extends('app',['title'=>'jadwalPerkuliahan'])

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Jadwal Perkuliahan</h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tahun Akademik: 2022/2023 Genap</h3>
            </div>  
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Hari</td>
                            <td>Jam</td>
                            <td>Kode Mata Kuliah</td>
                            <td>Mata Kuliah</td>
                            <td>Dosen</td>
                            <td>Ruang</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($jadwalPerkuliahan as $a)
                        <tr>
                            <td>{{ $a -> hari }}</td>
                            <td>{{ $a -> jam }}</td>
                            <td>{{ $a -> kodeMK }}</td>
                            <td>{{ $a -> mataKuliah }}</td>
                            <td>{{ $a -> dosen }}</td>
                            <td>{{ $a -> ruang }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
             </div>
             <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
@endsection