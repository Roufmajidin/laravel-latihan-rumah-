@extends('home')
@section('title', 'Tambah Materi')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Absen MK {{ $absensi->matakuliah['nama_mk'] }} </h4>
        </div>
        <div class="card-body">

            <audio id="chatAudio">
                <source src="{{ asset('style/beep.mp3') }}" type="audio/mpeg">
            </audio>

            <form class="form-group" action="/absenproses/{{ $absensi->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">

                    <div id="reader" width="100px" class="form-group ml-3 col-md-3"></div>



                    <div class="form-group ml-4 col-md-5 row">
                        <label style="color:#17a2b8"> ID MK: {{ $absensi->id }}
                        </label>
                        <input type="text" class="form-control" data-id="{{ $absensi->id }}" id="id_jadwal"
                            value="{{ $absensi->id }}" name="jadwal_id" placeholder="">



                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group ml-4 col-md-2">
                        <label style="color:#17a2b8">Mhs id</label>
                        <input type="text" class="form-control" id="mhs_id" data-id="{{ $m->id }}"
                            name="mahasiswa_id" value="{{ $m->user_id }}" placeholder="">

                    </div>

                    <div class="form-group ml-4 col-md-2">
                        <label style="color:#17a2b8">dos id</label>
                        <input type="text" class="form-control" id="ur"
                            data-id="{{ Crypt::encrypt($absensi->id) }}" name="dosen_id"
                            value="{{ Crypt::encrypt($absensiii->dosen_id) }}" placeholder="">

                    </div>

                    <div class="form-group ml-3 col-md-7">
                        <label style="color:#17a2b8">waktu sekarang</label>
                        <input type="text" class="form-control" name="tanggal_absen" value="{{ $date }}"
                            placeholder="">


                    </div>


                </div>






        </div>


        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </div>
    </form>

@endsection
