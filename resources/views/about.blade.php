@extends('layouts.master')

@section('title', 'About Me')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section text-center py-5 mb-5">
        <h1 class="section-title">About Me</h1>
        <p class="lead">Hi, I'm <strong>Vina Pikria Aenun</strong><br> from <strong>Universitas Muhammadiyah Cirebon</strong>.</p>
        <a href="/contact" class="btn custom-btn btn-primary mt-4"><i class="fas fa-envelope me-2"></i>Contact Me</a>
        
        <!-- Animated Shape -->
        <div class="position-relative mt-5">
            <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg" class="w-100 float-animation" style="height: 150px;">
                <path fill="rgba(0, 123, 255, 0.1)" d="M42.7,-73.4C54.9,-67.3,64.3,-55.3,71.9,-42C79.4,-28.7,85.2,-14.4,83.7,-1C82.2,12.3,73.5,24.6,65.9,38.5C58.2,52.3,51.7,67.8,40.3,73.9C28.9,80,14.4,76.8,0.6,75.9C-13.2,75,-26.5,76.4,-38.7,72.2C-50.9,68,-62,58.1,-69.7,45.7C-77.3,33.2,-81.4,16.6,-81.7,0C-82,-16.6,-78.5,-33.2,-70.2,-46.8C-61.9,-60.4,-48.7,-71,-34.7,-75.7C-20.7,-80.3,-5.3,-79.1,8.8,-75C23,-70.9,30.5,-79.5,42.7,-73.4Z" transform="translate(100 50)" />
            </svg>
            <img src="/images/vina.png" alt="Muhammad Faiz" class="rounded-circle position-absolute top-50 start-50 translate-middle shadow-lg animate__animated animate__bounce" style="width: 200px; height: 200px; z-index: 1;">
        </div>
    </div>

    <!-- About Section -->
    <div class="my-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Who Am I?</h2>
                <p>I'm Vina Pikria Aenun, a passionate student at Universitas Muhammadiyah Cirebon with a strong interest in web development and technology.</p>
                <p>When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or mentoring fellow students.</p>
                
                <div class="mt-4">
                    <a href="https://github.com/vina1006" class="btn custom-btn btn-primary me-3"><i class="fas fa-briefcase me-2"></i>My Projects</a>
                    <a href="/resume" class="btn custom-btn btn-outline-primary"><i class="fas fa-file-alt me-2"></i>My Resume</a>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="mb-4">Personal Information</h4>
                        
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <h6>Name:</h6>
                                <p>Vina Pikria Aenun</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6>University:</h6>
                                <p>Universitas Muhammadiyah Cirebon</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6>Email:</h6>
                                <p>vinafitriya2@gmail.com</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6>Phone:</h6>
                                <p>088222854534</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6>Focus Area:</h6>
                                <p>Web Development</p>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h6>GitHub:</h6>
                                <p><a href="https://github.com/vina1006" target="_blank">vina1006</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technologies & Tools Section -->
    <div class="my-5 pt-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="section-title">Technologies & Tools</h2>
            </div>

            <!-- Programming Languages Table -->
            <div class="tech-grid mb-4">
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>JavaScript</span>
                </div>
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>PHP</span>
                </div>
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>Python</span>
                </div>
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>GitHub</span>
                </div>
            </div>

            <!-- Frameworks List -->
            <div class="frameworks-grid">
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>Laravel</span>
                </div>
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>MySQL</span>
                </div>
                <div class="tech-item" onclick="toggleTech(this)">
                    <span>Git</span>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Technologies & Tools Section Styles */
        .tech-grid, .frameworks-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .frameworks-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .tech-item {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            font-weight: 500;
            color: #2c3e50;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .tech-item:hover {
            background: #e9ecef;
        }

        .tech-item.active {
            background: #3498db;
            color: white;
            border-color: #3498db;
            box-shadow: 0 4px 8px rgba(52, 152, 219, 0.2);
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .tech-grid, .frameworks-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .tech-grid, .frameworks-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script>
        function toggleTech(element) {
            element.classList.toggle('active');
        }
    </script>

    <!-- My Journey Section -->
    <div class="my-5 pt-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="section-title">My Journey</h2>
                <p class="lead">Professional experience and education</p>
            </div>

            <!-- Experience Section -->
            <div class="mb-5">
                <h3 class="subsection-title mb-4">Experience</h3>
                
                <!-- RevoU Experience Card -->
                <div class="journey-card mb-4">
                    <div class="journey-card-header">
                        <h4>Fundamental Course Into to Software Engineering</h4>
                        <p class="journey-card-subtitle">Fundamental Course powered by RevoU</p>
                    </div>
                    <div class="journey-card-body">
                        <p>Currently learning software engineering fundamentals including programming basics, algorithms, and software development methodologies.</p>
                        <div class="journey-card-date">2025 - Present</div>
                    </div>
                </div>

            <!-- Education Section -->
            <div class="education-section">
                <h3 class="subsection-title mb-4">Education</h3>
                
                <!-- University Education Card -->
                <div class="journey-card">
                    <div class="journey-card-header">
                        <h4>Universitas Muhammadiyah Cirebon</h4>
                        <p class="journey-card-subtitle">Bachelor's Degree in Computer Science</p>
                    </div>
                    <div class="journey-card-body">
                        <p>Focusing on web development, software engineering principles, and database systems.</p>
                        <div class="journey-card-date">2022 - Present</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Journey Section Styles */
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .subsection-title {
            font-size: 1.5rem;
            font-weight: 600;
            color:rgb(141, 52, 219);
            border-bottom: 2px solid rgb(113, 52, 219);
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        
        .journey-card {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border-left: 4px solid rgb(80, 52, 219);
            transition: all 0.3s ease;
        }
        
        .journey-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .journey-card-header {
            margin-bottom: 1rem;
        }
        
        .journey-card-header h4 {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.25rem;
        }
        
        .journey-card-subtitle {
            color: #7f8c8d;
            font-size: 0.95rem;
        }
        
        .journey-card-body p {
            color: #555;
            margin-bottom: 0.5rem;
        }
        
        .journey-card-date {
            font-size: 0.85rem;
            color:rgb(105, 52, 219);
            font-weight: 500;
            margin-top: 0.5rem;
        }
    </style>

    <!-- Call to Action -->
    <div class="my-5 py-5 text-center bg-light rounded-3">
        <h2 class="section-title">Want to Know More?</h2>
        <p class="lead mx-auto" style="max-width: 700px;">I'm always open to discussing new projects, creative ideas or opportunities to be part of your vision.</p>
        <div class="mt-4">
            <a href="/contact" class="btn custom-btn btn-primary btn-lg me-3"><i class="fas fa-paper-plane me-2"></i>Contact Me</a>
            <a href="https://github.com/vina1006" class="btn custom-btn btn-outline-primary btn-lg"><i class="fas fa-code me-2"></i>View Projects</a>
        </div>
    </div>
@endsection