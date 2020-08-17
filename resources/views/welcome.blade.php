@extends('layouts.app')

@section('title')
    <!-- page-title -->
    <title>TikBulk - TikTok Bulk Videos Downloader</title>
@endsection

@section('content')
    <!-- container-start -->
    <div class="container mb-100">

        <!-- row-start -->
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                <!-- heading-start -->
                <div class="text-heading text-primary text-center">
                    Download <strong>Tiktok Videos</strong> in Bulk
                </div>
                <!-- heading-end -->
            </div>
        </div>
        <!-- row-end -->

        <!-- row-start -->
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mx-auto">

                <!-- Download-card-start -->
                <div class="card shadow-sm rounded mt-5">
                    <div class="card-header">
                        <img class="img-fluid" src="{{asset('images/tiktok-icon-small.png')}}"> Enter TikTok video URLs
                    </div>
                    <div class="card-body">
                        <form action="{{route('process.videos')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                                    <div class="mb-2">
                                        <input id="form-tags-1" name="videos" type="text" value="https://www.tiktok.com/@dogowner520/video/6852987263463197957">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-download btn-lg w-100" type="submit"><i class="fa fa-download"></i> Download</button>
                                </div>
                            </div>
                        </form>
                        <p class="small text-center text-secondary mt-4">The output will be a .zip file containing all videos in .mp4 format</p>
                    </div>
                </div>
                <!-- download-card-end -->
            </div>
        </div>
        <!-- row-end -->

        <!-- row-start -->
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                <!-- Including Ad component -->
                @include('components.ad')
            </div>
        </div>
        <!-- row-end -->
    </div>
    <!-- container-end -->
@endsection

@section('js')
    <script src="{{asset('js/custom.js')}}"></script>
@endsection

