@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">azienda</th>
                    <th scope="col">stazione_di_partenza</th>
                    <th scope="col">stazione_di_arrivo</th>
                    <th scope="col">orario_di_partenza</th>
                    <th scope="col">orario_di_arrivo</th>
                    <th scope="col">codice_Treno</th>
                    <th scope="col">numero_Carrozze</th>
                    <th scope="col">in_orario</th>
                    <th scope="col">cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->codice_Treno }}</td>
                        <td>{{ $train->numero_Carrozze }}</td>
                        <td>{{ $train->in_orario }}</td>
                        <td>{{ $train->cancellato }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
