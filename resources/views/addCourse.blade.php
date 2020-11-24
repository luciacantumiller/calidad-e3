@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Curso</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('course.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">Nombre del curso</label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="form-control" name="course_name" value="{{ old('course_name') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100">
                                    Agregar Curso
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection