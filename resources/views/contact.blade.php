@extends('layouts.master')

@section('title', 'Contact Me')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Get in Touch</h1>
        <p class="lead">Let's work together on your next project</p>
    </div>

    <div class="row">
        <!-- Left Column - Contact Info -->
        <div class="col-lg-5 mb-4">
            <h3 class="h4 mb-3">Contact Information</h3>
            <p class="text-muted mb-4">Feel free to reach out through any of these channels.</p>
            
            <ul class="list-unstyled">
                <li class="mb-3 d-flex align-items-center">
                    <i class="fab fa-github me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">GitHub</span>
                        <a href="https://github.com/vina1006" target="_blank">vina1006</a>
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <i class="fab fa-linkedin me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">LinkedIn</span>
                        <a href="#" target="_blank">Vina Pikria Aenun</a>
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <i class="fab fa-instagram me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">Instagram</span>
                        <a href="https://www.instagram.com/jjehaee_?igsh=MTZ0Z2lza2kxeHVtZw==" target="_blank">@jjehaee_</a>
                    </div>
                </li>
                <li class="mb-3 d-flex align-items-center">
                    <i class="fas fa-envelope me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">Email</span>
                        <a href="mailto:vinafitriya2@gmail.com">vinafitriya2@gmail.com</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Right Column - Contact Form -->
        <div class="col-lg-7">
            <form class="bg-white p-4 rounded shadow-sm">
                <!-- Name Field -->
                <div class="mb-4">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control p-3" placeholder="Your name">
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control p-3" placeholder="Your email">
                </div>

                <!-- Subject Field -->
                <div class="mb-4">
                    <label class="form-label">Subject</label>
                    <input type="text" class="form-control p-3" placeholder="Subject">
                </div>

                <!-- Message Field -->
                <div class="mb-4">
                    <label class="form-label">Message</label>
                    <textarea class="form-control p-3" rows="5" placeholder="Your message"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-lg w-100 py-2">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }
    .form-control {
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
    }
    .form-control:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
    }
</style>
@endpush