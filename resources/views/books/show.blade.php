<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Livro - Painel de Livros</title>
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

        .navbar-library .navbar-toggler {
            border-color: var(--line);
        }

        .navbar-library .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%231c1917' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .page-kicker {
            color: var(--accent);
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .page-title {
            font-weight: 600;
            letter-spacing: -0.03em;
        }

        .text-soft {
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

        .btn-ghost {
            border: 1px solid var(--line);
            color: var(--ink);
            background: #fff;
            border-radius: 999px;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.55rem 1.1rem;
        }

        .btn-ghost:hover {
            background: var(--paper);
            color: var(--ink);
            border-color: var(--line);
        }

        .btn-ghost-danger {
            color: #9b3a2f;
        }

        .btn-ghost-danger:hover {
            background: #f8ece9;
            color: #7a2c24;
        }

        .back-link {
            color: var(--muted);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .back-link:hover {
            color: var(--accent);
        }

        .detail-card {
            border: 1px solid var(--line);
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
        }

        .book-cover {
            width: 100%;
            max-height: 420px;
            object-fit: cover;
            border-radius: 0.85rem;
        }

        .badge-soft {
            background: rgba(47, 93, 80, 0.1);
            color: var(--accent);
            font-weight: 600;
        }

        .info-label {
            color: var(--muted);
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
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
            <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ route('home') }}">
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('books.index') }}">Livros</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <a href="{{ route('books.index') }}" class="back-link d-inline-flex align-items-center gap-2 mb-4">
                        <i class="bi bi-arrow-left"></i>
                        Voltar para livros
                    </a>

                    <article class="detail-card">
                        <div class="p-4 p-md-5">
                            <div class="row g-4 g-lg-5">
                                <div class="col-md-4">
                                    <img
                                        src="https://placehold.co/300x450/c46a3a/ffffff?text=Capa+do+Livro"
                                        alt="Capa de O Grande Gatsby"
                                        class="book-cover"
                                    >
                                </div>
                                <div class="col-md-8 d-flex flex-column gap-3">
                                    <p class="page-kicker mb-0">Ficção</p>
                                    <div>
                                        <h1 class="page-title h2 mb-2">O Grande Gatsby</h1>
                                        <p class="lead text-soft mb-0">por F. Scott Fitzgerald</p>
                                    </div>
                                    <div class="d-flex flex-wrap gap-4">
                                        <div>
                                            <p class="info-label mb-1">Gênero</p>
                                            <span class="badge rounded-pill badge-soft">Ficção</span>
                                        </div>
                                        <div>
                                            <p class="info-label mb-1">Publicado</p>
                                            <p class="mb-0">10 de abril de 1925</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mt-1">
                                        <a href="book-create.html" class="btn btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h2 class="h5 fw-semibold mb-3">Sobre este livro</h2>
                                    <p class="text-soft mb-3">
                                        O Grande Gatsby é um romance de 1925 do escritor americano F. Scott Fitzgerald. Situado na Era do Jazz em Long Island, o romance retrata as interações do narrador Nick Carraway com o misterioso milionário Jay Gatsby e a obsessão de Gatsby em se reunir com seu antigo amor, Daisy Buchanan.
                                    </p>
                                    <p class="text-soft mb-0">
                                        A história é amplamente considerada uma das maiores obras da literatura americana, explorando temas de decadência, idealismo, resistência à mudança, agitação social e excesso, criando um retrato dos Anos Loucos que foi chamado de "conto de advertência" sobre o Sonho Americano.
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4 pt-4 d-flex flex-wrap gap-2" style="border-top: 1px solid var(--line);">
                                <a href="{{ route('books.index') }}" class="btn btn-accent">Voltar para a lista</a>
                                <a href="book-create.html" class="btn btn-ghost">Editar livro</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4">
        <div class="container d-flex justify-content-between small">
            <span>Painel de Livros</span>
            <span>Coleção pessoal</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
