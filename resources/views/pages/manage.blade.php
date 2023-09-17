@extends('layouts.main')

@section('page-title')
<div class="page-title d-flex flex-column gap-1 me-3 mb-2">
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
            <a href="/" class="text-gray-500">
                <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
            </a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        
        <li class="breadcrumb-item text-gray-700 fw-bold lh-1"> {{$title}} </li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
    <!--begin::Title-->
    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0"> {{$title}} </h1>
    <!--end::Title-->
</div>
<!--end::App-->
@endsection

@section('konten')
<div id="kt_app_content_container" class="app-container container-fluid">
    <div class="row g-5 g-xl-10 mb-xl-10">
        <div class="card ">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                    <!--begin::Wrapper-->
                    <div class="flex-grow-1">
                        <!--begin::Head-->
                        <div class="d-flex justify-content-center align-items-center flex-wrap mb-2">
                            <!--begin::Details-->
                            <div class="d-flex flex-column">
                                <!--begin::Status-->
                                <div class="d-flex align-items-center mb-1">
                                    <span class="text-gray-800 fs-2 fw-bold me-3">Atur target Penjualan</span>
                                    <span class="badge badge-light-dark me-auto"><i class="ki-solid ki-gear fs-2x"></i></span>
                                </div>
                                <!--end::Status-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap justify-content-center">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-outline ki-calendar-add text-dark fs-1 me-2"></i>
                                        <div class="fs-4 fw-bold"> {{$bulanSekarang1}}, {{$tahunSekarang}}</div>
                                    </div>
                                    <!--end::Number-->
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Bulan</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
        
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-purchase text-dark fs-1 me-2"><i class="path1"></i><i class="path2"></i></i>                                
                                        <div class="fs-4 fw-bold counted">{{$stockterjual}}</div>
                                    </div>
                                    <!--end::Number-->
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Stok Terjual</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
        
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-tag text-dark fs-1 me-2"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i>  
                                        <div class="fs-4 fw-bold counted">Rp{{number_format($penjualanTerjual)}}</div>
                                    </div>
                                    <!--end::Number-->                                
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Penghasilan</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-tag text-dark fs-1 me-2"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i>                                
                                        <div class="fs-4 fw-bold counted">Rp{{number_format($targetPenjualan)}}</div>
                                    </div>
                                    <!--end::Number-->                                
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Target Penghasilan</div>
                                    <!--end::Label-->
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-tag text-dark fs-1 me-2"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i>                                
                                        <div class="fs-4 fw-bold counted">Rp{{number_format($pengeluaranT)}}</div>
                                    </div>
                                    <!--end::Number-->                                
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Pengeluaran</div>
                                    <!--end::Label-->
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <i class="ki-duotone ki-tag text-dark fs-1 me-2"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i>                                
                                        <div class="fs-4 fw-bold counted">Rp{{number_format($pendapatan_bersih)}}</div>
                                    </div>
                                    <!--end::Number-->                                
        
                                    <!--begin::Label-->
                                    <div class="fw-semibold fs-6 text-gray-400">Penghasilan Bersih</div>
                                    <!--end::Label-->
                                </div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Details-->
            </div>
        </div>
    </div>
</div>

@endsection
