@extends('layouts.landing')

@section('content')
<!-- ======= About Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header text-center"style="margin-top:-35px">
            <img src="{{asset('')}}assets/img/koalisi-perubahan-amin.png"style="width:200px;height:auto">
            <b>
                <h5 class="mt-2"style="font-weight:700">Pendaftaran Relawan Amin</h5>
            </b>
        </header>
        <div class="card border-0"style="margin-top:-23px">
            <div class="card-body">


                <form action="{{url('registers')}}" method="post" enctype="multipart/form-data">
                    @csrf
        
                    <div class="row justify-content-center">
                        <div class="col-md-12 px-2">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="nik" class="form-label mt-2">NIK (No.KTP)</label>
                            <input type="number" class="form-control shadow-sm" name="nik" id="nik">
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="nama" class="form-label mt-3">Nama Lengkap</label>
                            <input type="text" class="form-control shadow-sm" name="name" id="nama">
        
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="usia" class="form-label mt-3">Usia</label>
                            <input type="number" class="form-control shadow-sm" name="usia" id="usia">
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="no_hp" class="form-label mt-3">Nomor Handphone</label>
                            <input type="number" class="form-control shadow-sm" name="no_hp" id="no_hp">
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="email" class="form-label mt-3">email</label>
                            <input type="email" class="form-control shadow-sm" name="email" id="email">
                        </div>
                        <div class="col-md-4 px-2">
                            <label for="gender" class="form-label mt-3">Jenis Kelamin</label>
                            <select class="form-select shadow-sm" name="gender" id="gender">
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
                                    <label for="alamat_asal" class="form-label mt-3">Alamat Asal</label>
                                    <textarea name="alamat_asal" id="alamat_asal" cols="30" rows="5" class="form-control shadow-sm"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat_domisili" class="form-label mt-3">Alamat Domisili</label>
                                    <textarea name="alamat_domisili" id="alamat_domisili" cols="30" rows="5" class="form-control shadow-sm"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="password"value="lmao123456">
                            <input type="hidden" name="password"value="lmao123456">
                        </div>
                        <div class="col-md-4 px-2">
                            <label class="form-label mt-3">Upload Foto Ktp</label>
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

    </div>


    </div>
</section><!-- End About Section -->


@endsection