@extends('layouts.app')

@section('content')
    @include('partials.nav-link')
    @include('partials.breadcrumb', ['breadcrumbs' => $breadcrumbs])
    <div class="w-full mx-auto space-y-6 text-xs md:text-sm font-extralight md:w-3/4">
        <h1 class="text-2xl font-bold text-center">Hubungi Kami</h1>
        <div class="space-y-4">
            <h2 class="font-semibold">Posting Lowongan kerja</h2>
            <p class="leading-relaxed">Jika anda tertarik untuk memasangan iklan lowongan kerja, atau ingin bekerja sama bisa
                langsung mengubungi
                kami melalui email: info@lokerbumn.com</p>
        </div>
        <div class="space-y-4">
            <h2 class="font-semibold">Hal yang perlu di perhatikan:</h2>
            <p class="leading-relaxed">Kami tidak menerima iklan lowongan kerja yang berkedok penipuan, meminta biaya kepada
                setiap pelamar.</p>
        </div>
        <div class="space-y-4">
            <h2 class="font-semibold">Penulisan Nama atau Logo:</h2>
            <p class="leading-relaxed">Jika ada salah dalam penulisan nama Usaha atau Logo usaha yang kami muat disitus ini,
                dengan senang
                hati jika anda berkenan menghubungi kami.</p>
        </div>
        <div class="space-y-4">
            <h2 class="font-semibold">Konfirmasi Penghapusan (Artikel, Logo, Poster):</h2>
            <p class="leading-relaxed">Setiap artikel lowongan serta Logo Usaha, atau poster lowongan yang kami publikasika
                disitu ini, kami
                lokerbumn.com tidak memiliki hak cipta apapun.
            </p>
            <p class="leading-relaxed"> Kami selalu berupaya iklan lowongan Anda agar dapat dijangkau oleh banyak Pelamar,
                dan bisa mendapatkan
                calon kandidat yang sesuai kualifikasi Usaha.
            </p>
            <p class="leading-relaxed"> Dan kami tidak pernah meminta biaya sepeserpun kepada pelamar yang mendaftar setiap
                iklan lowongan di situs
                ini.
            </p>
            <p class="leading-relaxed"> Jika anda atau perwakilan Usaha merasa keberatan atas (Konten & Logo) untuk
                publikasikan distus ini,
                atau iklan lowongan sudah ditutup, atau kuota pelamar sudah terpenuhi, Anda bisa menghubungi kami melalui
                email: info@lokerbumn.com
            </p>
            <p class="leading-relaxed"> (Cantumkan Link Pos Lowongan yang ingin dihapus)
            </p>
        </div>
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
