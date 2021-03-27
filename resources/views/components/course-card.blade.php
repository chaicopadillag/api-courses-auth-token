<div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
    <img class="w-full" src="{{$course->image}}" alt="" />

    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
        <span class="mr-1 p-1 px-2 font-bold">105 Watching</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Likes</span>
        <span class="mr-1 p-1 px-2 font-bold border-l border-gray-400">105 Dislikes</span>
    </div>
    <div class="desc p-4 text-gray-800">
        <a href="{{route('course',$course)}}" class="title font-bold block cursor-pointer hover:underline">{{$course->name}}</a>
        <a href="https://www.youtube.com/user/sam14319" target="_new" class="badge bg-indigo-500 text-blue-100 rounded px-1 text-xs font-bold cursor-pointer">{{$course->user->name}}</a>
        <span class="description text-sm block py-2 border-gray-400 mb-2">{{Str::limit($course->description,40)}}</span>
    </div>
</div>