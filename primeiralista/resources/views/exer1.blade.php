@extends('layout')

@section('conteudo')

<form method="post" action="/exer1resp">
    @csrf
    <div class="mb-3">
        <label for="valor1" class="form-label">informe o valor 1</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor 2" class="form-label">informe o valor 2</label>
        <input type="number" id="valor 2" name="valor 2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($soma)
    <p>O valor da soma é {{ $soma }}</p>
@endisset

@endsection