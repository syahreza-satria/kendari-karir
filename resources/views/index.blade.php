@extends('layouts.app')

@section('content')
    @include('partials.nav-link')
    <div class="w-full">
        <h1 class="font-semibold text-sky-500 ">Postingan Terbaru</h1>
        <hr class="mt-1 mb-3">
        <div class="space-y-2">
            <a href="{{ route('detail') }}" class="flex flex-col space-x-0 md:flex-row md:space-x-2">
                <img src="http://placehold.co/1920x1080" alt="Logo" class="h-full rounded aspect-video md:h-24">
                <div class="flex flex-col w-full py-1 mb-1 space-y-2">
                    <div class="flex items-center justify-between">
                        <h2 class="text-base font-semibold">NatureVolution Indonesia</h2>
                        <span class="px-2 py-1 text-xs font-light text-white rounded bg-sky-500 ">Volunteer</span>
                    </div>
                    <p class="text-sm font-light text-gray-500">Posisi: </p>
                    <p class="text-xs font-light text-gray-500">22 Desember 2025</p>
                </div>
            </a>
        </div>
    </div>
@endsection
