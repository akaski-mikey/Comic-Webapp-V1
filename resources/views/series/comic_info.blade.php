@extends('layouts.comic')

@section('content')

<div class=" mx-auto  bg-gray-900 shadow p-4 md:pl-24 md:p-10" >

	<div class="lg:hidden">

	<div class=" text-yellow-500 font-mono flex px-4 justify-start  text-2xl lg:text-4xl font-bold" >
		{{ $comics->title }}
	 </div>
	<div class="  sm:w-full flex justify-center  p-4 mx-auto" >
		<div class=" ">
		<img src="{{ $comics->cover }}" class=" rounded-sm " style=" height: auto; width: 310px;">
	   </div>
   </div>
  </div>
	<div class=" flex justify-items-center justify-center lg:justify-items-end lg:justify-end  lg:px-24 font-mono ">
		
		
		<div class="lg:w-4/6 bg-black bg-opacity-25 p-2 ">
			<div class=" hidden lg:block  font-mono flex text-yellow-500 px-4 justify-start  text-2xl lg:text-4xl font-bold" >
				{{ $comics->title }}
			 </div>
			<div class="px-4">
			 <div class="flex items-center text-xs sm:text-sm  space-x-8 flex-wrap sm:flex-nowrap py-3 lg:text-lg text-gray-400">
				<div class="flex items-center">
			   <svg class="lg:mr-2 h-4 w-4 mr-1 lg:h-5 lg:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
			   </svg>
			  {{ $comics->created_at->diffForHumans() }}
			   </div>
			   <div class="flex-shrink-10">
			   <div class="flex items-center">
			   <svg class="lg:mr-2 h-4 w-4 mr-1 lg:h-5 lg:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
			   </svg>
			   {{ $chapters->count()}} {{' Chapters'}}
			   </div>
			   </div>
			   </div>
			</div>
			<div class="flex-shrink-10">
	        <div class="text-justify ">	<p class="flex px-4 justify-start mr-2 py-2 lg:mr-6 lg:py-8  text-sm lg:text-lg text-gray-500 ">{{ $comics->desc }}</p></div>
			<div class="flex px-4 justify-start mr-2 py-2 lg:mr-6 text-sm text-gray-500 "> Author: {{ $comics->author }} </div> 
			<div class=" flex px-4 justify-start mr-2 py-2 lg:mr-6 text-sm text-gray-500 "> Artist: {{ $comics->artist }} </div>
	    	</div>
    	</div>
		<div class="lg:w-2/6  hidden lg:block flex justify-end" >
		  <div class=" lg:pt-10">
		   <img src="{{ $comics->cover }}" class=" ml-auto rounded-sm " style=" height: auto; width: 310px;">
		  </div>
		 
		</div>
	    
	</div>
</div>

<div class=" md:px-24 ">
	<div class="w-full  mx-auto hidden md:block pl-24 py-10">
		<!-- Grid wrapper -->
		<div class="-mx-4 flex flex-wrap">
			@foreach( $chapters as $chapter)
		  <!-- Grid column -->
		  <div class=" flex flex-col p-1 justify-items-center justify-center lg:w-1/2 lg:w-1/3 xl:w-1/4">
			<a class="px-5 py-0  rounded-sm justify-items-center shadow-sm bg-white  text-left border-2 m-2 border-gray-400" href="{{ route('project.manga.chapter', [ 'manga' => $chapter->comic->slug, 'id' => $chapter->comic->id, 'chapter' => $chapter->number ]) }}"> Chapter {{ $chapter->number}} 
			  <!-- Card contents -->
			 
			<br>  <span class="mute text-sm text-right text-gray-500">   {{ $chapter->name }} </span> 
			</a>
		  </div>
		  @endforeach	
	
		</div>
	  </div>

	<div class="max-w-screen-xl md:hidden m-3 mx-auto px-10">
		<!-- Grid wrapper --
		<div class="-mx-4 flex flex-wrap">
			@foreach( $chapters as $chapter)
		  <!-- Grid column -->
		  <div class=" flex flex-col p-1 justify-items-center lg:w-1/4 lg:w-1/8">
			<a class="px-5 py-0  rounded-sm justify-items-center shadow-sm border-2 bg-white text-left m-2 border-gray-400" href="{{ route('project.manga.chapter', [ 'manga' => $chapter->comic->slug, 'id' => $chapter->comic->id, 'chapter' => $chapter->number ]) }}"> Chapter {{ $chapter->number}} 
			  <!-- Card contents -->
			 
			<br>  <span class="mute text-sm text-right text-gray-500">   {{ $chapter->name }} </span> 
			</a>
		  </div>
		  @endforeach	
	
		</div>
	  </div>
	</div>
</div>
</div>
</div>

@endsection


