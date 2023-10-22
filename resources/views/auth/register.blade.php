@extends('layouts.landing')

@section('content')
<!-- ======= About Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>Pendaftaran Relawan Amin</h3>
        </header>
        <form action="{{url('registers')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row justify-content-center">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <label for="nik" class="form-label">NIK (No.KTP)</label>
                    <input type="number" class="form-control shadow-sm" name="nik" id="nik">
                </div>
                <div class="col-md-4">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control shadow-sm" name="name" id="nama">

                </div>
                <div class="col-md-4">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="number" class="form-control shadow-sm" name="usia" id="usia">
                </div>
                <div class="col-md-4">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control shadow-sm" name="no_hp" id="no_hp">
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control shadow-sm" name="email" id="email">
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select shadow-sm" name="gender" id="gender">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki Laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <hr class="mt-3 mb-3">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-12">
                            <label for="alamat_asal" class="form-label mt-1">Alamat Asal</label>
                            <textarea name="alamat_asal" id="alamat_asal" cols="30" rows="5" class="form-control shadow-sm"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="alamat_domisili" class="form-label mt-1">Alamat Domisili</label>
                            <textarea name="alamat_domisili" id="alamat_domisili" cols="30" rows="5" class="form-control shadow-sm"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="password"value="lmao123456">
                    <input type="hidden" name="password"value="lmao123456">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Upload Foto Ktp</label>
                    <label class="picture" for="picture__input" tabIndex="0">
                        <span class="picture__image"></span>
                    </label>

                    <input type="file" name="foto_ktp" id="picture__input">
                </div>

                <div class="col-md-12">
                    <div class="d-grid gap-2 mt-4">

                        <button class="btn btn-primary shadow-sm" type="submit">Daftar</button>
                    </div>
                </div>

            </div>

        </form>

    </div>


    </div>
</section><!-- End About Section -->


@endsection