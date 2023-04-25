@extends('dashboard.layouts.base')
@section('toolbar')
    @include('dashboard.layouts.components.toolbar',[
        'title' => 'Pages',
        'breadcrumbs' => [
            ['title'=> 'Home', 'url' => url('/dashboard/')],
            ['title'=> 'Pages', 'url' => route('dashboard.pages.index')],
            ['title'=> 'Create Pages'],
        ]
    ])
@endsection

@push('styles')
    {{ module_vite('pages', 'resources/assets/sass/app.scss') }}
@endpush


@section('content')
    <div id="app">
        <create></create>
    </div>
@endsection

@push('scripts')
    {{ module_vite('pages', 'resources/assets/js/app.js') }}
@endpush
