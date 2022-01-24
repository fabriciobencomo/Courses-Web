@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white shadow-lg rounded-lg col-span-1">
            <ul class="flex flex-col">
                <li class="text-lg mb-2 text-gray-800 font-bold text-center shadow-md px-2 py-3">Content</li>
                @foreach($course->posts as $post)
                <li class="px-3 mb-4 mt-2 border-b-2 border-gray-800 flex">
                    <span class="font-bold">{{$i}}. </span>
                    {{$post->name}}
                    @if($post->free)
                        <span class="text-teal-300 font-bold px-3">Free</span>
                    @endif
                    @php
                        $i++
                    @endphp
                </li>
                @endforeach
            </ul>

        </div>
        <div class="col-span-2">
            <img src="{{$course->image}}" alt="Course Image">
            <h2 class="text-lg mb-2 text-gray-800 truncate font-bold">{{$course->name}}</h2>
            <p class="text-md mb-2 text-gray-800">{{$course->description}}</p>
            <div class="flex mt-3">
                <img src="{{$course->user->avatar}}" alt="Avatar User" class="rounded-full mr-2 h-10 w-10">
                <div>
                    <p class="text-sm">{{$course->user->name}}</p>
                    <p class="text-xs">{{$course->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        <div class="col-span-3">
            <h1 class="text-2xl text-gray-800 font-bold text-center border-t-2 mt-4 py-6 border-gray-500">Similar Courses</h1>
        </div>
        @foreach($course->similar() as $course)
            <x-course-card :course="$course" />
        @endforeach
    </div>
@endsection
