<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-Poppins bg-begie">
    <header class="bg-transparent w-full top-0 left-0 absolute flex items-center z-20">
        <div class="container">
            <div class="flex justify-between items-center relative">
                <div class="px-4">
                   <a href="#home" class="block py-2 text-lg text-primary font-semibold">ODGJRescue</a> 
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-begie shadow-lg  rounded-lg max-w-[250px] lg:w-full right-4 top-full lg:block lg:static lg:bg-transparent max-w-full  lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Home</a>
                            </li>
                            <li class="group">
                                <a href="#berita" class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Berita</a>
                            </li>
                            <li class="group">
                                <a href="#portal" class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Portal</a>
                            </li>
                            <li class="group">
                                <a href="#kerjasama" class="font-semibold text-base text-primary group-hover:text-pinkeun py-2 mx-8 flex">Kerjasama</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="bg-primary block w-16 text-center rounded-lg text-begie">
                    <a href="/login" class="font-semibold">Login</a>
                </div>
            </div>
        </div>
    </header>

    <section id="home" class="pt-36 mb-40">
        <div class="container">
            <div class="flex flex-wrap">

                <div class="w-full self-end px-4 lg:w-1/2">

                    <div class="flex gap-5 justify-center">
                        <div class="">
                            <img src="img/img-1.png" alt="" width="250" class="mb-5">
                            <img src="img/img-3.png" alt="" width="250">
                        </div>
                        
                        <div class="">
                            <img src="img/img-2.png" alt="" width="250" class="mb-5">
                            <img src="img/img-4.png" alt="" width="250">
                        </div>

                    </div>
                    
                </div>
                
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h5 class="bg-primary w-48 p-2 text-begie font-medium rounded-r-full">Selamat Datang di </h5>
                    <h1 class="pt-5 font-bold text-primary text-3xl lg:text-6xl pb-5">ODGJRescue</h1>
                    <p class="font-normal text-[11px] lg:text-[15px] text-justify">ODGJ Rescue adalah sebuah Website yang memungkinkan semua individu memberikan laporan atau pengaduan terkait orang dengan gangguan jiwa (ODGJ) yang terlantar di Bali. Platform ini terbuka untuk partisipasi dari berbagai kalangan masyarakat, memungkinkan mereka untuk menyampaikan informasi terkait situasi ODGJ secara mudah dan efektif.</p>
                </div>

            </div>
        </div>
    </section>


    <section id="tujuan">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="pt-5 font-bold text-primary text-3xl  lg:text-4xl pb-5">Tujuan ODGJRescue</h1>
                    <ol class="text-[11px] lg:text-[15px]">
                        <li>1. Memfasilitasi dan menyederhanakan proses pengaduan terkait ODGJ.</li>
                        <li>2. Memastikan bahwa kasus-kasus ODGJ terlantar ditanggapi dengan cepat dan efisien.</li>
                        <li>3. Memfasilitasi koordinasi antara masyarakat dan pihak berwenang terkait.</li>
                        <li>4. Menyediakan sumber informasi bagi masyarakat yang ingin membantu ODGJ</li>
                    </ol>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">

                    <div class="flex flex-wrap gap-5 justify-center">
                        
                            <img src="img/t-1.png" alt="" width="350">
                            <img src="img/t-2.png" alt="" width="350">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="berita" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="pt-5 font-bold text-primary text-3xl lg:text-6xl pb-5">Berita Terkini ODGJ</h4>
                </div>
            </div>
            
            <div class="flex flex-wrap">
                <div class="w-full px-4 xl:w-1/3 lg:w-1/2">
                    <div class="bg-begie rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/gianyarodgj.jpeg" alt="Berita1" class="w-full">
                        <div class="py-8 px-6">
                            <h5 class="text-slate-500">Sabtu, 4 Februari 2024</h5>
                            <h3 class="mb-3 font-semibold text-lg truncate">Terdata ODGJ Berat di Bali Capai 6 Ribu Lebih, Terbanyak di Karangasem</h3>
                            <p class="text-sm mb-3 font-medium mb-6">Jumlah orang dengan gangguan jiwa (ODGJ) di Bali cukup besar...</p>
                            <a href="https://www.detik.com/bali/berita/d-6937915/12-ribu-orang-di-bali-gangguan-jiwa-kapasitas-rsj-cuma-400-ranjang" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-30">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 xl:w-1/3 lg:w-1/2">
                    <div class="bg-begie rounded-xl shadow-lg overflow-hidden mb-10">
                        <img src="img/gianyarodgj.jpeg" alt="Berita1" class="w-full">
                        <div class="py-8 px-6">
                            <h5 class="text-slate-500">Sabtu, 4 Februari 2024</h5>
                            <h3 class="mb-3 font-semibold text-lg truncate">Petaka ODGJ Ngamuk Tewaskan Satu Orang di Gianyar Diduga Telat Obat</h3>
                            <p class="text-sm mb-3 font-medium mb-6">Insiden berdarah orang dengan gangguan jiwa (ODGJ) mengamuk di Tampaksiring...</p>
                            <a href="https://bali.tribunnews.com/2022/05/11/gangguan-odgj-makin-mengkhawatirkan-komisi-iv-dprd-bali-minta-ada-rumah-singgah-di-seluruh-bali" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-30">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Berita ODGJRescue Section End -->

    <!--Start Portal Pengaduan -->
    <section id="portal" class="pb-40">
        <div class="container">

            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="pt-5 font-bold text-primary text-3xl lg:text-6xl pb-5">Portal Pengaduan ODGJ Rescue</h4>
                </div>
            </div>

            <form action="" class="gap-5">
                    <div class="">
                      <label for="name" class="leading-7 text-sm text-gray-600">Nama Pengaju</label>
                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <div class="">
                        <label for="name" class="leading-7 text-sm text-gray-600">Telepon Pengaju</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <div class="">
                        <label for="name" class="leading-7 text-sm text-gray-600">Judul Pengajuan</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <div class="">
                        <label for="message" class="leading-7 text-sm text-gray-600">Isi Pengajuan</label>
                        <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>

                    <div class="">
                        <label for="name" class="leading-7 text-sm text-gray-600">Lokasi Kejadian</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>

                    <div class="">
                        <label for="name" class="leading-7 text-sm text-gray-600">Tanggal Kejadian</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                
                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Upload photo</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                          <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" width="100">
                              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                              <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                              </label>
                              
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                          </div>
                        </div>
                      </div>
                    
                    <div class="mt-12 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-begie bg-primary px-6 rounded-full">Kirim</button>
                    </div>
            </form>
        </div>
    </section>

    <section id="kerjasama" class="pb-36">
        <div class="container">
            <h1 class="font-bold text-primary text-4xl text-center">Kerjasama</h1>
            <h5 class="font-semibold text-primary text-xs mb-10 text-center">Website ini Berada di Bawah Naungan</h5>
            <div class="flex flex-wrap">
                <div class="border-primary border-2 rounded-lg bg-white mr-2">
                    <img src="img/dinassosial.png" alt="" class="mx-auto">
                    <h3 class="text-sm font-semibold px-6">Rumah Sakit Jiwa Bangli</h3>
                    <h6 class="text-[10px] text-slate-600 px-6">Jl. Kusuma Yudha No. 29, Bangli, Bali 80613, Indonesia</h6>
                    <h6 class="text-[10px] text-slate-600 px-6">(0366)91073</h6>
                </div>
                <div class="border-primary border-2 rounded-lg bg-white mr-2">
                    <img src="img/dinassosial.png" alt="" class="mx-auto">
                    <h3 class="text-sm font-semibold px-6">Rumah Sakit Jiwa Bangli</h3>
                    <h6 class="text-[10px] text-slate-600 px-6">Jl. Kusuma Yudha No. 29, Bangli, Bali 80613, Indonesia</h6>
                    <h6 class="text-[10px] text-slate-600 px-6">(0366)91073</h6>
                </div>
                <div class="border-primary border-2 rounded-lg bg-white mr-2">
                    <img src="dist/img/dinassosial.png" alt="" class="mx-auto">
                    <h3 class="text-sm font-semibold px-6">Rumah Sakit Jiwa Bangli</h3>
                    <h6 class="text-[10px] text-slate-600 px-6">Jl. Kusuma Yudha No. 29, Bangli, Bali 80613, Indonesia</h6>
                    <h6 class="text-[10px] text-slate-600 px-6">(0366)91073</h6>
                </div>
            </div>
        </div>
    </section>



    
    <footer>
        <div class="">
            <h4 class="text-primary text-center font-semibold py-6 ">Copyright@ODGJRescue2024</h4>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>