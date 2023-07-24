@include('header')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Reserve Your Place</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <div class="col-12">
                    <h6 style="text-align: center;margin-bottom: 1em;">Don't have an account? <a style="color: #6f42c1;" href="/join">Sign Up</a></h6>
                </div>
                <div class="col-12">
                    <h2 class="contact-title" style="text-align: center;">Please Enter Your Details</h2>
                </div>
                <div class="col-lg-8">
                    <form  method="POST" action="/login">
                        @csrf
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn join-submit-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
</main>

@include('footer')