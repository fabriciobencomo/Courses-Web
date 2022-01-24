<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
            <a href="{{route('course', $course->slug)}}">
                <img src="{{$course->image}}" alt="Image Courses" class="rounded-md mb-2">
                <h2 class="text-lg mb-2 text-gray-800 truncate font-bold">{{$course->name}}</h2>
                <h3 class="text-md mb-2 text-gray-800 truncate">{{$course->excerpt}}</h3>
                <div class="flex mt-3">
                    <img src="{{$course->user->avatar}}" alt="Avatar User" class="rounded-full mr-2 h-10 w-10">
                    <div>
                        <p class="text-sm">{{$course->user->name}}</p>
                        <p class="text-xs">{{$course->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
