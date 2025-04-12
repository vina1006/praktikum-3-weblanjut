@extends('layouts.master') 
 
@section('title', 'Home') 
 
@section('content') 
    <!-- Hero Section --> 
    <div class="hero-section text-center py-5 mb-5">
        <h1 class="section-title">Welcome to My Portfolio</h1>
        <p class="lead">My name is <strong>Vina Pikria Aenun</strong><br> from <strong>Muhammadiyah Cirebon University</strong>.</p>
        <a href="/about" class="btn custom-btn btn-primary mt-4"><i class="fas fa-user me-2"></i>About Me</a>
        
        <!-- Animated Shape -->
        <div class="position-relative mt-5">
        <svg viewBox="0 0 200 100" xmlns="http://www.w3.org/2000/svg" class="w-100 float-animation" style="height: 150px;">
            <path fill="rgba(0, 89, 242, 0.1)" d="M42.7,-73.4C54.9,-67.3,64.3,-55.3,71.9,-42C79.4,-28.7,85.2,-14.4,83.7,-1C82.2,12.3,73.5,24.6,65.9,38.5C58.2,52.3,51.7,67.8,40.3,73.9C28.9,80,14.4,76.8,0.6,75.9C-13.2,75,-26.5,76.4,-38.7,72.2C-50.9,68,-62,58.1,-69.7,45.7C-77.3,33.2,-81.4,16.6,-81.7,0C-82,-16.6,-78.5,-33.2,-70.2,-46.8C-61.9,-60.4,-48.7,-71,-34.7,-75.7C-20.7,-80.3,-5.3,-79.1,8.8,-75C23,-70.9,30.5,-79.5,42.7,-73.4Z" transform="translate(100 50)" />
        </svg>
        <img src="/images/vina.png" alt="Profile" class="rounded-circle position-absolute top-50 start-50 translate-middle shadow-lg animate__animated animate__bounce" style="width: 200px; height: 200px; z-index: 1;">
    </div>
 
    <!-- Skills Section --> 
    <div class="my-5">
        <h2 class="section-title text-center mb-5">My Skills</h2>
        <p class="lead text-center mb-5">Learn about some languages of programming for my portfolio.</p>
 
        <div class="row g-4">
            <!-- Skill 1 --> 
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <div class="feature-icon float-animation">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>I build responsive and user-friendly websites with modern tech.</p>
                <div class="mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>JavaScript</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Laravel</span>
                        <span>80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="#" class="btn custom-btn btn-primary mt-4">Learn More</a>
            </div>
        </div>

        <!-- Skill 2: Backend & Database -->
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <div class="feature-icon float-animation" style="animation-delay: 0.2s;">
                    <i class="fas fa-database"></i>
                </div>
                <h3>Backend & Database</h3>
                <p>I develop secure and efficient server-side applications.</p>
                <div class="mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>PHP</span>
                        <span>90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span>MySQL</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="#" class="btn custom-btn btn-primary mt-4">Learn More</a>
            </div>
        </div>

        <!-- Skill 3: Tools & Version Control -->
        <div class="col-md-4 mb-4">
            <div class="feature-card">
                <div class="feature-icon float-animation" style="animation-delay: 0.4s;">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Tools & Version Control</h3>
                <p>I manage code efficiently and collaborate using modern tools.</p>
                <div class="mt-4">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Git</span>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span>GitHub</span>
                        <span>90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <a href="https://github.com/username" class="btn custom-btn btn-primary mt-4" target="_blank">Visit GitHub</a>
            </div>
        </div>


    <!-- Projects Section -->
    <div class="my-5 pt-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="section-title">My Projects</h2>
                <p class="section-subtitle">Some of my recent work</p>
            </div>

            <!-- Projects Grid -->
            <div class="projects-grid">
                <!-- Portfolio Website Project -->
                <div class="project-card">
                <div class="project-image">
                    <img src="/images/port.png" alt="Portfolio" style="width:100%; height:auto;">
                </div>
                    <div class="project-header">
                        <h3>Portfolio Website</h3>
                    </div>
                    <div class="project-content">
                        <p>A personal portfolio website built with JavaScript featuring an elegant UI to highlight work experience, projects, and technical expertise.</p>
                        <div class="tech-tags">
                            <span class="tech-tag primary">JavaScript</span>
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                        </div>
                    </div>
                </div>

                <!-- GoEvent Project -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="/images/pantai.png" alt="ARNEYVA" style="width:100%; height:auto;">
                    </div>
                    <div class="project-header">
                        <h3>ARNEYVA</h3>
                    </div>
                    <div class="project-content">
                        <p>A Geographic Information System (GIS) application showcasing beaches in Indramayu, Indonesia.</p>
                        <div class="tech-tags">
                            <span class="tech-tag primary">PHP</span>
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                            <span class="tech-tag">MySql</span>
                        </div>
                    </div>
                </div>

                <!-- WalTask Project -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="/images/sewa.png" alt="Event Gear Hub" style="width:100%; height:auto;">
                    </div>
                    <div class="project-header">
                        <h3>Event Gear Hub</h3>
                    </div>
                    <div class="project-content">
                        <p>a local development for a rental system.</p>
                        <div class="tech-tags">
                            <span class="tech-tag primary">PHP</span>
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                            <span class="tech-tag">MySql</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Projects Section Styles */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-header {
            background: #3498db;
            color: white;
            padding: 1.5rem;
        }

        .project-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-content p {
            color: #555;
            margin-bottom: 1.5rem;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tech-tag {
            background: #f1f1f1;
            color: #333;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .tech-tag.primary {
            background: #3498db;
            color: white;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: #7f8c8d;
            font-size: 1.1rem;
            margin-bottom: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Contact CTA Section -->
    <div class="my-5 py-5 text-center">
        <h2 class="section-title">Let's Work Together</h2>
        <p class="lead mx-auto" style="max-width: 700px;">Have a project in mind? I'd love to hear about it and see how I can help bring your vision to life.</p>
        <a href="/contact" class="btn custom-btn btn-primary btn-lg mt-4"><i class="fas fa-paper-plane me-2"></i>Get In Touch</a>
    </div>
@endsection