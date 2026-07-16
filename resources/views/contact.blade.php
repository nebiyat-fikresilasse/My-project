@extends('layout')

@section('content')
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Reach out using the details below or send us a message.</p>

    <h2>Company Information</h2>
    <p>Email: info@siltawi.com</p>
    <p>Phone: +251 900 000 000</p>
    <p>Location: Addis Ababa, Ethiopia</p>

    <h2>Contact Form</h2>
    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Send</button>
    </form>

    <h2>Find Us on Map</h2>
    <iframe src="https://maps.google.com/maps?q=Addis%20Ababa&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
@endsection
