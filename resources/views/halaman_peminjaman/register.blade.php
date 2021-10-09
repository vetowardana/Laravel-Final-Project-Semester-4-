@extends('layouts.halaman_peminjaman')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Login/Register</h2>
                    <div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ route('register.index') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Login Box Area =================-->
    <!-- <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-lg-6">
                    <div class="login_form_inner">
                        <h3>Register</h3>
                        @csrf
                            <div class="col-md-12 form-group">
                                <input type="name" class="form-control" id="name" name="name" placeholder="Nama Lengkap Address">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="******">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="remember">
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn submit_btn">Log In</button>
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <form action="{{ route('register.store') }}" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="name" required="required"> <br/>
        E-mail <input type="email" name="email" required="required"> <br/>
        Password <input type="password" name="password" required="required"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
@endsection