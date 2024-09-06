@extends('assets.index')

@section('ayam')
    <title>Muh. Alif Anhar | Web Developer</title>
@endsection

@section('aslina')
    <section id="home" class=" bg-tes pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-white md:text-xl">Halo Semua 👋, saya <span
                            class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Muh. Alif Anhar</span></h1>
                    <h2 class="font-medium text-gray text-lg mb-5 lg:text-2xl">Web Developer</h2>
                    <p class="font-medium text-gray mb-10 leading-relaxed">Seorang programmer dan talenta digital yang
                        berdedikasi dalam
                        merancang dan mengembangkan solusi
                        teknologi kreatif dan efisien untuk menghadirkan pengalaman digital yang memukau</p>

                    <a href=""
                        class="text-base font-semibold text-white bg-dark py-3 px-8 rounded-full  hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0 lg:-translate-y-10">
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
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full px-4 mb-10">
                    <h4>Tentang Saya</h4>
                    <h2>Yuk, b</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
