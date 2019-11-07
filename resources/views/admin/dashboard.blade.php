@extends('layouts.backend.app')

@section('title','Dashboard')

@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h2>{{__('DASHBOARD')}}</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">{{__('apps')}}</i>
                        </div>
                        <div class="content">
                            <div class="text"><a style="color:aliceblue;" href="{{route('admin.post.index')}}">{{__('POSTS')}} {{$post->count()}}</a></div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">{{__('library_books')}}</i>
                        </div>
                        <div class="content">
                            <div class="text"><a style="color:#fff0ff;" href="{{route('admin.category.index')}}">{{__('CATEGORY')}} {{$category->count()}}</a></div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">{{__('label')}}</i>
                        </div>
                        <div class="content">
                            <div class="text"><a style="color:#fff0ff;" href="{{route('admin.tag.index')}}">{{__('TAGS')}} {{$tag->count()}}</a></div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->

        </div>
@endsection
@push('js')
    <!-- Morris Plugin Js -->
    <script src="{{asset('backend/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('backend/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('backend/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="p{{asset('backend/lugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('backend/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('backend/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('backend/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
<script src="{{asset('backend/js/pages/index.js')}}"></script>
@endpush
