@extends('layouts.landing')

@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Courses</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/landing') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Course</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Courses Start -->
        <div class="container-fluid courses overflow-hidden py-5" style="margin-bottom: 90px;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Our Courses</h4>
                    <h1 class="display-4 text-white mb-4">Out Our Highlights Below</h1>
                </div>
            </div>
        </div>
        <!-- Courses End -->
@endsection