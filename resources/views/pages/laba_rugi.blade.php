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
    <div class="card mb-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                <!--begin::Wrapper-->
                <div class="flex-grow-1">
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
                                    <div class="fs-4 fw-bold counted">{{$stokterjual}}</div>
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
                                    <div class="fs-4 fw-bold counted">Rp{{number_format($penghasilan)}}</div>
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
                                    <div class="fs-4 fw-bold counted">Rp{{number_format($pengeluaran)}}</div>
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
                                    <div class="fs-4 fw-bold counted">Rp{{number_format($penghasilan-$pengeluaran)}}</div>
                                </div>
                                <!--end::Number-->                                

                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">Penghasilan Bersih</div>
                                <!--end::Label-->
                            </div>
                        </div>
                        <!--end::Stats-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="kt_app_content_container" class="app-container container-fluid">
    <!--begin::Products-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-pendaptan-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Cari..." />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-200px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih Keterangan" data-kt-pendapatan-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="badge-light-success">Untung</option>
                        <option value="badge-light-danger">Rugi</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <div style="width: 105px">
                    <input class="form-control" placeholder="Pick a date" id="kt_datepicker_1_pendapatan"/>
                </div>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="table_pendapatan">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>No</th>
                        <th>Pendapatan</th>
                        <th>pengeluaran</th>
                        <th>Pendapatan Bersih</th>                                              
                        <th>Dibuat Pada </th>
                        <th>Aksi</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($labaRugi as $tanggal => $data)
                    <tr>
                        <td>{{$loop->iteration}}</</td>
                        <td>{{ number_format($data['pendapatan'],2) }}</td>
                        <td>{{ number_format($data['pengeluaran'],2) }}</td>
                        <td><div class="badge 
                            @if ($data['labaRugi'] > 0) badge-light-success @else badge-light-danger @endif">
                            {{ number_format($data['labaRugi'],2) }} @if ($data['labaRugi'] > 0) <div class="d-none">badge-light-success</div>  @else <div class="d-none"> badge-light-danger</div> @endif
                        </div></td>
                      
                        <td>{{ date('d-m-Y', strtotime($tanggal)) }}</td>
                        <td>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-50px card card-flush" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        @csrf
                                        <a href="{{ route('viewlabarugi' , $tanggal) }}"><i class="ki-duotone ki-eye text-primary fs-2x" data-bs-toggle="tooltip" title="View"><i class="path1"></i><i class="path2"></i><i class="path3"></i></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->
</div>
@endsection


