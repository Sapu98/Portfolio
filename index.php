<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lorenzo – Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style_cards.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style_skills.css?v=<?php echo time(); ?>">
    <!-- NUOVO: CSS per le project cards -->
    <link rel="stylesheet" href="style_projects.css?v=<?php echo time(); ?>">
    <link rel="icon" href="assets/image/logo.png" />
  </head>
  <body class="custom-bg">
    <div class="content-wrapper">
      <!-- Barra titolo -->
      <div class="fullwidth-bar d-flex justify-content-between align-items-center px-4">
        <div class="text-center flex-fill">
          <h1 class="curriculum-heading mb-1">Portfolio</h1>
          <p class="subheading">Lorenzo Dal Fabbro</p>
        </div>
      </div>

      <div class="d-flex flex-column align-items-center py-5 px-2">
        <!-- FOTO + PROFILO -->
        <div class="position-relative w-100 d-flex justify-content-center flex-wrap" style="max-width: 900px;">
          <div class="photo-wrapper">
            <img src="assets/image/lorenzo.jpg" alt="Foto di Lorenzo" class="profile-pic-floating" />
          </div>
          <div class="bg-box ms-0">
            <div class="section-header toggle-header">
              <span class="section-icon">👤</span>
              <h2 class="sect-title flex-grow-1 mb-0">Profile</h2>
              <span class="section-toggle-arrow">&#9660;</span>
            </div>
            <div class="section-content">
              <p> Name: <strong>Lorenzo</strong>
                <br /> Surname: <strong>Dal Fabbro</strong>
                <br /> Birth Date: <strong>08/10/1998</strong>
                <br />
                <br /> Hello, I’m a developer with a strong interest in programming, cybersecurity, artificial intelligence, and anything related to the Internet of Things (IoT). <br />
                <br /> I started writing and modifying code at the age of 12 and this introduced me to languages such as <strong>Java</strong> that has become my favourite. I've been building software and tech solutions ever since, first as a hobby, and later as part of my academic journey. <br />
                <br /> I’ve created many programs, some of which on request, and developed websites to showcase and sell my projects; this led me to explore various areas of IT, especially security; both to prevent and, at times, fix real attacks targeting executables and web apps I maintained. <br />
                <br /> I manage both public and private infrastructure using services like <strong>VPS and VPNs</strong>, as well as personal hardware such as <strong>Raspberry Pi</strong> and Orange Pi; one of which currently hosts this site. <br />
                <br /> Outside of tech, I enjoy running, climbing, skiing, and more recently, cycling. I enjoy sharing these activities with others and joining in new experiences.
              </p>
            </div>
          </div>
        </div>

        <!-- Esperienza -->
        <div class="bg-box mt-4">
          <div class="section-header toggle-header">
            <span class="section-icon">💼</span>
            <h2 class="sect-title flex-grow-1 mb-0">Job Experience</h2>
            <span class="section-toggle-arrow">&#9660;</span>
          </div>
          <div class="section-content">
            <p>
              <strong>SemEval 2025 – LA²I²F team:</strong> Co-author and developer for Task 5, organized with the German National Library of Science and Technology. Our approach ranked <strong>3rd</strong> on the <em>TIB-core leaderboard</em>. Published in the official conference: <a href="https://arxiv.org/abs/2504.07199" target="_blank">arxiv.org/abs/2504.07199</a>.
            </p>
            <p>
              <strong>Lab – Master Thesis:</strong> Working with the hospital of Udine, I've developed deep learning solutions for cancer BRCA mutation detection from laparoscopic surgery videos. Focus on clinical explainability and computer vision for real-world diagnostics.
            </p>
            <p>
              <strong>Apprenticeship:</strong> During high school, I completed four consecutive apprenticeship, each as a 4-week apprenticeships: first as a mechanical assistant working with CNC machines in the workshop section of the factory, and later as a CAD operator in the technical design office at <a href="https://www.brado.it/it" target="_blank">Brado S.p.A.</a>.
            </p>
          </div>
        </div>

        <!-- Istruzione -->
        <div class="bg-box mt-4">
          <div class="section-header toggle-header">
            <span class="section-icon">🎓</span>
            <h2 class="sect-title flex-grow-1 mb-0">Education</h2>
            <span class="section-toggle-arrow">&#9660;</span>
          </div>
          <div class="section-content">
            <div class="container my-4 education-cards">
              <div class="row justify-content-center">
                <!-- CARD 3 – Magistrale -->
                <div class="col-md-6 mb-4">
                  <div class="card text-center edu-card">
                    <div class="card-body">
                      <h5 class="card-title">Master in <br>Multimedia Communication and Information Technology </h5>
                      <h6 class="card-subtitle">🇮🇹 / 🇦🇹 Uniud & Universität Klagenfurt</h6>
                      <hr>
                      <ul class="list-unstyled">
                        <li>LM-18 (Computer Science)</li>
                        <li>LM-19 (ICT & Multimedia Systems)</li>
                        <li>Machine Learning, AI, IoT and Cloud technologies</li>
                        <li>Project-based and research-oriented curriculum</li>
                      </ul>
                      <span class="btn btn-outline-light disabled">More info</span>
                    </div>
                  </div>
                </div>
                <!-- CARD 2 – Triennale -->
                <div class="col-md-6 mb-4">
                  <div class="card text-center edu-card">
                    <div class="card-body">
                      <h5 class="card-title">Bachelor in <br>Internet of Things, Big Data & Web </h5>
                      <h6 class="card-subtitle">🇮🇹 Università degli Studi di Udine</h6>
                      <hr>
                      <ul class="list-unstyled">
                        <li>C/C++, C#, Python, Java(🐐), PHP</li>
                        <li>SQL, HTML, CSS, JS</li>
                        <li>IoT systems, networks, algorithms and databases</li>
                        <li>Full-stack development</li>
                      </ul>
                      <span class="btn btn-outline-light disabled">More info</span>
                    </div>
                  </div>
                </div>
                <!-- CARD 1 – Superiori -->
                <div class="col-md-6 mb-4">
                  <div class="card text-center edu-card">
                    <div class="card-body">
                      <h5 class="card-title">Diploma in <br>ITIS Meccanica e Meccatronica </h5>
                      <h6 class="card-subtitle">🇮🇹 ISISS G. Verdi</h6>
                      <hr>
                      <ul class="list-unstyled">
                        <li>High School Diploma in Mechatronics</li>
                        <li>Practical skills in mechanics, automation, SolidWorks and CAD</li>
                        <li>Training in electronics, PLCs, and industrial robotics</li>
                      </ul>
                      <span class="btn btn-outline-light disabled">More info</span>
                    </div>
                  </div>
                </div>
              </div><!-- row -->
            </div><!-- container -->
          </div>
        </div>

        <!-- Technical Skills -->
        <div class="bg-box mt-4">
          <div class="section-header toggle-header">
            <span class="section-icon">🛠️</span>
            <h2 class="sect-title flex-grow-1 mb-0">Skills</h2>
            <span class="section-toggle-arrow">&#9660;</span>
          </div>
          <div class="section-content">
            <div class="skill-grid">
              <!-- LANGUAGES -->
              <div class="skill-column">
                <h6><i class="fas fa-code me-2"></i>Languages & Frameworks</h6>
                <div class="skill-box">
                  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="Java">
                  <span class="skill-label">Java</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/python" alt="Python">
                  <span class="skill-label">Python</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/cplusplus" alt="C++">
                  <span class="skill-label">C, C++, C#</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/php" alt="PHP">
                  <span class="skill-label">PHP</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/html5" alt="HTML5">
                  <span class="skill-label">HTML, CSS, JavaScript</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/mysql" alt="MySQL">
                  <span class="skill-label">SQL (MySQL, MariaDB)</span>
                </div>
                <!-- Flutter -->
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/flutter" alt="Flutter" title="Flutter">
                  <span class="skill-label">Flutter/Dart</span>
                </div>
              </div>
              <!-- TOOLS -->
              <div class="skill-column">
                <h6><i class="fas fa-tools me-2"></i>Tools & Environments</h6>
                <div class="skill-box">
                  <img src="https://resources.jetbrains.com/storage/products/intellij-idea/img/meta/intellij-idea_logo_300x300.png" alt="IntelliJ IDEA">
                  <span class="skill-label">IntelliJ IDEA</span>
                </div>
                <div class="skill-box">
                  <img src="https://resources.jetbrains.com/storage/products/pycharm/img/meta/pycharm_logo_300x300.png" alt="PyCharm">
                  <span class="skill-label">PyCharm / CLion</span>
                </div>
                <div class="skill-box">
                  <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/vscode/vscode-original.svg" alt="VS Code">
                  <span class="skill-label">VS Code</span>
                </div>
                <div class="skill-box">
                  <img src="https://visualstudio.microsoft.com/wp-content/uploads/2021/10/Product-Icon.svg" alt="Visual Studio">
                  <span class="skill-label">Visual Studio</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/git" alt="Git">
                  <span class="skill-label">Git</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/docker" alt="Docker">
                  <span class="skill-label">Docker</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/nginx" alt="NGINX">
                  <span class="skill-label">NGINX</span>
                </div>
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/ubuntu" alt="Ubuntu">
                  <span class="skill-label">Ubuntu / Linux</span>
                </div>
                <!-- Raspberry Pi -->
                <div class="skill-box">
                  <img src="https://cdn.simpleicons.org/raspberrypi" alt="Raspberry Pi">
                  <span class="skill-label">Raspberry Pi</span>
                </div>
                <!-- Adobe Photoshop -->
                <div class="skill-box">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/Adobe_Photoshop_CC_icon.svg" alt="Photoshop">
                  <span class="skill-label">Photoshop</span>
                </div>
                <!-- Adobe After Effects -->
                <div class="skill-box">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Adobe_After_Effects_CC_icon.svg" alt="After Effects">
                  <span class="skill-label">After Effects</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Projects -->
        <div class="bg-box mt-4">
          <div class="section-header toggle-header">
            <span class="section-icon">💻</span>
            <h2 class="sect-title flex-grow-1 mb-0">Personal Projects</h2>
            <span class="section-toggle-arrow">&#9660;</span>
          </div>
          <div class="section-content">
            <div id="projects-grid" class="projects-grid"></div>
            <div id="projects-error" class="text-center text-muted small mt-3 d-none">No projects loaded.</div>
          </div>
        </div>

        <!-- Contacts -->
        <div class="bg-box mt-4 mb-5">
          <div class="section-header toggle-header">
            <span class="section-icon">📫</span>
            <h2 class="sect-title flex-grow-1 mb-0">Contacts</h2>
            <span class="section-toggle-arrow">&#9660;</span>
          </div>
          <div class="section-content">
            <p>
              <i class="fas fa-envelope me-2"></i>
              <strong>Email:</strong> lorenzodalfabbro.ldf@gmail.com
            </p>
            <p>
              <i class="fab fa-linkedin me-2"></i>
              <strong>LinkedIn:</strong>
              <a href="https://www.linkedin.com/in/lorenzo-dal-fabbro-b4279b21b/" target="_blank">linkedin.com/lorenzodalfabbro</a>
              <em>(work in progress)</em>
            </p>
            <p>
              <i class="fab fa-github me-2"></i>
              <strong>GitHub:</strong>
              <a href="https://github.com/Sapu98" target="_blank">github.com/Sapu98</a>
            </p>
            <p>
              <i class="fab fa-strava me-2"></i>
              <strong>Strava:</strong>
              <a href="https://www.strava.com/athletes/50289715" target="_blank">strava.com/lorenzodalfabbro</a>
            </p>
            <p>
              <i class="fas fa-phone me-2"></i>
              <strong>Phone number:</strong> available upon request via email or message 😊
            </p>
          </div>
        </div>

      </div><!-- /.d-flex -->
    </div><!-- /.content-wrapper -->

    <!-- Script per toggle e rotazione freccia + Projects -->
    <script>
      // Toggle sezioni
      document.querySelectorAll('.toggle-header').forEach(header => {
        header.addEventListener('click', () => {
          const box = header.parentElement;
          box.classList.toggle('section-collapsed');
        });
      });

      // ===== Projects: setta qui la lista dei repo =====
      const repos = [
        "https://github.com/Sapu98/pwnmap",
      ];

      function parseRepo(url) {
        try {
          const u = new URL(url);
          const parts = u.pathname.split('/').filter(Boolean); // ["Sapu98","pwnmap"]
          if (parts.length >= 2) return { owner: parts[0], repo: parts[1] };
        } catch(e) {}
        return null;
      }
r
      async function getDefaultBranch(owner, repo) {
        try {
          const r = await fetch(`https://api.github.com/repos/${owner}/${repo}`);
          if (r.ok) {
            const j = await r.json();
            if (j && j.default_branch) return j.default_branch;
          }
        } catch(e) {}
        return "main";
      }

      async function fetchReadme(owner, repo, branch) {
        const candidates = [
          `https://raw.githubusercontent.com/${owner}/${repo}/${branch}/README.md`,
          `https://raw.githubusercontent.com/${owner}/${repo}/${branch}/Readme.md`,
          `https://raw.githubusercontent.com/${owner}/${repo}/${branch}/README.MD`
        ];
        for (const url of candidates) {
          try {
            const r = await fetch(url);
            if (r.ok) {
              const txt = await r.text();
              return { text: txt, baseRaw: `https://raw.githubusercontent.com/${owner}/${repo}/${branch}/` };
            }
          } catch(e) {}
        }
        if (branch !== "master") {
          return fetchReadme(owner, repo, "master");
        }
        return null;
      }

      function extractFromMarkdown(md, baseRaw) {
        const lines = md.split(/\r?\n/);
        let title = null;
        let titleIndex = -1;
        for (let i = 0; i < lines.length; i++) {
          const m = lines[i].match(/^\s*#\s+(.+?)\s*$/);
          if (m) { title = m[1].trim(); titleIndex = i; break; }
        }

        const imgMatch = md.match(/!\[[^\]]*\]\(([^)]+)\)/);
        let imageUrl = null;
        if (imgMatch) {
          imageUrl = imgMatch[1].trim();
          // risolvi relativo -> assoluto
          if (!/^https?:\/\//i.test(imageUrl)) {
            imageUrl = baseRaw + imageUrl.replace(/^\.?\//, '');
          }
        }

        let description = "";
        if (titleIndex >= 0) {
          for (let i = titleIndex + 1; i < lines.length; i++) {
            const l = lines[i].trim();
            if (!l) continue;
            if (/^#{1,6}\s+/.test(l)) continue;
            if (/^---+$/.test(l)) continue;
            description = l
              .replace(/\*\*(.*?)\*\*/g, '$1')
              .replace(/\*(.*?)\*/g, '$1')
              .replace(/`([^`]+)`/g, '$1')
              .replace(/\[(.*?)\]\((.*?)\)/g, '$1');
            break;
          }
        }

        return { title, imageUrl, description };
      }

      function createProjectCard({ title, imageUrl, description, repoUrl }) {
        const a = document.createElement('a');
        a.className = 'project-card';
        a.href = repoUrl;
        a.target = '_blank';
        a.rel = 'noopener';

        const imgDiv = document.createElement('div');
        imgDiv.className = 'project-thumb';

        const img = document.createElement('img');
        img.loading = 'lazy';
        img.alt = title || 'Project image';
        img.src = imageUrl || `https://opengraph.githubassets.com/1/${parseRepo(repoUrl)?.owner}/${parseRepo(repoUrl)?.repo}`;
        imgDiv.appendChild(img);

        const body = document.createElement('div');
        body.className = 'project-body';

        const h3 = document.createElement('h3');
        h3.className = 'project-title';
        h3.textContent = title || parseRepo(repoUrl)?.repo || 'Untitled';

        const p = document.createElement('p');
        p.className = 'project-desc';
        p.textContent = description || 'No description available.';

        body.appendChild(h3);
        body.appendChild(p);

        a.appendChild(imgDiv);
        a.appendChild(body);
        return a;
      }

      async function loadProjects() {
        const grid = document.getElementById('projects-grid');
        const err = document.getElementById('projects-error');
        if (!grid) return;

        const cards = [];
        for (const url of repos) {
          const pr = parseRepo(url);
          if (!pr) continue;

          const branch = await getDefaultBranch(pr.owner, pr.repo);
          const readme = await fetchReadme(pr.owner, pr.repo, branch);
          let title = null, imageUrl = null, description = null;

          if (readme) {
            const ext = extractFromMarkdown(readme.text, readme.baseRaw);
            title = ext.title;
            imageUrl = ext.imageUrl;
            description = ext.description;
          }

          cards.push(createProjectCard({
            title, imageUrl, description, repoUrl: url
          }));
        }

        if (cards.length) {
          cards.forEach(c => grid.appendChild(c));
          err && err.classList.add('d-none');
        } else {
          err && err.classList.remove('d-none');
        }
      }

      // Avvio al load
      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadProjects);
      } else {
        loadProjects();
      }
    </script>
  </body>
</html>
