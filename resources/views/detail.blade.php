@extends('layouts.app')

@section('content')
    @include('partials.nav-link')
    @include('partials.breadcrumb', ['breadcrumbs' => $breadcrumbs])
    <div class="space-y-2 text-sm font-light">
        <h1 class="text-2xl font-bold leading-none text-center">NatureVolution Indonesia - Fundraising and Partnerships
            Manager </h1>
        <span class="block text-xs font-light text-center text-gray-500">25-Agustus-2025</span>
        <img src="http://placehold.co/1920x1080" alt="Logo" class="w-full aspect-video">
        <p class="font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque quasi nihil ea quae. Explicabo
            aliquid
            perferendis dicta voluptas saepe adipisci eum illo quos est eligendi ipsum ipsam provident error repellat
            perspiciatis repudiandae, reprehenderit expedita asperiores sit sunt, rem blanditiis rerum quam. Blanditiis
            eveniet veritatis rerum dignissimos facere sapiente quia voluptatum.</p>
        <h2 class="my-2 text-xl font-semibold">Lowongan yang tersedia untuk NatureVolution Indonesia:</h2>
        <p class="font-light">Saat ini NatureVolution memberikan kesempatan lowongan untuk dapat bergabung bersama dengan
            posisi sebagai berikut:</p>
        <hr class="my-2">
        <h3 class="text-lg font-semibold">Fundraising and Partnerships Manager</h3>
        <p>Kualifikasi:</p>
        <ul class="list-disc list-inside ">
            <li>Fasih berbahasa Indonesia & Inggris (lisan & tulisan)</li>
            <li>Memiliki keterampilan interpersonal, komunikasi, dan diplomasi</li>
            <li>Terampil dalam organisasi, manajemen, serta penulisan proposal</li>
            <li>Familiar dengan isu lingkungan & sektor nonprofit</li>
            <li>Menguasai Google Suite, Excel, CRM, dan Canva</li>
        </ul>
        <p>Poin plus:</p>
        <ul class="list-disc list-inside">
            <li>Fasih berbahasa Indonesia & Inggris (lisan & tulisan)</li>
            <li>Memiliki keterampilan interpersonal, komunikasi, dan diplomasi</li>
        </ul>
        <hr class="my-2">
        <h3 class="text-lg font-semibold">Tata cara melamar:</h3>
        <p>Jika anda berminat dan memenuhi kualifikasi diatas dapat mendaftarkan diri secara online dengan menekan tombol
            dibawah ini:</p>
        <a href="#"
            class="block w-full py-2 font-bold text-center text-white transition duration-300 rounded-lg bg-sky-500 hover:bg-sky-400">Daftar
            Secara
            Online!</a>
        <ul class="list-disc list-inside">
            <li>Daftar paling lambat 30 Agustus 2025</li>
            <li>Hati-hati terhadap segala bentuk jenis penipuan, karena lowongan ini gratis tidak ada biaya dalam bentuk
                apapun</li>
        </ul>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
