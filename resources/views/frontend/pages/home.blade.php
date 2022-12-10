@extends('frontend.layouts.master')

@section('title')
    Home
@endsection

@section('frontend_content')

    @include('frontend.pages.widgets.slider')

    @include('frontend.pages.widgets.feature')

    @include('frontend.pages.widgets.best-seller')

    @include('frontend.pages.widgets.latest-product')

    @include('frontend.pages.widgets.testimonial')

@endsection
