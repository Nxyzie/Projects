<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikki Grace D. Magdali</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            overflow-x: hidden;
        }

        .presentation-container {
            position: relative;
            min-height: 100vh;
        }

        .slide {
            min-height: 100vh;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            animation: slideIn 0.8s ease-out;
        }

        .slide.active {
            display: flex;
            flex-direction: column;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-content {
            max-width: 1200px;
            width: 100%;
            text-align: center;
            z-index: 2;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
            background: linear-gradient(45deg, #fff, #f0f8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 2px 2px 4px rgba(0,0,0,0.3), 0 0 10px rgba(255,255,255,0.2); }
            to { text-shadow: 2px 2px 4px rgba(0,0,0,0.3), 0 0 20px rgba(255,255,255,0.4); }
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #f0f8ff;
        }

        h3 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #e6f3ff;
        }

        p, li {
            font-size: 1.3rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            color: #f0f8ff;
        }

        .subtitle {
            font-size: 1.8rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            color: #e6f3ff;
        }

        .grid {
            display: grid;
            gap: 2rem;
            margin: 2rem 0;
        }

        .grid-2 {
            grid-template-columns: 1fr 1fr;
        }

        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: left;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 64px rgba(0,0,0,0.2);
            background: rgba(255, 255, 255, 0.15);
        }

        .card h4 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            margin: 3rem 0;
        }

        .stat-box {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            min-width: 200px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: #e6f3ff;
            opacity: 0.9;
        }

        .navigation {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            display: flex;
            gap: 1rem;
        }

        .nav-btn {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            font-size: 1rem;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .slide-number {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin: 2rem 0;
        }

        .tech-badge {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .tech-badge:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        .feature-list {
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.1);
            margin: 1rem 0;
            padding: 1.5rem;
            border-radius: 15px;
            border-left: 4px solid #fff;
            backdrop-filter: blur(10px);
        }

        .highlight {
            background: linear-gradient(45deg, #ff6b6b, #ffd93d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }

        .demo-section {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem;
            margin: 2rem 0;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
            margin: 2rem 0;
        }

        .contact-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .cta {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 1.5rem 3rem;
            border: none;
            border-radius: 30px;
            font-size: 1.3rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 2rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            text-decoration: none;
            display: inline-block;
        }

        .cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            h3 { font-size: 1.5rem; }
            p, li { font-size: 1.1rem; }
            .grid-2, .grid-3 { grid-template-columns: 1fr; }
            .stats-container { flex-direction: column; }
            .contact-info { flex-direction: column; align-items: center; }
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body>
    <div class="presentation-container">
       
        <div class="slide active">
            <div class="particles" id="particles"></div>
            <div class="slide-content">
                <h1> Nikki Grace D. Magdali</h1>
                <p class="subtitle">Computer Engineering Student | Frontend Developer | UI/UX Designer</p>
                <div class="tech-stack">
                    <span class="tech-badge">Database Management</span>
                    <span class="tech-badge">Data Analysis and Visualization</span>
                    <span class="tech-badge">Web Development Fundamentals</span>
                    <span class="tech-badge">UI/UX</span>
                    <span class="tech-badge">Problem-Solving</span>
                </div>
                <div class="contact-info">
                    <div class="contact-item"> ngracemagdali0617@gmail.com</div>
                    <div class="contact-item"> +63 956 490 5633</div>
                    <div class="contact-item"> https://www.linkedin.com/in/nikki-grace-magdali-77aa02189/</div>
                    <div class="contact-item"> https://github.com/Nxyzie/Nemethace</div>
                </div>
                <p style="margin-top: 3rem; font-size: 1.5rem;">Passionate about creating <span class="highlight">beautiful</span> and <span class="highlight">functional</span> digital experiences</p>
            </div>
        </div>

        
        <div class="slide">
            <div class="slide-content">
                <h2> About Me</h2>
                <div class="stats-container">
                    <div class="stat-box">
                        <span class="stat-number">3+</span>
                        <span class="stat-label">Years of Coding</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                    <div class="stat-box">
                        <span class="stat-number">5</span>
                        <span class="stat-label"> Clients Served</span>
                    </div>
                </div>
                <div class="demo-section">
                    <h3>My Journey </h3>
                    <p style="font-size: 1.4rem; text-align: left;">I'm a dedicated Computer Engineering student with a passion for creating exceptional user experiences. My journey began with curiosity about how websites work, and evolved into frontend development and UI/UX design. I believe in the power of clean code, intuitive design, and continuous learning.</p>
                    <div style="margin-top: 2rem;">
                        <p><strong>Currently pursuing:</strong> Bachelor of Science in Computer Engineering</p>
                        <p><strong>Expected graduation:</strong> 2026</p>
                        <p><strong>Location:</strong> Talisay City, Philippines</p>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="slide">
            <div class="slide-content">
                <h2> Technical Skills</h2>
                <div class="grid grid-2">
                    <div class="card">
                        <h4> Frontend Development</h4>
                        <div class="tech-stack" style="justify-content: flex-start;">
                            <span class="tech-badge">HTML5</span>
                            <span class="tech-badge">CSS/SCSS</span>
                            <span class="tech-badge">JavaScript</span>
                        </div>
                    </div>
                    <div class="card">
                        <h4> UI/UX Design</h4>
                        <div class="tech-stack" style="justify-content: flex-start;">
                            <span class="tech-badge">Figma</span>
                            <span class="tech-badge">Adobe</span>
                            <span class="tech-badge">Sketch</span>
                            <span class="tech-badge">Prototyping</span>
                            <span class="tech-badge">Wireframing</span>
                            <span class="tech-badge">User Research</span>
                        </div>
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="card">
                        <h4> Tools & Technologies</h4>
                        <div class="tech-stack" style="justify-content: flex-start;">
                            <span class="tech-badge">Git/GitHub</span>
                            <span class="tech-badge">VS Code</span>
                            <span class="tech-badge">XAMPP</span>
                        </div>
                    </div>
                    <div class="card">
                        <h4> Additional Skills</h4>
                        <div class="tech-stack" style="justify-content: flex-start;">
                            <span class="tech-badge">Responsive Design</span>
                            <span class="tech-badge">Performance Optimization</span>
                            <span class="tech-badge">Microprocessor</span>
                            <span class="tech-badge">Hardware | Logic Circuits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <div class="slide">
            <div class="slide-content">
                <h2> Featured Projects</h2>
                <div class="feature-list">
                    <div class="feature-item">
                        <h4> Role Based Mock Dashboard</h4>
                        <p><strong>Tech Stack:</strong> HTML, CSS, JavaScript, PHP, MySQL</p>
                        <p>Designed and developed a comprehensive admin dashboard with real-time analytics, inventory management, and responsive design. Implemented advanced filtering and search functionality.</p>
                        <div class="tech-stack" style="justify-content: flex-start; margin-top: 1rem;">
                            <span class="tech-badge"><a href="file:///C:/Users/ngrac/OneDrive/Documents/Projects'/index.html">View Live</a></span>
                            <span class="tech-badge">Source Code</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h4> Bonsai</h4>
                        <p><strong>Tech Stack:</strong> HTML, CSS</p>
            
                        <div class="tech-stack" style="justify-content: flex-start; margin-top: 1rem;">
                            <span class="tech-badge"><a href="file:///C:/Users/ngrac/OneDrive/Documents/TUP/2nd%20Year/Midterm/VB.Net/Activity/Activity%203/bonsai/bonsai.html">View Live</a></span>
                            <span class="tech-badge">Source Code</span>
                        </div>
                    </div>
                     <div class="feature-item">
                        <h4> Abstract</h4>
                        <p><strong>Tech Stack:</strong> HTML, CSS</p>
            
                        <div class="tech-stack" style="justify-content: flex-start; margin-top: 1rem;">
                            <span class="tech-badge"><a href="file:///C:/Users/ngrac/OneDrive/Documents/TUP/2nd%20Year/Midterm/VB.Net/Activity/Activity%203/Abstract/Abstract.html#">View Live</a></span>
                            <span class="tech-badge">Source Code</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h4> Realty and Memorial</h4>
                        <p><strong>Tech Stack:</strong> UI/UX</p>
            
                        <div class="tech-stack" style="justify-content: flex-start; margin-top: 1rem;">
                            <span class="tech-badge"><a href="fhttps://www.figma.com/design/LQAcaIYl2KxisrVm0V4FXQ/Pixel8-Realty---Memorial?node-id=3363-6274&p=f&t=dB24nbKPgMY2FkPv-0">View Live</a></span>
                            <span class="tech-badge">Source Code</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <h4> Abstract</h4>
                        <p><strong>Tech Stack:</strong> HTML, CSS</p>
            
                        <div class="tech-stack" style="justify-content: flex-start; margin-top: 1rem;">
                            <span class="tech-badge"><a href="https://www.figma.com/design/mwjJ23TQ0YIHrFoGZN0xCq/Version-3---BookOn?node-id=131-37390&p=f&t=dj9gFX9V34dfISB8-0">View Live</a></span>
                            <span class="tech-badge">Source Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 5: Design Philosophy -->
        <div class="slide">
            <div class="slide-content">
                <h2> Design </h2>
                <div class="grid grid-2">
                    <div class="card">
                        <h4> User-Centered Design</h4>
                        <p>Every design decision starts with understanding user needs, behaviors, and pain points. I conduct user research and create personas to guide the design process.</p>
                    </div>
                    <div class="card">
                        <h4> Performance First</h4>
                        <p>Beautiful designs mean nothing if they don't load fast. I prioritize performance optimization, efficient code, and minimal bundle sizes.</p>
                    </div>
                </div>
                <div class="demo-section">
                    <h3> My Design Process</h3>
                    <div class="grid grid-3">
                        <div class="card">
                            <h4>1️⃣ Research</h4>
                            <p>User interviews, competitor analysis, and market research to understand the problem space.</p>
                        </div>
                        <div class="card">
                            <h4>2️⃣ Design</h4>
                            <p>Wireframing, prototyping, and visual design with focus on usability and aesthetics.</p>
                        </div>
                        <div class="card">
                            <h4>3️⃣ Develop</h4>
                            <p>Clean, maintainable code that brings designs to life with smooth interactions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="slide">
            <div class="slide-content">
                <h2> Education & Experience</h2>
                <div class="feature-list">
                    <div class="feature-item">
                        <h4> Bachelor of Science in Computer Engineering</h4>
                        <p><strong>Technological University of the Philippines</strong> | 2023 - 2026 (Expected)</p>
                        <p>Relevant Coursework: Data Structures, Algorithms, Web Development, Database Systems</p>
                        <p><strong>GPA:</strong> 7.67/10 | </strong> 3 semesters</p>
                    </div>
                    <div class="feature-item">
                        <h4> Frontend Development </h4>
                        <p>Developed responsive web components using XAMPP (MySQL,PHP),CSS. Collaborated with design team to implement UI/UX improvements that increased user engagement.</p>
                    </div>
                    <div class="feature-item">
                        <h4> UI/UX </h4>
                        <p>Developed design and prototype that are user-centered, accessible.</p>
                    </div>
                     <div class="feature-item">
                        <h4> Hardware </h4>
                        <p>Can design PCB that meets the expected specification and develop which complies with safety regulations, and is optimized for manufacturability.</p>
                    </div>
                </div>
            </div>
        </div>

  
        <div class="slide">
            <div class="slide-content">
                <h2> What I Bring to Your Team</h2>
                <div class="grid grid-2">
                    <div class="card">
                        <h4> Creative Problem Solving</h4>
                        <p>I approach challenges with creativity and analytical thinking, finding innovative solutions that balance user needs with technical constraints.</p>
                    </div>
                    <div class="card">
                        <h4> Collaborative Spirit</h4>
                        <p>Strong communication skills and experience working in cross-functional teams. I value feedback and believe great products come from great teamwork.</p>
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="card">
                        <h4> Continuous Learning</h4>
                        <p>Tech evolves rapidly, and so do I. I stay updated with the latest trends, tools, and best practices in frontend development and design.</p>
                    </div>
                    <div class="card">
                        <h4> Results-Driven</h4>
                        <p>I focus on delivering measurable results - whether it's improving load times, increasing conversion rates, or enhancing user satisfaction.</p>
                    </div>
                </div>
                <div class="demo-section">
                    <h3> Ready to Contribute</h3>
                    <div class="stats-container">
                        <div class="stat-box">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Commitment to Quality</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Passion for Learning</span>
                        </div>
                        <div class="stat-box">
                            <span class="stat-number">∞</span>
                            <span class="stat-label">Creative Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="slide">
            <div class="slide-content">
                <h2> Let's Build Something Amazing</h2>
                <div class="demo-section">
                    <h3>Ready to Make an Impact</h3>
                    <p style="font-size: 1.4rem; margin-bottom: 2rem;">I'm looking for opportunities to grow, learn, and contribute to meaningful projects. Whether it's an internship, junior developer role, or freelance project, I'm excited to bring fresh perspectives and modern solutions to your team.</p>
                    
                    <div class="grid grid-2">
                        <div class="card">
                            <h4> What I'm Seeking</h4>
                            <ul style="list-style: none; padding: 0;">
                                <li>• Frontend Developer roles</li>
                                <li>• UI/UX Designer positions</li>
                                <li>• Internship opportunities</li>
                                <li>• Freelance projects</li>
                                <li>• Collaborative team environment</li>
                            </ul>
                        </div>
                        <div class="card">
                            <h4> What You Get</h4>
                            <ul style="list-style: none; padding: 0;">
                                <li>• Fresh, modern perspectives</li>
                                <li>• Clean, maintainable code</li>
                                <li>• User-centered design approach</li>
                                <li>• Enthusiasm and dedication</li>
                                <li>• Quick learning ability</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="contact-info">
                    <div class="contact-item"> ngracemagdali0617@gmail.com</div>
                    <div class="contact-item"> +63 956 490 5633</div>
                    <div class="contact-item"> LinkedIn Profile</div>
                    <div class="contact-item"> GitHub Portfolio</div>
                </div>

                <div style="text-align: center; margin-top: 3rem;">
                    <a href="mailto:your.email@example.com" class="cta">Let's Start a Conversation! </a>
                </div>
                <div style="margin-top: 2rem;">
                    <p style="font-size: 1.5rem;">Ready to create <span class="highlight">exceptional</span> user experiences together?</p>
                </div>
            </div>
        </div>
    </div>

   
    <div class="navigation">
        <button class="nav-btn" onclick="previousSlide()">← Previous</button>
        <button class="nav-btn" onclick="nextSlide()">Next →</button>
    </div>


    <div class="slide-number">
        <span id="current-slide">1</span> / <span id="total-slides">8</span>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        
        document.getElementById('total-slides').textContent = totalSlides;

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (n + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active');
            document.getElementById('current-slide').textContent = currentSlide + 1;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function previousSlide() {
            showSlide(currentSlide - 1);
        }

      
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight' || e.key === ' ') {
                nextSlide();
            } else if (e.key === 'ArrowLeft') {
                previousSlide();
            }
        });

       
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.width = (Math.random() * 10 + 5) + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 6 + 4) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        
        createParticles();
        showSlide(0);

        
        document.addEventListener('DOMContentLoaded', function() {
            const contactItems = document.querySelectorAll('.contact-item');
            contactItems.forEach(item => {
                item.addEventListener('click', function() {
                    const text = this.textContent;
                    if (text.includes('@')) {
                        window.location.href = 'mailto:' + text.split(' ')[1];
                    } else if (text.includes('linkedin')) {
                        window.open('https://' + text.split(' ')[1], '_blank');
                    } else if (text.includes('github')) {
                        window.open('https://' + text.split(' ')[1], '_blank');
                    }
                });
            });
        });
    </script>
</body>
</html>
