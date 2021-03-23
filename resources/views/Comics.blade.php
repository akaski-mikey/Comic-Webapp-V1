@extends('layouts.app')

@section('content')
<div class="container md:pl-24 mx-auto md:pr-3">
<div class="row">
  <div class="grid grid-cols-1 p-6 m-4  md:p-4 text-white hover:border-yellow-500 border-b-2 color-base-main">
    {{ 'Comics' }}
</div>

  
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

      @if ($comics->count() == null )

      {{'no results'}}
      @else
      @foreach($comics as  $comic)
                      <div class="w-full max-w-sm mx-auto  overflow-hidden">
                        <a  href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}"  >  <div class="flex justify-center">
                        <img src="{{ $comic->cover }}" class="m-4 rounded-sm hidden md:block" style=" height: 350px;    width: 300px;">
                        <img src="{{ $comic->cover }}" class="m-4 rounded-sm md:hidden" style=" height: auto;    width: 400px;">
                          </div> </a>
                          <div class="px-2 ">
                           <h3>   <a  href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}"  class=" hover:text-yellow-600 uppercase">{{ $comic->title }}</a> </h3>
                              <span class="text-gray-500 mt-2">By {{ $comic->author }} and {{ $comic->artist }}</span>
                          </div>
                         
                      </div>
                 @endforeach
                         @endif
                </div>
                          </div>

                          {{ $comics->render('partials.pagination') }}


                          @endsection
