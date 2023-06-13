@include('header')

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
                    <h6 style="text-align: center;margin-bottom: 1em;">Already have an account? <a style="color: #6f42c1;" href="/login">Login</a></h6>
                </div>
                <div class="col-12">
                    <h2 class="contact-title" style="text-align: center;">Please Enter Your Details</h2>
                </div>
                <div class="col-lg-8">
                    <form action="#">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="number" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required="" class="single-input">
                        </div>

                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select style="display: none;">
                                    <option value=" 1">Country</option>
                                    <option value="1">Bangladesh</option>
                                    <option value="1">India</option>
                                    <option value="1">England</option>
                                    <option value="1">Srilanka</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Country</span>
                                    <ul class="list">
                                        <li data-value=" 1" class="option selected focus">Country</li>
                                        <li data-value="1" class="option">Bangladesh</li>
                                        <li data-value="1" class="option">India</li>
                                        <li data-value="1" class="option">England</li>
                                        <li data-value="1" class="option">Srilanka</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select style="display: none;">
                                    <option value=" 1">City</option>
                                    <option value="1">Dhaka</option>
                                    <option value="1">Dilli</option>
                                    <option value="1">Newyork</option>
                                    <option value="1">Islamabad</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">City</span>
                                    <ul class="list">
                                        <li data-value=" 1" class="option selected">City</li>
                                        <li data-value="1" class="option">Dhaka</li>
                                        <li data-value="1" class="option">Dilli</li>
                                        <li data-value="1" class="option">Newyork</li>
                                        <li data-value="1" class="option focus">Islamabad</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn join-submit-btn">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
</main>

@include('footer')