@extends('layouts.frontend.app',[
    'title' => 'Contact',
])
@section('content')
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-6">
                <div class="contact--info mt-4">
                    <h4>Info Kontak</h4>
                    <ul class="list-unstyled contact-list">
                        <li>
                            <i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>
                            <span class="font-weight-bold">Jam Masuk:</span>
                            08:00 WIB  - 13:00 WIB
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw" aria-hidden="true"></i>
                            <span class="font-weight-bold">No Telp:</span>
                            +62 851 7202 5441
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw" aria-hidden="true"></i>
                            <span class="font-weight-bold">Email:</span>
                            MasDu@gmail.com
                        </li>
                        <li>
                            <i class="fa fa-map-pin fa-fw" aria-hidden="true"></i>
                            <span class="font-weight-bold">Alamat:</span>
                            JLN. SYIAH KUALA NO. 5 BANDA ACEH (23123)
                        </li>
                    </ul>
                </div>
                <div class="row mt-2">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.042361910178!2d95.3297588!3d5.56074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403722457ee995%3A0x164d02770b7264d!2sMA%20Darul%20Ulum%20YPUI%20Banda%20Aceh!5e0!3m2!1sid!2sid!4v1717613005919!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
            </div>

            <div class="col-md-6">
                <div class="contact--info mt-4">
                    <h4>Saran/kritik</h4>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" cols="30" rows="5" placeholder="Pesan"></textarea>
                                    <small class="form-text text-muted">Maksimal kirim 5 kali dengan email yang sama</small>
                                    @error('isi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
