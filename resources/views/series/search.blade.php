@extends('layouts.app')

@section('content')
<div class="container m-24">
<div class="row">
  <div class="font-bold pb-2 mt-12 border-b border-gray-200">
    Comics
    
    </div>
    <form action="{{ route('reader.comic.search') }}" method="GET">
      <input type="text" name="search" required/>
      <button type="submit">Search</button>
  </form>
  
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

      @if ($comics->count() == null )

      {{'no results'}}
      @else
      @foreach($comics->take(8)  as  $comic)
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


                          @endsection