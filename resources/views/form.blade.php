<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Crear tutor</title>
</head>
<body>
<h1 class="container pt-5">Datos de empresa para nuevo Acuerdo  </h1>
<h3 class="container"></h3>
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form" method="post" action="{{ route('tutores.store') }}">
        @csrf
        <h2 class="mb-5">Empresa</h2>
        <div class="row">
            <div class="form-group col-4">
                <label>Nombre de la empresa</label>
                <input type="text" required class="form-control {{ $errors->has('nombre_empresa') ? 'error' : '' }}" value="{!! old('nombre_empresa') !!}" name="nombre_empresa" id="nombre_empresa">
                <!-- Error -->
                @if ($errors->has('nombre_empresa'))
                <div class="error">
                    {{ $errors->first('nombre_empresa') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Tipo documento</label>
                <input type="text" required class="form-control {{ $errors->has('tipo_documento') ? 'error' : '' }}" value="{!! old('tipo_documento') !!}" name="tipo_documento" id="tipo_documento">
                <!-- Error -->
                @if ($errors->has('tipo_documento'))
                <div class="error">
                    {{ $errors->first('tipo_documento') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Documento de identidad</label>
                <input type="text" required class="form-control {{ $errors->has('documento_identidad') ? 'error' : '' }}" value="{!! old('documento_identidad') !!}" name="documento_identidad" id="documento_identidad">
                <!-- Error -->
                @if ($errors->has('documento_identidad'))
                <div class="error">
                    {{ $errors->first('documento_identidad') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Nombre del tutor</label>
                <input type="text" required class="form-control {{ $errors->has('nombre_tutor') ? 'error' : '' }}" value="{!! old('nombre_tutor') !!}" name="nombre_tutor" id="nombre_tutor">
                <!-- Error -->
                @if ($errors->has('nombre_tutor'))
                <div class="error">
                    {{ $errors->first('nombre_tutor') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Primer apellido</label>
                <input type="text" required class="form-control {{ $errors->has('primer_apellido_tutor') ? 'error' : '' }}" value="{!! old('primer_apellido_tutor') !!}" name="primer_apellido_tutor" id="primer_apellido_tutor">
                <!-- Error -->
                @if ($errors->has('primer_apellido_tutor'))
                <div class="error">
                    {{ $errors->first('primer_apellido_tutor') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Segundo apellido</label>
                <input type="text" class="form-control {{ $errors->has('segundo_apellido_tutor') ? 'error' : '' }}" value="{!! old('segundo_apellido_tutor') !!}" name="segundo_apellido_tutor" id="segundo_apellido_tutor">
                <!-- Error -->
                @if ($errors->has('segundo_apellido_tutor'))
                <div class="error">
                    {{ $errors->first('segundo_apellido_tutor') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Pais del documento</label>
                <input type="text" required class="form-control {{ $errors->has('pais_documento') ? 'error' : '' }}" value="{!! old('pais_documento') !!}" name="pais_documento" id="pais_documento">
                <!-- Error -->
                @if ($errors->has('pais_documento'))
                <div class="error">
                    {{ $errors->first('pais_documento') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Provincia</label>
                <input type="text" required class="form-control {{ $errors->has('provincia') ? 'error' : '' }}" value="{!! old('provincia') !!}" name="provincia" id="provincia">
                <!-- Error -->
                @if ($errors->has('provincia'))
                <div class="error">
                    {{ $errors->first('provincia') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Municipio</label>
                <input type="text" class="form-control {{ $errors->has('municipio') ? 'error' : '' }}" value="{!! old('municipio') !!}" name="municipio" id="municipio">
                <!-- Error -->
                @if ($errors->has('municipio'))
                <div class="error">
                    {{ $errors->first('municipio') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Estado del tutor</label>
                <select required class="form-control {{ $errors->has('estado') ? 'error' : '' }}" name="estado" id="estado">
                    <option value="activo" @if (old('estado') == 'activo') selected @endif>Tutor en activo</option>
                    <option value="inactivo" @if (old('estado') == 'inactivo') selected @endif>Tutor inactivo</option>
                </select>
                @if ($errors->has('estado'))
                <div class="error">
                    {{ $errors->first('estado') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Teléfono</label>
                <input type="text" class="form-control {{ $errors->has('telefono') ? 'error' : '' }}" value="{!! old('telefono') !!}" name="telefono" id="telefono">
                <!-- Error -->
                @if ($errors->has('telefono'))
                <div class="error">
                    {{ $errors->first('telefono') }}
                </div>
                @endif
            </div>
            <div class="form-group col-4">
                <label>Email</label>
                <input type="text" required class="form-control {{ $errors->has('email') ? 'error' : '' }}" value="{!! old('email') !!}" name="email" id="email">
                <!-- Error -->
                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
        </div>
        <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block my-5">
    </form>
</div>  
</body>
</html>
