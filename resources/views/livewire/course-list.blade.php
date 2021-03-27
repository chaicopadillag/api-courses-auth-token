<div class="">
    <h2 class="text-center my-2 text-gray-500 text-3xl">Ultimos Cursos</h2>
    <div class="holder mx-auto w-10/12 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($courses as $course)
        <x-course-card :course="$course" />
        @endforeach
    </div>
</div>