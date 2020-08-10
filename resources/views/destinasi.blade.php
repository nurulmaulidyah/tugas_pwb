<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Medan</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/destinasi.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" href="{{asset('slick/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick-1.8.1/slick/slick-theme.css')}}">


</head>
<body>
    

    <!-- header -->
    <section class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="navbar-icon">
                    <div class="media">
                        <div class="media-body mt-3">
                          <h5>Kota <br><span>Medan</span></h5>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('index')}}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('sejarah')}}">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('destinasi')}}">Destinasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </section>

    <div class="parallax">
       
    </div>

   <!-- discover -->
   <section id="discover" class="discover">
        <h1>Destinasi</h1>
        <div class="row my-3" style="background-color: darkgoldenrod; border-radius: 10px;">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 px-5 pt-4" data-aos="zoo-out">
                        <div class="content text-center text-white rounded-5">
                            <h2>Temukan Segalanya</h2>
                            <p class="text-white paragraph">Senangkan diri anda karena <br>
                                                        Iceland adalah tempat yang menyenangkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background-color: darkgoldenrod; border-radius: 5px; padding: 20px 0px;">
            <div class="col-lg-7">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/hillpark.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/keling.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/kincir.png')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/labirin.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/maha.jpg')}}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/maimun.png')}}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
            <div class="col-lg-5" data-aos="fade-up">
                <div class="bg-white mxh-440 ov-y-s p-3">
                    <div class="list-media">
                        <div class="content mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/hillpark.png')}}" alt="" style="height: 80px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Hillpark Sibolangit</h5>Lokasi : Jl. Raya Merek KM 9. Deli Serdang, Medan, Sumatera Utara.
                                </div>
                            </div>
                        </div>
                        <div class="content  mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/keling.png')}}" alt=""
                                style="height: 85px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Kampung Keling</h5> Lokasi : Kampung keling atau kampung madras, kota medan, sumatera utara.
                                </div>
                            </div>
                        </div>
                        <div class="content mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/kincir.png')}}" alt="" style="height: 97px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Negeri Kincir Angin Medan</h5>Lokasi : Jl.Karya Jaya-Medan Johor (Perumahan Medan Resort City),Medan,Sumatera Utara.
                                </div>
                            </div>
                        </div>
                        <div class="content mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/labirin.jpg')}}"  alt="" style="height: 81px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Taman Labirin Simalem Resort</h5> Lokasi : Bukit Merek, Tanah Karo, Medan, Sumatera Utara.
                                </div>
                            </div>
                        </div>
                        <div class="content mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/maha.jpg')}}" alt="" style="height: 85px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Maha Vihara Adhi Maitreya</h5> Lokasi : Jl.Cemara Boulevard Utara No.8, Medan Estate, percut Sei Tuan, Deli Serdang, Sumatera Utara.
                                </div>
                            </div>
                        </div>
                        <div class="content mb-4" style="border: 2px solid rgb(224, 224, 224);">
                            <div class="media">
                                <img class="align-self-center img-fit mr-4" src="{{ asset('img/maimun.png')}}" alt="" style="height: 80px; padding-left: 10px;">
                                <div class="media-body">
                                    <h5 class="mb-3">Masjid Raya Medan</h5> Lokasi : Jl.Sisingamangaraja, Kota Medan, Sumatera Utara.
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="text-center">
                    <a href="discover.html">
                        <button class="btn-light colorfun1 w-50 mt-3 text-black bold">Lainnya</button>
                    </a>
            </div>
        </div>
        </div>
    </section>
    <!-- akhir discover -->

    <div class="parallax">

    </div>

    <!-- footer -->
    <section class="footer pt-3 pb-1" id="footer">
        <div class="row">
            <div class="col-6">
                <div class="copyright-text text-center">
                    <p>2020 Candi Borobudur. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="icon text-center" style="font-size: 20px;">
                    <a href="https://www.instagram.com/pemko.medan/?hl=id"><i class="fab fa-instagram mr-5" style="color: white !important;"></i></a>
                    <a href="https://twitter.com/pemko_medan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter mr-5"  style="color: white !important;"></i></a>
                    <a href="https://id-id.facebook.com/PemkoMedan/"><i class="fab fa-facebook-f mr-5"  style="color: white !important;"></i></a>
                    <a href="https://pemkomedan.go.id/"><i class="fab fa-google-plus"  style="color: white !important;"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript">
        $(".my-slider").slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]

        });
    </script>

    <script type="text/javascript">
        $(".slider-card").slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]

        });
    </script>


</body>
</html>