@extends('layouts.app')

@section('content')
    @foreach($contraofertas->chunk(3) as $chunk)
        <div class="card-group row course-set courses__row producto">
            @foreach($chunk as $contraoferta)
                @if($contraoferta['estado_oferta'] === 1)
                    @include('contraofertas.contraoferta')
                @endif
            @endforeach
        </div>
    @endforeach
@endsection
@push('scripts')
    <script src="{{ asset('js/lozad.js') }}" defer></script>
@endpush