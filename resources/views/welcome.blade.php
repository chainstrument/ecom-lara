<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Ecom Lara') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer base {
                    *, *::before, *::after { box-sizing:border-box; }
                    html { line-height:1.5; -webkit-text-size-adjust:100%; }
                    body { margin:0; font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
                    img, picture, video, canvas, svg { display:block; max-width:100%; }
                    input, button, textarea, select { font:inherit; }
                }
                @layer utilities {
                    :root { color-scheme: light; }
                    .bg-slate-50 { background-color: #f8fafc; }
                    .bg-white { background-color: #ffffff; }
                    .bg-slate-900 { background-color: #0f172a; }
                    .bg-slate-800 { background-color: #1e293b; }
                    .bg-slate-700 { background-color: #334155; }
                    .bg-slate-100 { background-color: #f1f5f9; }
                    .text-slate-900 { color: #0f172a; }
                    .text-slate-700 { color: #334155; }
                    .text-slate-600 { color: #475569; }
                    .text-slate-400 { color: #94a3b8; }
                    .text-white { color: #ffffff; }
                    .border { border-width: 1px; border-style: solid; }
                    .border-slate-200 { border-color: #e2e8f0; }
                    .border-slate-300 { border-color: #cbd5e1; }
                    .rounded-full { border-radius: 9999px; }
                    .rounded-2xl { border-radius: 1rem; }
                    .rounded-xl { border-radius: 0.75rem; }
                    .rounded-lg { border-radius: 0.5rem; }
                    .shadow-xl { box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.1), 0 10px 10px -5px rgba(15, 23, 42, 0.04); }
                    .shadow-lg { box-shadow: 0 10px 15px -3px rgba(15, 23, 42, 0.1), 0 4px 6px -2px rgba(15, 23, 42, 0.05); }
                    .shadow-md { box-shadow: 0 4px 6px -1px rgba(15, 23, 42, 0.1), 0 2px 4px -2px rgba(15, 23, 42, 0.05); }
                    .shadow { box-shadow: 0 1px 2px 0 rgba(15, 23, 42, 0.05); }
                    .max-w-6xl { max-width: 72rem; }
                    .max-w-5xl { max-width: 64rem; }
                    .max-w-2xl { max-width: 42rem; }
                    .max-w-xl { max-width: 36rem; }
                    .mx-auto { margin-left: auto; margin-right: auto; }
                    .my-0 { margin-top: 0; margin-bottom: 0; }
                    .mb-1 { margin-bottom: 0.25rem; }
                    .mb-2 { margin-bottom: 0.5rem; }
                    .mb-4 { margin-bottom: 1rem; }
                    .mb-6 { margin-bottom: 1.5rem; }
                    .mb-10 { margin-bottom: 2.5rem; }
                    .mt-4 { margin-top: 1rem; }
                    .mt-6 { margin-top: 1.5rem; }
                    .mt-8 { margin-top: 2rem; }
                    .mt-10 { margin-top: 2.5rem; }
                    .mt-12 { margin-top: 3rem; }
                    .pt-6 { padding-top: 1.5rem; }
                    .pt-8 { padding-top: 2rem; }
                    .pb-6 { padding-bottom: 1.5rem; }
                    .pb-10 { padding-bottom: 2.5rem; }
                    .px-4 { padding-left: 1rem; padding-right: 1rem; }
                    .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
                    .px-8 { padding-left: 2rem; padding-right: 2rem; }
                    .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
                    .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
                    .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
                    .py-10 { padding-top: 2.5rem; padding-bottom: 2.5rem; }
                    .text-center { text-align: center; }
                    .text-left { text-align: left; }
                    .text-sm { font-size: 0.875rem; line-height: 1.25rem; }
                    .text-base { font-size: 1rem; line-height: 1.5rem; }
                    .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
                    .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
                    .text-2xl { font-size: 1.5rem; line-height: 2rem; }
                    .text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
                    .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
                    .text-5xl { font-size: 3rem; line-height: 1; }
                    .font-semibold { font-weight: 600; }
                    .font-bold { font-weight: 700; }
                    .font-medium { font-weight: 500; }
                    .leading-tight { line-height: 1.25; }
                    .leading-relaxed { line-height: 1.75; }
                    .tracking-tight { letter-spacing: -0.025em; }
                    .uppercase { text-transform: uppercase; }
                    .inline-flex { display: inline-flex; }
                    .flex { display: flex; }
                    .grid { display: grid; }
                    .items-center { align-items: center; }
                    .justify-between { justify-content: space-between; }
                    .justify-center { justify-content: center; }
                    .gap-4 { gap: 1rem; }
                    .gap-6 { gap: 1.5rem; }
                    .gap-8 { gap: 2rem; }
                    .gap-10 { gap: 2.5rem; }
                    .space-y-6 > :not(template) ~ :not(template) { margin-top: 1.5rem; }
                    .space-y-10 > :not(template) ~ :not(template) { margin-top: 2.5rem; }
                    .w-full { width: 100%; }
                    .min-h-screen { min-height: 100vh; }
                    .max-w-full { max-width: 100%; }
                    .shadow-inner { box-shadow: inset 0 2px 4px rgba(15,23,42,0.06); }
                    .tracking-wide { letter-spacing: 0.025em; }
                    .rounded-xl { border-radius: 0.75rem; }
                    .rounded-3xl { border-radius: 1.5rem; }
                    .border-slate-200 { border-color: #e2e8f0; }
                    .transition { transition: all 0.2s ease-in-out; }
                    .hover\:bg-slate-900:hover { background-color: #0f172a; }
                    .hover\:text-white:hover { color: #ffffff; }
                    .hover\:bg-slate-100:hover { background-color: #f1f5f9; }
                    .text-slate-50 { color: #f8fafc; }
                    .text-slate-300 { color: #cbd5e1; }
                }
                @media (min-width: 768px) {
                    .md\:flex { display: flex; }
                    .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
                    .md\:w-auto { width: auto; }
                    .md\:text-left { text-align: left; }
                    .md\:px-8 { padding-left: 2rem; padding-right: 2rem; }
                    .md\:py-10 { padding-top: 2.5rem; padding-bottom: 2.5rem; }
                    .md\:justify-start { justify-content: flex-start; }
                    .md\:gap-8 { gap: 2rem; }
                    .md\:space-y-0 > :not(template) ~ :not(template) { margin-top: 0; }
                }
            </style>
        @endif
    </head>
    <body class="bg-slate-50 text-slate-900 antialiased">
        <div class="min-h-screen">
            <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
                <div class="mx-auto max-w-6xl px-6 py-4 flex items-center justify-between gap-6">
                    <a href="#hero" class="font-semibold text-xl tracking-tight text-slate-900">Ecom Lara</a>
                    <nav class="hidden md:flex items-center gap-8 text-sm text-slate-600">
                        <a href="#hero" class="transition hover:text-slate-900">Accueil</a>
                        <a href="#features" class="transition hover:text-slate-900">Fonctionnalités</a>
                        <a href="#about" class="transition hover:text-slate-900">À propos</a>
                    </nav>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700">Connexion</a>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-6xl px-6 py-12 space-y-24 md:px-8">
                <section id="hero" class="grid gap-10 md:grid-cols-2 md:items-center">
                    <div class="space-y-6 md:space-y-8">
                        <span class="inline-flex items-center rounded-full bg-slate-100 px-4 py-2 text-sm font-medium text-slate-700">Bienvenue sur votre espace e-commerce</span>
                        <div class="space-y-4">
                            <h1 class="text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl">Organise ta vie simplement.</h1>
                            <p class="max-w-2xl text-base leading-relaxed text-slate-600">Une page d’accueil claire et moderne pour présenter votre projet, attirer des clients et leur donner envie de commencer rapidement.</p>
                        </div>

                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">Commencer</a>
                            <a href="#features" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Découvrir</a>
                        </div>
                    </div>

                    <div class="relative overflow-hidden rounded-3xl bg-slate-900 p-6 shadow-xl sm:p-8">
                        <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-slate-700 to-transparent opacity-60"></div>
                        <div class="relative grid h-full gap-6 rounded-3xl p-6 bg-slate-950/95 text-slate-50">
                            <div class="rounded-3xl bg-slate-800/80 p-6 shadow-inner">
                                <div class="mb-4 rounded-3xl bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900 p-10"></div>
                                <div class="space-y-3 text-sm text-slate-300">
                                    <p class="font-semibold text-slate-100">Illustration produit</p>
                                    <p>Une mise en avant simple et responsive pour montrer votre concept.</p>
                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div class="rounded-3xl bg-white/5 p-4 text-slate-100">
                                    <p class="text-sm text-slate-400">Statut</p>
                                    <p class="mt-2 text-lg font-semibold">Lancé</p>
                                </div>
                                <div class="rounded-3xl bg-white/5 p-4 text-slate-100">
                                    <p class="text-sm text-slate-400">Utilisateurs</p>
                                    <p class="mt-2 text-lg font-semibold">Prêt pour votre audience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="features" class="space-y-8">
                    <div class="max-w-2xl space-y-4 text-center mx-auto">
                        <p class="text-sm uppercase tracking-wide text-slate-500">Fonctionnalités</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Tout ce dont vous avez besoin pour démarrer rapidement</h2>
                        <p class="text-base leading-relaxed text-slate-600">Une page d’accueil structurée et responsive pour présenter votre application, ses avantages et son identité.</p>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-3">
                        <article class="rounded-3xl border border-slate-200 bg-white p-6 text-slate-900 shadow-sm">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-2xl">🧩</div>
                            <h3 class="mb-2 text-xl font-semibold">Simple à utiliser</h3>
                            <p class="text-sm leading-relaxed text-slate-600">Une interface claire, des sections faciles à lire et des éléments cohérents sur mobile comme sur desktop.</p>
                        </article>

                        <article class="rounded-3xl border border-slate-200 bg-white p-6 text-slate-900 shadow-sm">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-2xl">⚡</div>
                            <h3 class="mb-2 text-xl font-semibold">Rapide</h3>
                            <p class="text-sm leading-relaxed text-slate-600">Une page optimisée avec un design épuré pour une lecture rapide et un bon confort visuel.</p>
                        </article>

                        <article class="rounded-3xl border border-slate-200 bg-white p-6 text-slate-900 shadow-sm">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-2xl">🔄</div>
                            <h3 class="mb-2 text-xl font-semibold">Synchronisé</h3>
                            <p class="text-sm leading-relaxed text-slate-600">Un style cohérent entre la navigation, les sections et les actions pour une expérience fluide.</p>
                        </article>
                    </div>
                </section>

                <section id="about" class="rounded-3xl bg-slate-900 p-10 text-slate-50 shadow-xl">
                    <div class="max-w-3xl space-y-6 text-center mx-auto">
                        <p class="uppercase tracking-wide text-slate-400">À propos</p>
                        <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Un point de départ moderne pour votre application</h2>
                        <p class="text-base leading-relaxed text-slate-300">Cette page d’accueil apporte une première impression soignée pour les visiteurs. Elle met en avant votre projet avec une présentation professionnelle, un message clair et des appels à l’action visibles.</p>
                    </div>
                </section>
            </main>

            <footer class="border-t border-slate-200 bg-white/90 py-8">
                <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 text-sm text-slate-600 md:flex-row md:items-center md:justify-between md:px-8">
                    <p>© {{ date('Y') }} Ecom Lara. Tous droits réservés.</p>
                    <p>GitHub : <a href="https://github.com/chainstrument/ecom-lara" class="font-medium text-slate-900 transition hover:text-slate-700">chainstrument/ecom-lara</a> · Version 1.0.0</p>
                </div>
            </footer>
        </div>
    </body>
</html>
