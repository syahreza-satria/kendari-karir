 {{-- <nav class="flex items-center space-x-1 text-sm font-light text-gray-500">
     <a href="{{ route('index') }}" class="hover:text-sky-500 hover:underline">Beranda</a>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
         <path fill-rule="evenodd"
             d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
             clip-rule="evenodd" />
     </svg>
     <a href="{{ route('index') }}" class="hover:text-sky-500 hover:underline">Volunteer</a>
 </nav> --}}

 {{-- 
    File: resources/views/partials/breadcrumb.blade.php

    - Menggunakan <ol> dan <li> untuk struktur HTML yang semantik.
    - Loop melalui array $breadcrumbs yang dikirim dari controller.
    - Membedakan antara link biasa dan halaman aktif (item terakhir).
--}}
 @if (!empty($breadcrumbs))
     <nav aria-label="Breadcrumb">
         <ol class="flex items-center space-x-2 text-sm font-light text-gray-500">
             @foreach ($breadcrumbs as $breadcrumb)
                 {{-- Cek apakah ini item terakhir dalam loop --}}
                 @if (!$loop->last)
                     {{-- Jika BUKAN item terakhir, tampilkan sebagai link --}}
                     <li>
                         <a href="{{ $breadcrumb['url'] }}"
                             class="transition duration-150 ease-in-out hover:text-sky-500 hover:underline">
                             {{ $breadcrumb['name'] }}
                         </a>
                     </li>
                     {{-- Tampilkan separator --}}
                     <li>
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                             <path fill-rule="evenodd"
                                 d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                 clip-rule="evenodd" />
                         </svg>
                     </li>
                 @else
                     {{-- Jika INI item terakhir, tampilkan sebagai teks biasa (halaman aktif) --}}
                     <li class="font-medium text-gray-700" aria-current="page">
                         {{ $breadcrumb['name'] }}
                     </li>
                 @endif
             @endforeach
         </ol>
     </nav>
 @endif
