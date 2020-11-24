@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($courses as $course)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                {{$course->course_name}}
                                {{$course->id}}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <!-- <form method="POST" action="{{ route('joinCourse.store', ['course' => $course->id]) }}">
                                    @csrf
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100">
                                                Unirse
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td> -->
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <form method="POST" action="{{ route('course.destroy', ['course' => $course]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100">
                                                Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- {{$courses->links()}} -->
</div>
@endsection