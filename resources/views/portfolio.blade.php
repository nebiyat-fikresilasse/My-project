@extends('layout')

@section('content')
    <h1>Portfolio</h1>
    <p>Here are some of the projects we have completed for our clients:</p>

    <div class="portfolio-gallery">
        <div class="project">
            <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" width="300">
            <p>E-commerce Website for a local store</p>
        </div>

        <div class="project">
            <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" width="300">
            <p>Brand Identity Design for a startup</p>
        </div>

        <div class="project">
            <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" width="300">
            <p>Social Media Campaign for a restaurant</p>
        </div>
    </div>
@endsection

