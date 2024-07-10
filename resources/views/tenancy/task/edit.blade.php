@extends('tenancy.layoutsSubDomain')

@section('content')





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body text-center">
                        <div class="mt-5">
                            @if ($errors->any())
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif



                            @if (session()->has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if (session()->has('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                        </div>

                        <h1>Editar Tareas</h1>

                        <form action="{{ route('tasks.update', $task) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            <div class="mb-4">
                                <label class="form-label ">Nombre</label>
                                <input type="text" value="{{ old('name', $task) }}" class="form-control" name="name"
                                    placeholder="Ingrese el nombre">
                            </div>

                            <div class="mb-4">
                                <label class="form-label ">Descripcion</label>
                                <textarea type="text" class="form-control" name="description" placeholder="Ingrese el nombre"> {{ old('description', $task) }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label ">Imagen</label>
                                <input type="file" class="mt-3" name="image_url">
                            </div>

                            <div class="mb-4">
                                <button class="btn btn-primary">Actualizar</button>
                            </div>



                        </form>




                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
