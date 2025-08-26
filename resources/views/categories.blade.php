@extends('layouts.app')

@section('content')
    @include('partials.nav-link')
    @include('partials.breadcrumb', ['breadcrumbs' => $breadcrumbs])

    <h1 class="text-2xl font-bold">Kategori: Volunteer</h1>
    <hr class="my-2">
    <div class="space-y-2">
        <a href="#" class="flex space-x-2">
            <img src="http://placehold.co/1920x1080" alt="Logo" class="rounded aspect-video h-28">
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
@endsection
