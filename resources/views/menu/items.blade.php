@can('dashboard.pages.show')
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{route('dashboard.pages.index')}}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="24" height="24" fill="currentColor">
                        <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Pages</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
@endcan
