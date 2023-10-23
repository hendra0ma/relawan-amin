@extends('layouts.landing')

@section('content')
<!-- ======= About Section ======= -->
<section id="contact">
    <div class="container" data-aos="fade-up">

        <style>
            .section-header {
                position: absolute;
                top: 50px;
                left: 50%;
                transform: translateX(-50%);
            }
        </style>

        <header class="section-header text-center">
            <img src="{{asset('')}}assets/img/koalisi-perubahan-amin.png" style="width:250px;">
        </header>

        <div class="row" style="margin-top: 60px">

            <div class="col-md-12">
                <b>
                    <h4 style="font-weight:700" class="mb-4 text-center">PENDAFTARAN RELAWAN AMIN</h4>
                </b>
            </div>
            
            <div class="col-lg-12">

                <div class="form">
                    <form action="{{url('registers')}}" method="post" enctype="multipart/form-data" class="php-email-form">
                        @csrf
                        
                        <div class="row">
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
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="nik" class="form-label">NIK (No.KTP)</label>
                                        <input type="number" class="form-control shadow-sm" name="nik" id="nik">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control shadow-sm" name="name" id="nama">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="usia" class="form-label">Usia</label>
                                        <input type="number" class="form-control shadow-sm" name="usia" id="usia">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                                        <input type="number" class="form-control shadow-sm" name="no_hp" id="no_hp">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control shadow-sm" name="email" id="email">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label for="gender" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select shadow-sm"  name="gender" id="gender">
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                    
                                        <div class="row">
                                            <div class="col-md-12 my-1">
                                                <label for="alamat_asal" class="form-label">Alamat Asal</label>
                                                <textarea name="alamat_asal" id="alamat_asal" cols="30" rows="4"
                                                    class="form-control shadow-sm"></textarea>
                                            </div>
                                            <div class="col-md-12 my-1">
                                                <label for="alamat_domisili" class="form-label">Alamat Domisili</label>
                                                <textarea name="alamat_domisili" id="alamat_domisili" cols="30" rows="4"
                                                    class="form-control shadow-sm"></textarea>
                                            </div>
                                        </div>
                                        <input type="hidden" name="password" value="lmao123456">
                                        <input type="hidden" name="password" value="lmao123456">
                                    </div>
                                    <div class="col-md-4 my-2 px-2">
                                        <label class="form-label">Upload Foto Ktp</label>
                                        <label class="picture" for="picture__input" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>
                                    
                                        <input type="file" name="foto_ktp" id="picture__input">
                                    </div>
                                
                                    
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="alert alert-danger" role="alert">
                                Data pendaftaran relawan ini diberikan kepada sekretariat Baja Amin untuk digunakan sesuai
                                kepentingannya, terutama dalam pembentukan saksi-saksi di TPS dan lainnya.
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="button" class="btn btn-primary rounded-0 shadow-sm" onclick="$(`.php-email-form`).submit()">Daftar</button>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <a href="https://relawanamin.com/">Back to Home</a>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>

    </div>

</section><!-- End About Section -->


@endsection
