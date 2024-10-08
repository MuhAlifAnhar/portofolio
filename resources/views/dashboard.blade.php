@extends('assets.index')

@section('ayam')
    <title>Muh. Alif Anhar | Web Developer</title>
@endsection

@section('aslina')
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-dark block py-6">alif<span
                            class="font-bold text-lg text-white">anhar</span></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="navbar" name="navbar" type="button" class="block absolute right-4 lg:hidden">
                        <span class="navbar-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="navbar-line transition duration-300 ease-in-out"></span>
                        <span class="navbar-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-dark shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Tentang
                                    Saya</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#clients"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Clients</a>
                            </li>
                            <li class="group">
                                <a href="#blog"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class=" text-base py-2 mx-8 flex group-hover:text-black text-white lg:group-hover:text-dark">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="home" class=" bg-tes pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 pt-11 lg:w-1/2">
                    <h1 class="text-base font-semibold text-white md:text-xl">Halo Semua 👋, saya <span
                            class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Muh. Alif Anhar</span></h1>
                    <h2 class="font-medium text-gray text-lg mb-5 lg:text-2xl">Web Developer</h2>
                    <p class="font-medium text-gray mb-10 leading-relaxed">Seorang programmer yang berdedikasi dalam
                        merancang dan mengembangkan solusi teknologi kreatif serta efisien, untuk menghadirkan pengalaman
                        digital yang memukau.</p>

                    <a href=""
                        class="text-base font-semibold text-white bg-dark py-3 px-8 rounded-full  hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2 m-0 p-0">
                    <div class="relative mt-10 lg:mt-9">
                        <span
                            class="absolute bottom-20 left-1/2 -translate-x-1/2 scale-75 md:scale-100 lg:scale-125 translate-y-20 md:translate-y-0">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#7456FF"
                                    d="M27.2,15.9C15.4,36.2,-27.7,38.6,-37.5,19.5C-47.3,0.5,-23.6,-40,-2.1,-41.2C19.5,-42.4,39,-4.3,27.2,15.9Z"
                                    transform="translate(100 100) scale(1.9)" />
                            </svg>
                        </span>
                        <img src="{{ url('img/foto.jpg') }}" alt="alif" class="max-w-full mx-auto relative" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="bg-tess pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-dark text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-gray text-3xl mb-5 max-w-xl lg:text-4xl">Mengenal Saya Lebih Dekat
                    </h2>
                    <p class="font-medium text-base text-gray max-w-xl lg:text-lg">Saya Muh. Alif Anhar, berdomisili di
                        Banta-Bantaeng, Makassar, Sulawesi Selatan. Saya lulusan SMKN 3 Makassar, jurusan Teknik Komputer &
                        Jaringan. Saya memiliki keterampilan dalam menggunakan software perkantoran, desain grafis, serta
                        pengembangan website menggunakan Framework Laravel.
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h1 class="font-semibold text-gray text-2xl mb-4 lg:text-3xl lg:pt-10">Mari berteman</h1>
                    <p class="font-medium text-base text-gray mb-6 lg:text-lg">Saya terbuka untuk kolaborasi, berbagi ide,
                        atau berdiskusi tentang teknologi. Jangan ragu menghubungi saya melalui platform media sosial atau
                        pesan langsung. Saya percaya, hubungan baik adalah kunci menuju kesuksesan bersama!</p>
                    <div class="flex items-center">
                        <a href="https://github.com/muhalifanhar" target="_blank"
                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-dark text-dark hover:border-dark hover:bg-dark hover:text-black">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>GitHub</title>
                                <path
                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/itsalifanhar/" target="_blank"
                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-dark text-dark hover:border-dark hover:bg-dark hover:text-black">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/muh-alif-anhar-634bb1270/" target="_blank"
                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-dark text-dark hover:border-dark hover:bg-dark hover:text-black">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>LinkedIn</title>
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/6285756895140?text=Halo,%20saya%20mau%20bikin%20aplikasi" target="_blank"
                            class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-dark text-dark hover:border-dark hover:bg-dark hover:text-black">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>WhatsApp</title>
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
@endsection
