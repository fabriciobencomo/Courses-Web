<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
            <a href="#">
                <img src="{{$course->image}}" alt="Image Courses rounded-md mb-2">
                <h2 class="text-lg mb-2 text-gray-800 truncate font-bold">{{$course->name}}</h2>
                <h3 class="text-md mb-2 text-gray-800 truncate">{{$course->excerpt}}</h3>
                <img src="{{$course->user->avatar}}" alt="" class="rounded-full mt-4 mx-auto h-16 w-16">
            </a>
        </div>
    @endforeach
</div>
