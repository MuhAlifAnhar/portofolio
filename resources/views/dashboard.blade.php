@extends('assets.index')

@section('ayam')
    <title>Muh. Alif Anhar | Web Developer</title>
@endsection

@section('aslina')
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua 👋, saya <span
                            class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Muh. Alif Anhar</span></h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">Mahasiswa & <span class="text-dark">Web
                            Developer</span></h2>
                    <p class="font-medium text-slate-400 mb-10 leading-relaxed">Seorang programmer dan talenta digital yang
                        berdedikasi dalam
                        merancang dan mengembangkan solusi
                        teknologi kreatif dan efisien untuk menghadirkan pengalaman digital yang memukau</p>

                    <a href=""
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full  hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{ url('img/foto.jpg') }}" alt="alif" class="max-w-full mx-auto" />
                        <span class="absolute bottom-20 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6"
                                    d="M39.7,-13.7C46.9,9.3,45.1,34.4,28.4,48.8C11.8,63.2,-19.7,66.9,-37.5,53.5C-55.2,40.2,-59.1,9.8,-50.6,-15C-42.1,-39.9,-21,-59.3,-2.4,-58.5C16.2,-57.7,32.5,-36.8,39.7,-13.7Z"
                                    transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
