<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Livros - Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --paper: #f6f3ee;
            --ink: #1c1917;
            --muted: #6b645c;
            --line: #e6e0d6;
            --accent: #2f5d50;
            --accent-dark: #24483e;
        }

        body {
            background: var(--paper);
            color: var(--ink);
        }

        .navbar-library {
            background: rgba(246, 243, 238, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--line);
        }

        .navbar-library .navbar-brand,
        .navbar-library .nav-link {
            color: var(--ink);
        }

        .navbar-library .nav-link.active {
            font-weight: 600;
        }

        .brand-mark {
            width: 2rem;
            height: 2rem;
            border-radius: 0.5rem;
            background: var(--accent);
            color: var(--paper);
        }

        .hero {
            padding: 5rem 0 4rem;
        }

        .hero-kicker {
            color: var(--accent);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .hero h1 {
            font-weight: 600;
            letter-spacing: -0.03em;
        }

        .navbar-library .navbar-toggler {
            border-color: var(--line);
        }

        .navbar-library .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%231c1917' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .hero p.lead {
            color: var(--muted);
        }

        .btn-accent {
            background: var(--accent);
            color: #fff;
            border: 0;
            border-radius: 999px;
            padding: 0.7rem 1.4rem;
            font-weight: 600;
        }

        .btn-accent:hover {
            background: var(--accent-dark);
            color: #fff;
        }

        .cover-stack {
            position: relative;
            min-height: 18rem;
        }

        .cover-card {
            position: absolute;
            width: 9.5rem;
            border-radius: 1rem;
            padding: 1.15rem;
            box-shadow: 0 18px 40px rgba(28, 25, 23, 0.12);
        }

        .cover-one { background: #c46a3a; color: #fff; top: 2rem; right: 6.5rem; transform: rotate(-8deg); }
        .cover-two { background: var(--accent); color: #fff; top: 0; right: 0; transform: rotate(6deg); }
        .cover-three { background: #fff; border: 1px solid var(--line); bottom: 0; right: 2.5rem; }

        .section-recent {
            border-top: 1px solid var(--line);
            padding: 4rem 0;
        }

        .book-card {
            height: 100%;
            border: 1px solid var(--line);
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
            transition: box-shadow 0.2s ease;
        }

        .book-card:hover {
            box-shadow: 0 10px 24px rgba(28, 25, 23, 0.08);
        }

        .book-cover {
            height: 180px;
            object-fit: cover;
        }

        .book-card .card-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
        }

        .text-soft {
            color: var(--muted);
        }

        footer {
            border-top: 1px solid var(--line);
            color: var(--muted);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-library sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="index.html">
                <span class="brand-mark d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>
                </span>
                Painel de Livros
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="books.html">Livros</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <div class="row align-items-end gy-5">
                <div class="col-lg-7">
                    <p class="hero-kicker mb-3">Sua coleção, em um só lugar</p>
                    <h1 class="display-5 mb-3">Organize sua biblioteca com clareza.</h1>
                    <p class="lead mb-4">Guarde títulos, autores e edições sem ruído. Uma vitrine simples para acompanhar o que você leu, o que está lendo e o que ainda quer encontrar.</p>
                    <a href="books.html" class="btn btn-accent">Navegar pela coleção</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cover-stack">
                        <div class="cover-card cover-one">
                            <small class="text-uppercase">Romance</small>
                            <p class="fw-semibold mt-4 mb-0">O Grande Gatsby</p>
                        </div>
                        <div class="cover-card cover-two">
                            <small class="text-uppercase">Distopia</small>
                            <p class="fw-semibold mt-4 mb-0">1984</p>
                        </div>
                        <div class="cover-card cover-three">
                            <small class="text-uppercase text-soft">Clássico</small>
                            <p class="fw-semibold mt-4 mb-0">Campo de Centeio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-recent">
        <div class="container">
            <div class="mb-4">
                <h2 class="h3 fw-semibold mb-1">Livros adicionados recentemente</h2>
                <p class="text-soft mb-0">Os últimos volumes registrados na sua estante.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card book-card">
                        <img src="https://placehold.co/400x300/c46a3a/ffffff?text=Capa+do+Livro" alt="Capa de O Grande Gatsby" class="card-img-top book-cover">
                        <div class="card-body">
                            <h5 class="card-title">O Grande Gatsby</h5>
                            <p class="text-soft mb-2">F. Scott Fitzgerald</p>
                            <p class="small text-soft mb-3">Publicado: 1925</p>
                            <a href="book-view.html" class="card-link">Ver detalhes →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card book-card">
                        <img src="https://placehold.co/400x300/1c1917/ffffff?text=Capa+do+Livro" alt="Capa de O Apanhador no Campo de Centeio" class="card-img-top book-cover">
                        <div class="card-body">
                            <h5 class="card-title">O Apanhador no Campo de Centeio</h5>
                            <p class="text-soft mb-2">J. D. Salinger</p>
                            <p class="small text-soft mb-3">Publicado: 1951</p>
                            <a href="book-view.html" class="card-link">Ver detalhes →</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card book-card">
                        <img src="https://placehold.co/400x300/2f5d50/ffffff?text=Capa+do+Livro" alt="Capa de 1984" class="card-img-top book-cover">
                        <div class="card-body">
                            <h5 class="card-title">1984</h5>
                            <p class="text-soft mb-2">George Orwell</p>
                            <p class="small text-soft mb-3">Publicado: 1949</p>
                            <a href="book-view.html" class="card-link">Ver detalhes →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4">
        <div class="container d-flex justify-content-between small">
            <span>Painel de Livros</span>
            <span>Coleção pessoal</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
