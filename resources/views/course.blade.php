@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 col-span-1">
            <ul class="flex flex-col">
                <li class="font-medium text-sm text-">Contenido</li>
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
    </div>
@endsection