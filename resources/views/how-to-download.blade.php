@extends('layouts.app')

@section('title')
    <!-- page-title -->
    <title>TikBulk - How To Download</title>
@endsection

@section('content')
    <!-- container-start -->
    <div class="container mb-100">

        <!-- row-start -->
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                <!-- heading-start -->
                <div class="text-heading text-primary text-center">
                    How to download
                </div>
                <!-- heading-end -->
            </div>
        </div>
        <!-- row-end -->

        <!-- how-to-download-card-start -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
                <div class="card mb-1">
                    <div class="card-body text-center">
                        <h1 class="text-primary">Step 1 -  <i class="fa fa-link"></i></h1>
                        <p>Get the video URLs / Share links of TikTok videos. If you are using a computer or laptop, open the TikTok video and copy the URL from browser's URL bar and paste it to URLs section of TikBulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
                <div class="card mb-1">
                    <div class="card-body text-center">
                        <h1 class="text-primary">Step 2 - <i class="fa fa-cogs"></i></h1>
                        <p>After pasting all video URLs / Share links <i>(You can paste unlimited TikTok videos URLs / Share Links)</i>, click the 'Download' button. The server will start fetching and process the videos.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mx-auto">
                <div class="card mb-1">
                    <div class="card-body text-center">
                        <h1 class="text-primary">Step 3 - <i class="fa fa-download"></i></h1>
                        <p>After the server is done with fetching the processing all videos into zip file in mp4 format, it will invoke download popup and you have to save it on your local storage.</p>
                    </div>
                </div>
            </div>
            </div>
        <!-- how-to-download-card-end -->

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
    <!-- You can put your custom JS code here -->
@endsection

