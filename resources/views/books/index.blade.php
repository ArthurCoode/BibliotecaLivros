<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros - Painel de Livros</title>
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

        .table-card {
            border: 1px solid var(--line);
            border-radius: 1rem;
            overflow: hidden;
            background: #fff;
        }

        .table-library {
            --bs-table-bg: transparent;
            --bs-table-hover-bg: #faf8f4;
            margin-bottom: 0;
        }

        .table-library thead th {
            background: #faf8f4;
            color: var(--muted);
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            border-bottom-color: var(--line);
            padding: 0.9rem 1.1rem;
        }

        .table-library td {
            border-color: var(--line);
            padding: 1rem 1.1rem;
            vertical-align: middle;
        }

        .badge-soft {
            background: rgba(47, 93, 80, 0.1);
            color: var(--accent);
            font-weight: 600;
        }

        .btn-ghost {
            border: 1px solid var(--line);
            color: var(--ink);
            background: #fff;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.3rem 0.8rem;
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

        .table-footer {
            border-top: 1px solid var(--line);
            background: #faf8f4;
        }

        .pagination .page-link {
            color: var(--ink);
            border-color: var(--line);
            background: #fff;
        }

        .pagination .page-item.active .page-link {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            color: var(--muted);
            background: #fff;
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
            <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ url('/') }}">
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/livres') }}">Livros</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
                <div>
                    <p class="page-kicker mb-2">Sua estante</p>
                    <h1 class="page-title h2 mb-1">Coleção de livros</h1>
                    <p class="text-soft mb-0">Gerencie títulos, autores e edições em um só lugar.</p>
                </div>
                <a href="book-create.html" class="btn btn-accent">
                    <i class="bi bi-plus-lg me-1"></i>
                    Adicionar novo livro
                </a>
            </div>

            <div class="table-card">
                <div class="table-responsive">
                    <table class="table table-hover table-library align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Livro</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Gênero</th>
                                <th scope="col">Publicação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="fw-semibold">O Grande Gatsby</div>
                                </td>
                                <td class="text-soft">F. Scott Fitzgerald</td>
                                <td><span class="badge rounded-pill badge-soft">Ficção</span></td>
                                <td class="text-soft">1925</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="book-view.html" class="btn btn-sm btn-ghost">Ver</a>
                                        <a href="book-create.html" class="btn btn-sm btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-sm btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-semibold">A Sangue Frio</div>
                                </td>
                                <td class="text-soft">Harper Lee</td>
                                <td><span class="badge rounded-pill badge-soft">Ficção</span></td>
                                <td class="text-soft">1960</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="book-view.html" class="btn btn-sm btn-ghost">Ver</a>
                                        <a href="book-create.html" class="btn btn-sm btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-sm btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-semibold">1984</div>
                                </td>
                                <td class="text-soft">George Orwell</td>
                                <td><span class="badge rounded-pill badge-soft">Distopia</span></td>
                                <td class="text-soft">1949</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="book-view.html" class="btn btn-sm btn-ghost">Ver</a>
                                        <a href="book-create.html" class="btn btn-sm btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-sm btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-semibold">Harry Potter e a Pedra Filosofal</div>
                                </td>
                                <td class="text-soft">J.K. Rowling</td>
                                <td><span class="badge rounded-pill badge-soft">Fantasia</span></td>
                                <td class="text-soft">1997</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="book-view.html" class="btn btn-sm btn-ghost">Ver</a>
                                        <a href="book-create.html" class="btn btn-sm btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-sm btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="fw-semibold">Orgulho e Preconceito</div>
                                </td>
                                <td class="text-soft">Jane Austen</td>
                                <td><span class="badge rounded-pill badge-soft">Romance</span></td>
                                <td class="text-soft">1813</td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="book-view.html" class="btn btn-sm btn-ghost">Ver</a>
                                        <a href="book-create.html" class="btn btn-sm btn-ghost">Editar</a>
                                        <button type="button" class="btn btn-sm btn-ghost btn-ghost-danger">Excluir</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-footer d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 px-3 py-3">
                    <span class="text-soft small">Mostrando 1 a 5 de 24 resultados</span>
                    <nav aria-label="Paginação da coleção">
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a></li>
                            <li class="page-item active"><a class="page-link" href="#" aria-current="page">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul>
                    </nav>
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
