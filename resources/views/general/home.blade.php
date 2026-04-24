<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard SEROO</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets-general/assets/logo.png') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets-general/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            {{-- logo --}}
            <img src="{{ asset('assets-admin/img/brand/logo.rev.png') }}"
                class="card-img-top rounded-circle border-white d-block mx-auto me-2" alt="Bonnie Green"
                style="width: 70px; height: 70px;">
            <a class="navbar-brand text-white fs-3 fw-bold" href="#">Teh Tarik Seroo</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#location">Lokasi Mitra</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login.admin') }}">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome SEROO Home!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Layanan</h2>
                <h3 class="section-subheading text-muted">Kami selalu memberikan pelayanan maksimal kepada para
                    pelanggan kami</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-custom"></i>
                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Responsif</h4>
                    <p class="text-muted">Memberikan layanan yang cepat dan responsif untuk memastikan kepuasan
                        pelanggan, baik melalui komunikasi langsung, telepon, maupun platform digital, dengan tim yang
                        selalu siap membantu menjawab pertanyaan atau menangani keluhan.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-custom"></i>
                        <i class="fas fa-cutlery fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Fasilitas </h4>
                    <p class="text-muted">Menyediakan fasilitas yang mendukung kenyamanan pelanggan, seperti ruang
                        tunggu yang nyaman, akses Wi-Fi gratis, tempat parkir luas, dan area bermain untuk anak-anak,
                        sehingga pengalaman pelanggan menjadi lebih menyenangkan.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-custom"></i>
                        <i class="fas fa-thumbs-up fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Kualitas </h4>
                    <p class="text-muted">Menjamin semua produk dan layanan memenuhi standar kualitas tinggi serta
                        memprioritaskan keamanan, baik dalam penyajian makanan, kebersihan tempat, hingga layanan
                        pelanggan, untuk memberikan pengalaman terbaik yang bebas dari risiko.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    @php
        $menuProducts = [
            [
                'nama' => 'Teh Tarik Seroo',
                'gambar' => asset('/assets/images/tehtarik.jpeg'),
                'harga_medium' => 'Rp8.000 ',
                'harga_large' => 'Rp 10.000',
            ],
            [
                'nama' => 'Teh Tarik Milo',
                'gambar' => asset('/assets/images/tarikmilo.webp'),
                'harga_medium' => 'Rp 10.000',
                'harga_large' => 'Rp 12.000',
            ],
            [
                'nama' => 'Milo Serous',
                'gambar' => asset('/assets/images/milo.jpeg'),
                'harga_medium' => 'Rp 10.000',
                'harga_large' => '-',
            ],
            [
                'nama' => 'Kopi Hitam Manis Seroo',
                'gambar' => asset('/assets/images/hitammanis.jpeg'),
                'harga_medium' => 'Rp 0',
                'harga_large' => 'Rp 10.000',
            ],
            [
                'nama' => 'Teh Tarik Coklat',
                'gambar' => asset('/assets/images/choco.jpeg'),
                'harga_medium' => 'Rp 12.000',
                'harga_large' => 'Rp 14.000',
            ],
            [
                'nama' => 'Teh Hijau',
                'gambar' => asset('/assets/images/tehhijau.jpeg'),
                'harga_medium' => 'Rp 5.000',
                'harga_large' => 'Rp 6.000',
            ],
        ];
    @endphp
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Product</h2>
                <h3 class="section-subheading text-muted">Pilih menu favoritmu dan sesuaikan ukuran sesuai selera</h3>
            </div>
            <div class="row">
                @foreach ($menuProducts as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden">
                            <img class="card-img-top" src="{{ $product['gambar'] }}" alt="{{ $product['nama'] }}"
                                style="height: 260px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h4 class="mb-3" style="color: #B55505;">{{ $product['nama'] }}</h4>
                                <div class="rounded-4 p-3" style="background-color: #fff5ef;">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-semibold text-muted">Medium</span>
                                        <span class="fw-bold" style="color: #f4623a;">{{ $product['harga_medium'] }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fw-semibold text-muted">Large</span>
                                        <span class="fw-bold" style="color: #f4623a;">{{ $product['harga_large'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">"Berawal dari secangkir kopi, tumbuh menjadi tempat penuh
                    cerita."</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets-general/assets/img/about/9.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2024-2025</h4>
                            <h4 class="subheading">Awal yang Sederhana</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Berawal dari sebuah ide sederhana, SEROO dirancang dengan visi menghadirkan teh tarik berkualitas yang dapat dinikmati semua kalangan. Perencanaan mencakup konsep, menu unik, dan pengalaman pelanggan yang berbeda.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets-general/assets/img/about/7.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>September 2024</h4>
                            <h4 class="subheading">Merangkai Persiapan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Dalam tahap ini, seluruh kebutuhan seperti peralatan, bahan baku, dan desain interior dihitung dengan cermat. SEROO memanfaatkan dana dari sumber pribadi dan dukungan komunitas.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets-general/assets/img/about/8.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>October 2024</h4>
                            <h4 class="subheading">Survei dan Pemilihan Lokasi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Setelah melakukan survei di berbagai tempat, akhirnya dipilih lokasi
                                yang strategis dan mudah diakses. Tempat ini dirancang untuk menciptakan suasana nyaman
                                bagi pelanggan, menjadi rumah bagi pecinta kopi.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets-general/assets/img/about/6.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Desember 2024</h4>
                            <h4 class="subheading">Grand Opening – Mulai Melayani Pelanggan</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">SEROO resmi dibuka! Dengan antusiasme besar, kami mulai menyajikan teh tarik terbaik dan memberikan pelayanan hangat kepada setiap pelanggan yang datang.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('assets-general/assets/img/about/10.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>January 2025</h4>
                            <h4 class="subheading">Perkembangan dan Ekspansi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Seiring waktu, SEROO terus berkembang. Dengan bertambahnya cabang, kami kini melayani lebih banyak pelanggan dan tetap berkomitmen pada kualitas rasa serta suasana yang menyenangkan.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container mb-8">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Meet the Team</h2>
                <h3 class="section-subheading text-muted">"Dedikasi kami, kepuasan Anda."</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="team-member text-center">
                        <img class="mx-auto rounded-circle" src="{{ asset('assets/images/foto1.jpeg') }}" alt="..." />
                        <h4>Zaid Anshori</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member text-center">
                        <img class="mx-auto rounded-circle" src="{{ asset('assets/images/foto2.jpeg') }}" alt="..." />
                        <h4>Abdul Afif Halim</h4>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section>

            <div class="row">
                <div class="col-lg-8 mx-auto text-justify">
                    <p class="large text-muted">
                        SEROO, lebih dari sekadar teh tarik, menghadirkan cita rasa dan kehangatan dalam setiap cangkir yang penuh dengan cerita.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Clients-->
    {{-- <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('assets-general/assets/img/logos/microsoft.svg') }}" alt="..."
                            aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('assets-general/assets/img/logos/google.svg') }}" alt="..."
                            aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('assets-general/assets/img/logos/facebook.svg') }}" alt="..."
                            aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="{{ asset('assets-general/assets/img/logos/ibm.svg') }}" alt="..."
                            aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Location-->
    @php
        $mitraGroupedAddresses = [
            'Simpang Baru' => [
                'Jl. Bangau Sakti, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292',
                'Jl. Garuda Sakti No.KM 1, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28291',
                'F9CP+P47 Simpang Baru, Kota Pekanbaru, Riau',
                'Jl. Melati, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau',
            ],
            'Tuah Karya' => [
                'F96J+Q8Q, Jl. Swakarya, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293',
                'F94G+7W7 Tuah Karya, Kota Pekanbaru, Riau',
                'F93P+4CG Tuah Karya, Kota Pekanbaru, Riau',
            ],
            'Sidomulyo' => [
                'Jl. Purwodadi No.5F, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28294',
                'CCG9+FX6 Sidomulyo Bar., Kota Pekanbaru, Riau',
                'Sebrang RANK, Jl. Rambutan, Sidomulyo Tim., Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28289',
                'F92R+QM9 Sidomulyo Bar., Kota Pekanbaru, Riau',
            ],
            'Bukit Raya' => [
                'Jl. Parit Indah, Tengkerang Labuai, Kec. Bukit Raya, Kota Pekanbaru, Riau',
                'Jl. Samarinda No.5E, Tengkerang Utara, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126',
                'Jl. Tengku Bey No.51, Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28126',
                'CFX2+XRJ Simpang Tiga, Kota Pekanbaru, Riau',
            ],
            'Marpoyan Damai' => [
                'CCVR+9GX, Perhentian Marpoyan, Kec. Marpoyan Damai, Kota Pekanbaru, Riau',
                'CCQF+786, Jl. Soekarno - Hatta, Perhentian Marpoyan, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28289',
                'CCVR+9GX, Perhentian Marpoyan, Kec. Marpoyan Damai, Kota Pekanbaru, Riau',
            ],
            'Sukajadi' => [
                'GCCM+8GV, Jl. Bunga Kertas, Harjosari, Kec. Sukajadi, Kota Pekanbaru, Riau 28156',
                'Jl. KH. Ahmad Dahlan No.161, Kp. Tengah, Kec. Sukajadi, Kota Pekanbaru, Riau 28121',
            ],
            'Tenayan Raya' => [
                'Jl. Budi Rahayu No.80, Rejosari, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28243',
                'Jalan Hangtuah KM 11 Simpang Tangor Pasar Minggu, Bencah Lesung, Kec. Tenayan Raya, Kota Pekanbaru, Riau 28285',
            ],
            'Rumbai dan Sekitarnya' => [
                'HC9H+M3M Umban Sari, Kota Pekanbaru, Riau',
                'Jalan Sekolah Pasar Rumbai Lantai 2 Blok M2 Nomor 4, Meranti Pandak, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28266',
            ],
            'Lokasi Lainnya' => [
                'G936+56V Karya Indah, Kabupaten Kampar, Riau',
                'Sekip, Kec. Lima Puluh, Kota Pekanbaru, Riau',
                'Jl. Lobak, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28294',
                'Jl. Pemuda No.63, Tampan, Kec. Payung Sekaki, Kota Pekanbaru, Riau 28291',
                'FGG7+4GR Kulim, Kota Pekanbaru, Riau',
                'GC3W+P6F Wonorejo, Kota Pekanbaru, Riau',
                'FCVQ+79C Tangkerang Tengah, Kota Pekanbaru, Riau',
                'GFF2+356 Sumahilang, Kota Pekanbaru, Riau',
                'FFVP+C28 Tengkerang Tim., Kota Pekanbaru, Riau',
                'FC93+WWG Delima, Kota Pekanbaru, Riau',
                'GC86+VGV Labuh Baru Bar., Kota Pekanbaru, Riau',
                'GF74+4J9, Jl. WR. Supratman, Cinta Raja, Kec. Sail, Kota Pekanbaru, Riau 28127',
            ],
        ];
        $mitraAddresses = collect($mitraGroupedAddresses)->flatten()->values()->all();
        $totalMitra = count($mitraAddresses);
        $defaultMapAddress = $mitraAddresses[0];
    @endphp
    <section class="page-section bg-light" id="location">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase mt-10">Kunjungi Lokasi Mitra Kami</h2>
                <h3 class="section-subheading text-muted">
                    Lokasi mitra dikelompokkan agar lebih ringkas dan tetap mudah dijelajahi.
                </h3>
            </div>

            <div class="row align-items-stretch mb-5">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="h-100 p-4 rounded-4 shadow-sm bg-white border-start border-4"
                        style="border-color: #f4623a !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="fa-stack fa-2x me-3">
                                <i class="fas fa-circle fa-stack-2x text-custom"></i>
                                <i class="fas fa-map-location-dot fa-stack-1x fa-inverse"></i>
                            </span>
                            <div>
                                <h4 class="mb-1">Sebaran Mitra Teh Tarik Seroo</h4>
                                <p class="text-muted mb-0">Alamat mitra kini ditampilkan lebih lengkap dan spesifik.</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Buka kelompok lokasi di samping, lalu klik alamat yang diinginkan untuk menampilkan titik
                            lokasi pada peta.
                        </p>
                        <iframe id="mitra-map" class="rounded-4 overflow-hidden border w-100"
                            src="https://www.google.com/maps?q={{ urlencode($defaultMapAddress) }}&output=embed"
                            style="height: 460px; border-color: rgba(244, 98, 58, 0.2) !important;" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class="small text-muted mt-3 mb-0">
                            Tampilan peta akan berubah sesuai alamat yang kamu pilih dari daftar lokasi mitra.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="rounded-4 shadow-sm bg-white p-4 h-100">
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="rounded-4 py-3 px-2 text-center h-100" style="background-color: #fff5ef;">
                                    <div class="fw-bold fs-3" style="color: #f4623a;">{{ $totalMitra }}</div>
                                    <div class="small text-muted">Total Alamat Mitra</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="rounded-4 py-3 px-2 text-center h-100" style="background-color: #fff5ef;">
                                    <div class="fw-bold fs-3" style="color: #f4623a;">{{ count($mitraGroupedAddresses) }}</div>
                                    <div class="small text-muted">Kelompok Lokasi</div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="mitraAccordion">
                            @foreach ($mitraGroupedAddresses as $groupName => $addresses)
                                <div class="accordion-item border-0 shadow-sm mb-3 rounded-4 overflow-hidden">
                                    <h2 class="accordion-header" id="heading{{ $loop->index }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $loop->index }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $loop->index }}"
                                            style="background-color: #fff; color: #B55505;">
                                            <span class="fw-bold">{{ $groupName }}</span>
                                            <span class="badge rounded-pill ms-3"
                                                style="background-color: #f4623a; color: #fff;">
                                                {{ count($addresses) }}
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $loop->index }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#mitraAccordion">
                                        <div class="accordion-body p-3" style="background-color: #fffdfb;">
                                            @foreach ($addresses as $address)
                                                <button type="button"
                                                    class="btn w-100 text-start border-0 bg-white p-3 mb-2 rounded-4 mitra-address-btn"
                                                    data-address="{{ $address }}"
                                                    data-map-url="https://www.google.com/maps?q={{ urlencode($address) }}&output=embed">
                                                    <div class="d-flex align-items-start">
                                                        <i class="fas fa-location-dot mt-1 me-3" style="color: #f4623a;"></i>
                                                        <div>
                                                            <h6 class="mb-1" style="color: #B55505;">Lokasi Mitra</h6>
                                                            <p class="text-muted small mb-0">{{ $address }}</p>
                                                        </div>
                                                    </div>
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Kolom 1: Copyright -->
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>

                <!-- Kolom 2: Ikon Media Sosial -->
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>

                <!-- Kolom 3: Privacy & Terms -->
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>




    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets-general/js/scripts.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mapElement = document.getElementById('mitra-map');
            const addressButtons = document.querySelectorAll('.mitra-address-btn');

            if (!mapElement || !addressButtons.length) {
                return;
            }

            function setActiveButton(activeButton) {
                addressButtons.forEach(function(button) {
                    button.classList.remove('active');
                    button.style.outline = 'none';
                    button.style.transform = 'translateY(0)';
                });

                activeButton.classList.add('active');
                activeButton.style.transform = 'translateY(-2px)';
            }

            addressButtons.forEach(function(button, index) {
                button.addEventListener('click', function() {
                    mapElement.src = button.dataset.mapUrl;
                    setActiveButton(button);
                });

                if (index === 0) {
                    setActiveButton(button);
                }
            });
        });
    </script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
