<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borobudur Candi</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/sejarah.css') }}">

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


    <!-- discover -->
    <section class="discover" id="discover">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/medan.jpg')}}" alt="" style="width: 250px;">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img src="{{asset('img/medan.jpg')}}" alt="" style="width: 250px;" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <h2>Discover</h2>
                    <h3>SEJARAH KOTA MEDAN</h3>
                    <p>Kota Medan berawal dari sebuah kampung yang didirikan oleh Guru Patimpus di pertemuan Sungai Deli dan Sungai Babura. Hari jadi Kota Medan ditetapkan pada 1 juli 1590. Selanjutnya pada tahun 1632, Medan dijadikan pusat pemerintahan kesultanan Deli dengan keadaan tanahnya berawa-rawa kurang lebih seluas 4000 Ha, sebuah kerajaan Melayu.</p>
                    <a href="{{url('sejarah')}}" class="btn btn-light mr-3">PELAJARI</a>
                </div>
            </div>
        </div>
    </section>


    <section class="event bg-light" id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <h2>Live Event</h2>
                    <h3>KEGIATAN ACARA</h3>
                    <p>LOMPAT BATU
                    <br>berasal dari desa bawo mataluo nias, kabupaten nias selatan.</p>
                    <p>MANGOKKAL HOLI
                    <br>Berarti mengambil tulang belulang dari leluhur dari dalam kuburan laly ditempatkan didalam peti dan diletakkan dalam tugu khusus</p>
                    <p>KENDURI LAUT
                    <br>Berasal dari Tapanuli Tengah, dilaksanakan satu tahun sekali pada bulan oktober</p>
                    <a href="{{url('sejarah')}}" class="btn btn-light mr-3">LIHAT EVENT</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{ asset('img/batu.jpg')}}" alt="" style="width: 250px;">
                            <img src="{{ asset('img/mangokkal.jpg')}}" alt="" style="width: 250px;" class="mt-3">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <img src="{{asset('img/kenduri.jpg')}}" alt="" style="height: 344px; width: 255px;" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- galeri -->
    <section class="galeri" id="galeri">
        <div class="container">
            <h2>Gallery</h2>
            <h3>KUMPULAN FOTO</h3>
            <p>Berbagai foto telah kami kumpulkan dari berbagai sudut pojok kota medan.<br> Dan banyak pemandangan yang bisa memanjakan mata para pengunjung.</p>
            <div class="my-slider">
                <img src="{{asset('img/2.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/4.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/5.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/maimun.png')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/maha.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/labirin.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/kincir.png')}}"style="height:300px;"alt="" class="img-fluid">
                <img src="{{asset('img/keling.png')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/hillpark.png')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/cagar.png')}}"style="height:300px;" alt="" class="img-fluid">
                <img src="{{asset('img/kenduri.jpg')}}"style="height:300px;" alt="" class="img-fluid">
                
            </div>
        </div>
    </section>


    <!-- souvenir -->
    <section class="souvenir bg-light" id="souvenir">
        <div class="container">
            <h2>Souvenir</h2>
            <h3>OLEH-OLEH KHAS KOTA MEDAN</h3>
            <p>Berbagai oleh-oleh khas dari Kota Medan kami tampilkan disini agar teman-teman <br>semakin tertarik untuk mengunjungi destinasi Kota Medan.</p>

            <div class="slider-card">
                <div class="card mb-3">
                    <img src="{{asset('img/bolu.jpeg')}}" style="height:375px;"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Bolu Gulung Meranti</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/kopi.jpeg')}}"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Kopi Serten</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/pancake.jpg')}}" style="height:350px;"class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Pancake Durian Mei Cin</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/affinois.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Affinois Legit Lapis</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/bika.jpg')}}"style="height:370px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Bika Ambon Zulaikha</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/sirup.jpg')}}"style="height:348px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Sirup Markisa Pohon Pinang</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/teri.jpg')}}"style="height:368px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Ikan Teri Bajak Medan</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <img src="{{asset('img/durian.jpeg')}}"style="height:367px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Durian Si Bolang</h4>
                        <h5 class="price">Rp. 123.000</h5>
                        <div class="rat">
                            <a href="#">100 <i class="fa fa-shopping-basket p-1"></i></a>
                            <a href="#">23 <i class="fa fa-heart p-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- lokasi -->
    <section class="lokasi" id="lokasi">
        <div class="container">
            <h2>Lokasi</h2>
            <h3>LOKASI DESTINASI KOTA MEDAN</h3>
            <p>Lokasi Kota Medan menggunakan maps. Memudahkan para wisatawan<br>ketika akan mengunjungi destinasi ini. Cek mapsnya dan silahkan atur arah.</p>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.60117456663!2d98.52940668065038!3d3.64227564268286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1596864099451!5m2!1sid!2sid" width="800" height="450" frameborder="0" justify-content= "center" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
        </div>
    </section>
    <!-- footer -->
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