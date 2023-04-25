@extends('dashboard.layouts.base')
@section('toolbar')
    @include('dashboard.layouts.components.toolbar',[
        'title' => 'Pages',
        'breadcrumbs' => [
            ['title'=> 'Home', 'url' => url('/dashboard/')],
            ['title'=> 'Pages'],
        ]
    ])
@endsection

@push('styles')
    {{ module_vite('pages', 'resources/assets/sass/app.scss') }}
@endpush


@section('content')
    <div id="app">
        <datatable
            ref="dt"
            api="{{route('dashboard.pages.index')}}"
            :columns="{{json_encode($dataTable->getOptions()['columns'])}}"
            :order="{{json_encode($dataTable->getOptions()['order'])}}">

            <template #table_actions>
                <a href="{{route('dashboard.pages.create')}}" class="btn btn-primary"> Create page </a>
            </template>

            <template #actions="{row}">
                <a class="btn btn-sm btn-clean btn-icon mx-1" title="Edit details"
                   :href="route('dashboard.pages.edit', row.id)">
                    <span class="svg-icon svg-icon-md">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409)"></path>
                                <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                            </g>
                        </svg>
                    </span>
                </a>
            </template>
        </datatable>
    </div>
@endsection

@push('scripts')
    {{ module_vite('pages', 'resources/assets/js/app.js') }}
@endpush
