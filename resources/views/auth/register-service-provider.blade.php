<!doctype html>
<html lang="en">

<head>
    <title>Safari Lines | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ asset('safari-lines/images/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('safari-lines/css/bootstrap-5.3.2.min.css') }}">


    <!-- Sidebar Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('safari-lines/css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('safari-lines/css/font-awesome.min.css') }}">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{ asset('safari-lines/css/style.css') }}">
    <link rel="stylesheet" id="cpswitch" href="{{ asset('safari-lines/css/orange.css') }}">
    <link rel="stylesheet" href="{{ asset('safari-lines/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('safari-lines/css/custom.css') }}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>

    </style>
</head>


<body>

    <div class="wrapper">
        <!--====== LOADER =====-->
        <div class="loader"></div>


        <!--======== SEARCH-OVERLAY =========-->
        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
            <div class="overlay-content">

                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="float-left" type="text" placeholder="Search.." name="search">
                            <button class="float-left" type="submit"><i class="fa fa-search"></i></button>
                        </div><!-- end input-group -->
                    </div><!-- end form-group -->
                </form>

            </div><!-- end overlay-content -->
        </div><!-- end overlay -->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><span><i class="fa fa-map-marker"></i></span>29 Land St,
                                    Lorem City, CA</li>
                                <li class="list-inline-item"><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->
                    <div class="col-12 col-md-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="login-1.html"><span><i
                                                class="fa fa-lock"></i></span>Login</a></li>
                                <li class="list-inline-item"><a href="registration-1.html"><span><i
                                                class="fa fa-plus"></i></span>Sign Up</a></li>
                                <li class="list-inline-item">
                                    <form>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="form-group currency">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">$</option>
                                                        <option value="">£</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="form-group language">
                                                    <span><i class="fa fa-angle-down"></i></span>
                                                    <select class="form-control">
                                                        <option value="">EN</option>
                                                        <option value="">UR</option>
                                                        <option value="">FR</option>
                                                        <option value="">IT</option>
                                                    </select>
                                                </div><!-- end form-group -->
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->




        <!--================ PAGE-COVER =================-->
        <section class="page-cover" id="cover-registration">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Registration As Service Provider</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->

        <section class="mt-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ route('register.service.provider') }}"
                            class="active btn btn-orange btn-block">Service Provider</a>
                        <a href="{{ route('register.customer') }}" class=" btn btn-orange btn-block">Customer</a>

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <section class="innerpage-wrapper">
            <div id="registration" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <form method="post" action="{{  route('register.service.provider') }}" id="register-service-provider">
                                    @csrf
                                    <div class="row">
                                        <h3>Registration</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="custom-form custom-form-fields col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    name="firstName" required />
                                                @error('firstName')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Company Name"
                                                    name="companyName" required />
                                                @error('companyName')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="State (optional for countries without a state field)"
                                                    name="state" />
                                                @error('state')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password" required />
                                                @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Security Question" name="securityQuestion" />
                                                    @error('securityQuestion')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Address Line 1" name="addressLine1" />
                                                    @error('addressLine1')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Address Line 2" name="addressLine2" />
                                                    @error('addressLine2')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div id="serviceProviderFields">
                                                <div class="form-group">
                                                    <select class="form-control" name="serviceProviderCategory"
                                                        id="serviceProviderCategory" required>
                                                        <option value="" selected disabled> Please Select Option
                                                        </option>
                                                        @foreach($spc as $spcs)
                                                            <option value="{{ $spcs->slug }}"> {{ $spcs->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                @error('serviceProviderCategory')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                <!-- Supporting Documents Upload -->
                                                <div id="supportingDocuments">
                                                    <!-- This area will be dynamically populated based on the selected category -->
                                                </div>
                                            </div>
                                            <div class="other-links">
                                                <div class="other-links">
                                                    <p class="link-line">Already Have An Account ? <a href="{{ route('login') }}">Login Here</a></p>

                                                    <button class="btn btn-orange btn-block g-recaptcha"
                                                    data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"
                                                    data-callback='onSubmit'
                                                    data-action='submit'>Register</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-form custom-form-fields col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    name="lastName" required />
                                                    @error('lastName')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email"
                                                    required />
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="City" name="city"
                                                    required />
                                                    @error('city')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>


                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm Password"
                                                    name="confirm_password" required />
                                                    @error('confirm_password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>





                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Security Answer"
                                                    name="securityAnswer" />
                                                    @error('securityAnswer')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror

                                                </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Country" name="country"
                                                    required />
                                                    @error('country')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number"
                                                    name="phoneNumber" required />
                                                    @error('phoneNumber')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Postal Code"
                                                    name="postalCode" />

                                                    @error('postalCode')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>

                                            <div class="form-group">
                                                @error('g-recaptcha-response')
                                                   <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            </form>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end registration -->
        </section>






    <!--======================= FOOTER =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

        <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-contact">
                        <h3 class="footer-heading">CONTACT US</h3>
                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                            <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                            <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-2 col-xl-2 footer-widget ftr-links">
                        <h3 class="footer-heading">COMPANY</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Flight</a></li>
                            <li><a href="#">Hotel</a></li>
                            <li><a href="#">Tours</a></li>
                            <li><a href="#">Cruise</a></li>
                            <li><a href="#">Cars</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-3 col-xl-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 footer-widget ftr-about">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit.</p>
                        <ul class="social-links list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-facebook"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-twitter"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-google-plus"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-pinterest-p"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-instagram"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-linkedin"></i></span></a></li>
                            <li class="list-inline-item"><a href="#"><span><i
                                            class="fa fa-youtube-play"></i></span></a></li>
                        </ul>
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->

        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="copyright">
                        <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                    </div><!-- end columns -->

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6" id="terms">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#">Terms & Condition</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-bottom -->

    </section><!-- end footer -->
    </div>

    <!--====== LOADER =====-->
    <div class="loader"></div>


    <!--===== FULL-PAGE-FORM ====-->





    <!-- Page Scripts Starts -->
    <script src="{{ asset('safari-lines/js/jquery-3.3.1.min.js') }} "></script>
    <script src="{{ asset('safari-lines/js/popper.min.js') }} "></script>
    <script src="{{ asset('safari-lines/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <script src="{{ asset('safari-lines/js/bootstrap-5.3.2.min.js') }} "></script>
    <script src="{{ asset('safari-lines/js/custom-navigation.js') }} "></script>



    <script>
        $(document).ready(function() {
            $('#serviceProviderCategory').on('change', function() {
                var selectedCategory = $(this).val();
                var supportingDocumentsHtml = '';

                // Clear previous documents
                $('#supportingDocuments').empty();

                // Generate supporting documents HTML based on the selected category
                switch (selectedCategory) {
                    case 'car-rental':
                        supportingDocumentsHtml += `
                            <div class="form-group">
                                <label for="certificateOfIncorporation">Certificate of Incorporation from Brela</label>
                                <input type="file" class="form-control" name="certificateOfIncorporation">
                            </div>
                            <div class="form-group">
                                <label for="tin">TIN (Tax Identification Number)</label>
                                <input type="file" class="form-control" name="tin">
                            </div>`;
                        break;
                    case 'hotel-accommodation':
                        supportingDocumentsHtml += `
                            <div class="form-group">
                                <label for="certificateOfIncorporation">Certificate of Incorporation from Brela</label>
                                <input type="file" class="form-control" name="certificateOfIncorporation">
                            </div>
                            <div class="form-group">
                                <label for="tin">TIN (Tax Identification Number)</label>
                                <input type="file" class="form-control" name="tin">
                            </div>`;
                        break;
                    case 'tour-packages':
                        supportingDocumentsHtml += `
                            <div class="form-group">
                                <label for="certificateOfIncorporation">Certificate of Incorporation from Brela</label>
                                <input type="file" class="form-control" name="certificateOfIncorporation">
                            </div>
                            <div class="form-group">
                                <label for="tin">TIN (Tax Identification Number)</label>
                                <input type="file" class="form-control" name="tin">
                            </div>
                            <div class="form-group">
                                <label for="tala">TALA (Tour Agent Tourism License)</label>
                                <input type="file" class="form-control" name="tala">
                            </div>`;
                        break;
                    case 'private-chartered-flights':
                        supportingDocumentsHtml += `
                            <div class="form-group">
                                <label for="certificateOfIncorporation">Certificate of Incorporation from Brela</label>
                                <input type="file" class="form-control" name="certificateOfIncorporation">
                            </div>
                            <div class="form-group">
                                <label for="tin">TIN (Tax Identification Number)</label>
                                <input type="file" class="form-control" name="tin">
                            </div>`;
                        break;
                    default:
                        // No additional documents required
                        break;
                }

                // Append supporting documents HTML to the container
                $('#supportingDocuments').html(supportingDocumentsHtml);
            });
        });
    </script>

<script>
    function onSubmit(token) {
      document.getElementById("register-service-provider").submit();
    }
  </script>
</body>

</html>
