<!DOCTYPE html>
<html lang="sv" x-data="{ dark: true }" :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valon Ahmeti – Fullstack Developer</title>

    @vite('resources/css/app.css')
    <script src="https://unpkg.com/alpinejs" defer></script>
    <style>[x-cloak]{display:none!important}</style>
</head>
<body class="bg-white text-slate-900 dark:bg-[#020014] dark:text-slate-100 transition-colors duration-300">

    {{-- NAVBAR --}}
    <header class="border-b border-slate-200/70 dark:border-slate-800/80 bg-white/90 dark:bg-[#020014]/90 backdrop-blur">
        <div class="max-w-6xl mx-auto px-6 md:px-8 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="h-9 w-9 rounded-full overflow-hidden border border-slate-300 dark:border-slate-700 bg-slate-900">
                    <div class="h-full w-full bg-linear-to-br from-fuchsia-500 via-sky-500 to-emerald-400"></div>
                </div>
                <div>
                    <p class="text-sm font-semibold tracking-wide">Valon Ahmeti</p>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <nav aria-label="Huvudnavigation" class="hidden md:flex gap-6 text-[11px] font-medium tracking-[0.2em] uppercase text-slate-500 dark:text-slate-300">
                    <a href="#hero" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">Start</a>
                    <a href="#about" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">Introduktion</a>
                    <a href="#projects" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">Projekt</a>
                    <a href="#skills" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">Kunskaper</a>
                    <a href="#contact" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">Kontakt</a>
                </nav>

                <button
                    @click="dark = !dark"
                    class="px-4 py-2 rounded-full border border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-900 text-xs font-medium text-slate-700 dark:text-slate-200 flex items-center gap-2"
                >
                    <span x-show="!dark" x-cloak>🌙</span>
                    <span x-show="dark" x-cloak>☀️</span>
                    <span x-show="!dark" x-cloak>Dark mode</span>
                    <span x-show="dark" x-cloak>Light mode</span>
                </button>
            </div>
        </div>
    </header>

    <main>

        {{-- HERO – LetterGlitch som bakgrund, clean mitten --}}
        <section id="hero" class="relative min-h-[90vh] py-24 md:py-28 flex items-center justify-center overflow-hidden">

            {{-- ANIMATION täcker hela sektionen (både light & dark) --}}
            <div class="absolute inset-0 -z-40">
                <div class="relative w-full h-full">
                    <canvas class="letter-glitch w-full h-full block"></canvas>

                    {{-- vignette så mitten blir mer läsbar --}}
                    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle,rgba(0,0,0,0.92)_0%,rgba(0,0,0,0.82)_30%,rgba(0,0,0,0.35)_60%,transparent_80%)]"></div>
                </div>
            </div>

            {{-- innehållet i mitten --}}
            <div class="relative max-w-3xl mx-auto px-6 text-center">
                <h1 class="text-[2.6rem] md:text-6xl font-semibold tracking-tight text-white leading-tight">
                    <span class="block text-transparent bg-clip-text bg-linear-to-r from-fuchsia-500 via-sky-400 to-emerald-400">
                        FULLSTACK DEVELOPER
                    </span>
                    <span class="block mt-4 text-2xl md:text-4xl font-medium text-white">
                        Valon Ahmeti
                    </span>
                </h1>

                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#projects"
                       class="inline-flex items-center gap-3 px-8 py-3 rounded-full bg-linear-to-r from-fuchsia-500 to-sky-500 text-white text-[11px] tracking-[0.3em] uppercase shadow-lg shadow-fuchsia-500/40 hover:shadow-fuchsia-400/60">
                        Se projekt
                    </a>
                    <a href="#about"
                       class="inline-flex items-center gap-3 px-8 py-3 rounded-full border border-slate-300/80 dark:border-slate-600 bg-white/85 dark:bg-white/5 text-[11px] tracking-[0.3em] uppercase text-slate-800 dark:text-slate-100 hover:border-fuchsia-500/70">
                        Läs mer om mig
                    </a>
                </div>
            </div>
        </section>

        {{-- INTRODUKTION --}}
        <section id="about" class="bg-white dark:bg-slate-950 py-24 md:py-28">
            <div class="max-w-6xl mx-auto px-6">

                {{-- Sektionens rubrik – “Introduktion” som huvudrubrik --}}
                <div class="flex flex-col items-center mb-16">
                    <h2 class="text-sm md:text-base tracking-[0.45em] uppercase text-slate-600 dark:text-slate-300">
                        Introduktion
                    </h2>
                    <div class="mt-4 h-px w-28 bg-linear-to-r from-fuchsia-500 via-sky-500 to-emerald-400 rounded-full"></div>
                </div>

                <div class="grid gap-14 md:grid-cols-[1.1fr,1.7fr] items-start">
                    {{-- Kort profilruta --}}
                    <div class="text-xl leading-relaxed text-slate-800 dark:text-slate-100">
                        Fullstackutvecklare utbildad vid Lunds Tekniska Högskola, med fokus på moderna webbapplikationer.
                        Van vid att arbeta genom hela kedjan – från idé och krav till driftsatt lösning och vidareutveckling –
                        med stor vikt vid struktur, kvalitet och ett nära samarbete med användare och beställare.
                    </div>

                    {{-- Mer CV-inriktad text --}}
                    <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        <p>
                            Mitt namn är <span class="font-semibold">Valon Ahmeti</span> och jag har ett starkt tekniskt intresse
                            och en tydlig problemlösningsdriv. Studierna vid Lunds Tekniska Högskola har gett mig en stabil grund
                            inom systemutveckling, samtidigt som jag hela tiden strävar efter att utvecklas och hitta effektiva,
                            hållbara lösningar.
                        </p>

                        <p>
                            Efter gymnasiet började jag arbeta som maskinoperatör, ett arbete jag hade under flera år.
                            Den erfarenheten har gett mig struktur, noggrannhet och en stark ansvarskänsla – egenskaper som är
                            direkt överförbara till utvecklingsarbetet. Det var också under den perioden som intresset för
                            programmering växte sig starkare och jag bestämde mig för att satsa fullt ut på utvecklaryrket.
                        </p>

                        <p>
                            Som person är jag social, nyfiken och samarbetsinriktad. Jag trivs i team där jag både kan bidra med
                            mina kunskaper och samtidigt lära mig av andra. Jag uppskattar tydlig kommunikation, gillar att ställa
                            frågor och tycker om att ha kontakt med beställare och användare för att förstå behoven på djupet.
                        </p>

                        <p>
                            Jag har tidigare arbetat med egna kunder, bland annat genom att ta fram ett skräddarsytt
                            bokningssystem åt en frisörsalong med funktioner för både kunder och administratörer. I stället för
                            att använda färdiga komponenter valde jag att bygga en egen lösning, vilket gav bra insikt i hela
                            processen – från kravinsamling och design till implementation, testning och löpande förbättringar.
                        </p>

                        {{-- Kunskaper – mer “pop” men samma känsla --}}
                        @php
                            $stack = [
                                'React', 'TypeScript', 'JavaScript',
                                'Next.js', 'Node.js',

                                'Java', 'Spring Boot', 'Spring Security', 'Spring Framework',

                                'REST API',
                                'HTML', 'CSS', 'Tailwind',

                                'SQL', 'PostgreSQL', 'MySQL', 'MongoDB', 'Firebase',

                                'CI/CD', 'Git', 'GitHub', 'Playwright'
                            ];
                        @endphp

                        <div class="pt-6 mt-8 border-t border-slate-200 dark:border-slate-700">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full
                                        bg-slate-100/80 dark:bg-slate-900/70
                                        border border-slate-200 dark:border-slate-700 mb-4">
                                <span class="h-1.5 w-1.5 rounded-full bg-linear-to-r from-fuchsia-500 via-sky-500 to-emerald-400"></span>
                                <p class="text-[11px] md:text-xs tracking-[0.28em] uppercase font-semibold text-slate-600 dark:text-slate-200">
                                    Tekniker &amp; verktyg
                                </p>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                @foreach($stack as $item)
                                    <span
                                        class="inline-flex items-center px-3 py-1 rounded-full text-[11px] uppercase tracking-[0.18em]
                                               bg-white/90 text-slate-800 border border-slate-200 shadow-sm
                                               dark:bg-slate-900/90 dark:text-slate-100 dark:border-slate-700 dark:shadow-black/40
                                               hover:-translate-y-px hover:shadow-md hover:shadow-fuchsia-500/30
                                               transition-transform duration-150"
                                    >
                                        {{ $item }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROJEKT --}}
        <section id="projects" class="bg-slate-50 dark:bg-slate-950/90 py-24 md:py-28">
            <div class="max-w-6xl mx-auto px-6">
                <div class="flex flex-col items-center mb-16">
                    <p class="text-xs tracking-[0.35em] uppercase text-slate-500 dark:text-slate-400">
                        Utvalda projekt
                    </p>
                    <div class="mt-4 h-px w-20 bg-slate-300 dark:bg-slate-700"></div>
                </div>

                <div class="grid gap-10 lg:grid-cols-3">
                    {{-- Frisörsalong --}}
                    <article class="bg-white dark:bg-[#05081a] rounded-2xl shadow-sm shadow-slate-200/70 dark:shadow-black/50 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-xl hover:shadow-fuchsia-500/25 transition">
                        <div class="aspect-video bg-linear-to-tr from-pink-500 via-rose-500 to-amber-300"></div>
                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xs font-semibold tracking-[0.25em] uppercase text-slate-500 dark:text-slate-400">
                                Frisörsalong · Bokningssystem
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                Skräddarsytt bokningssystem med kalender, tjänster, priskategorier, adminpanel och kundvy –
                                byggt som en modern webbapp med fokus på enkel, mobilanpassad användarupplevelse.
                            </p>
                            <p class="mt-1 text-[11px] uppercase tracking-[0.18em] text-fuchsia-600 dark:text-fuchsia-400">
                                React · Node · PostgreSQL
                            </p>
                        </div>
                    </article>

                    {{-- Intern webbapp --}}
                    <article class="bg-white dark:bg-[#05081a] rounded-2xl shadow-sm shadow-slate-200/70 dark:shadow-black/50 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-xl hover:shadow-sky-500/25 transition">
                        <div class="aspect-video bg-linear-to-tr from-sky-500 via-indigo-500 to-purple-500"></div>
                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xs font-semibold tracking-[0.25em] uppercase text-slate-500 dark:text-slate-400">
                                Intern webbapplikation
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                Adminportal för interna processer: användare, roller, loggning, rapporter och statistik.
                                Säkerhet med Spring Security och JWT, REST-API mot React-klient.
                            </p>
                            <p class="mt-1 text-[11px] uppercase tracking-[0.18em] text-sky-600 dark:text-sky-400">
                                Java · Spring Boot · React
                            </p>
                        </div>
                    </article>

                    {{-- Test & CI/CD --}}
                    <article class="bg-white dark:bg-[#05081a] rounded-2xl shadow-sm shadow-slate-200/70 dark:shadow-black/50 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-400/25 transition">
                        <div class="aspect-video bg-linear-to-tr from-emerald-500 via-lime-400 to-cyan-400"></div>
                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xs font-semibold tracking-[0.25em] uppercase text-slate-500 dark:text-slate-400">
                                Testautomation &amp; CI/CD
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                Erfarenhet av Playwright, automatiserade tester och CI/CD-pipelines. Fokus på kvalitet,
                                snabb feedback och stabila releaser.
                            </p>
                            <p class="mt-1 text-[11px] uppercase tracking-[0.18em] text-emerald-600 dark:text-emerald-400">
                                Playwright · CI/CD 
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- KUNSKAPER --}}
        <section id="skills" class="py-28 bg-slate-50 dark:bg-slate-950">
            <div class="relative max-w-6xl mx-auto px-6">
                <div class="flex flex-col items-center mb-12">
                    <h2 class="text-sm md:text-base tracking-[0.45em] uppercase text-slate-600 dark:text-slate-300">
                        Kunskaper
                    </h2>
                    <div class="mt-4 h-px w-20 bg-slate-300 dark:bg-slate-700"></div>
                </div>

                {{-- Light layout – övre tre kort --}}
                <div class="grid gap-12 md:grid-cols-3 dark:hidden">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🎨
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">Frontend</h3>
                        <p class="text-sm text-slate-600">
                            React.js, TypeScript, JavaScript, Next.js, HTML, CSS, Tailwind, AngularJS.
                            Fokus på responsiva och användarvänliga gränssnitt.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            ⚙️
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">Backend &amp; API</h3>
                        <p class="text-sm text-slate-600">
                            Java, Spring Boot, Spring Security, Spring Framework, Node.js, REST-API:er, JSON,
                            strukturerad systemutveckling och testning.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🗄️
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">Databaser</h3>
                        <p class="text-sm text-slate-600">
                            SQL, MySQL, PostgreSQL, MongoDB, Firebase, GitHub.
                            Stabil datahantering och strukturerade datamodeller.
                        </p>
                    </div>
                </div>

                {{-- Light layout – nedersta två kort, centrerade --}}
                <div class="mt-12 grid gap-12 md:grid-cols-2 max-w-3xl mx-auto dark:hidden">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            📋
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            Metodik &amp; arbetssätt
                        </h3>
                        <p class="text-sm text-slate-600">
                            Scrum, Kanban, agil utveckling, CI/CD, projektplanering, kravinsamling, kunddialog
                            och kontinuerlig förbättring.
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🌍
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            Språk
                        </h3>
                        <p class="text-sm text-slate-600">
                            Svenska, Engelska och Albanska.
                        </p>
                    </div>
                </div>

                {{-- Dark layout – övre tre kort --}}
                <div class="hidden dark:grid gap-6 md:grid-cols-3 mt-4">
                    @php
                        $skillCards = [
                            [
                                'index' => '01',
                                'title' => 'Frontend',
                                'tag'   => 'React · TypeScript · JavaScript',
                                'body'  => 'React.js · TypeScript · JavaScript · Next.js · HTML · CSS · Tailwind · AngularJS.',
                                'accent'=> 'from-fuchsia-500 to-sky-500',
                            ],
                            [
                                'index' => '02',
                                'title' => 'Backend & API',
                                'tag'   => 'Java · Spring Boot · REST',
                                'body'  => 'Java · Spring Boot · Spring Security · Spring Framework · Node.js · REST-API:er · JSON · säker backendutveckling.',
                                'accent'=> 'from-sky-500 to-emerald-400',
                            ],
                            [
                                'index' => '03',
                                'title' => 'Databaser',
                                'tag'   => 'SQL · Mongo · GitHub',
                                'body'  => 'SQL · PostgreSQL · MySQL · MongoDB · Firebase · GitHub.',
                                'accent'=> 'from-emerald-400 to-lime-300',
                            ],
                        ];
                    @endphp

                    @foreach($skillCards as $card)
                        <article class="relative bg-[#050314] border border-slate-800 rounded-2xl px-6 py-6 flex flex-col justify-between overflow-hidden group">
                            <div class="absolute inset-0 opacity-10 bg-linear-to-br {{ $card['accent'] }} group-hover:opacity-20 transition"></div>
                            <div class="relative flex flex-col gap-3">
                                <span class="text-[11px] tracking-[0.3em] uppercase text-fuchsia-400">
                                    {{ $card['index'] }}
                                </span>
                                <h3 class="text-lg font-semibold tracking-wide">
                                    {{ $card['title'] }}
                                </h3>
                                <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400">
                                    {{ $card['tag'] }}
                                </p>
                                <p class="text-sm text-slate-300 mt-2">
                                    {{ $card['body'] }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>

                {{-- Dark layout – nedersta två kort, centrerade --}}
                <div class="hidden dark:grid mt-8 gap-6 md:grid-cols-2 max-w-3xl mx-auto">
                    <article class="relative bg-[#050314] border border-slate-800 rounded-2xl px-6 py-6 flex flex-col justify-between overflow-hidden group">
                        <div class="absolute inset-0 opacity-10 bg-linear-to-br from-sky-500 to-fuchsia-500 group-hover:opacity-20 transition"></div>
                        <div class="relative flex flex-col items-start gap-3">
                            <span class="text-[11px] tracking-[0.3em] uppercase text-fuchsia-400">
                                04
                            </span>
                            <h3 class="text-lg font-semibold tracking-wide">
                                Metodik &amp; arbetssätt
                            </h3>
                            <p class="text-sm text-slate-300 mt-1">
                                Scrum, Kanban, agil utveckling, CI/CD, projektplanering, kravinsamling,
                                kunddialog och kontinuerlig förbättring.
                            </p>
                        </div>
                    </article>

                    <article class="relative bg-[#050314] border border-slate-800 rounded-2xl px-6 py-6 flex flex-col justify-between overflow-hidden group">
                        <div class="absolute inset-0 opacity-10 bg-linear-to-br from-emerald-400 to-sky-500 group-hover:opacity-20 transition"></div>
                        <div class="relative flex flex-col items-start gap-3">
                            <span class="text-[11px] tracking-[0.3em] uppercase text-fuchsia-400">
                                05
                            </span>
                            <h3 class="text-lg font-semibold tracking-wide">
                                Språk
                            </h3>
                            <p class="text-sm text-slate-300 mt-1">
                                Svenska, Engelska och Albanska.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- KONTAKT --}}
        <section id="contact" class="bg-slate-950 text-slate-100 py-24 md:py-28">
            <div class="max-w-3xl mx-auto px-6">
                <p class="text-xs tracking-[0.35em] uppercase mb-6 text-slate-400 text-center md:text-left">
                    Kontakt
                </p>
                <h2 class="text-2xl font-semibold mb-4 text-center md:text-left">
                    Låter jag som en utvecklare som kan passa hos er?
                </h2>
                <p class="text-sm text-slate-300 mb-6 text-center md:text-left">
                    Hör gärna av er om ni vill veta mer, diskutera ett möjligt samarbete eller är nyfikna på
                    hur jag kan bidra i ert team. Jag berättar gärna mer om hur jag arbetar och vilka lösningar
                    jag kan hjälpa er att skapa.
                </p>
                <div class="space-y-1 text-sm text-slate-200 text-center md:text-left">
                    <p><strong>Email:</strong> Valonahmeti95@outlook.com / Valonahmeti97@icloud.com</p>
                    <p><strong>Telefon:</strong> +46 73 751 18 90</p>
                    <p><strong>Ort:</strong> Ängelholm, Skåne</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="py-6 text-center text-xs text-slate-500 bg-black">
        © {{ date('Y') }} Valon Ahmeti – Fullstack Developer
    </footer>

    {{-- LetterGlitch / matrix-bakgrund --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const glitchColors = ['#22d3ee', '#4ade80', '#a855f7'];
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$&*()-_+=/[]{};:<>.,0123456789';

            const fontSize = 16;
            const charWidth = 10;
            const charHeight = 20;
            const glitchSpeed = 50;
            const smooth = true;

            const lettersAndSymbols = Array.from(characters);

            function getRandomChar() {
                return lettersAndSymbols[Math.floor(Math.random() * lettersAndSymbols.length)];
            }

            function getRandomColor() {
                return glitchColors[Math.floor(Math.random() * glitchColors.length)];
            }

            function hexToRgb(hex) {
                const shorthand = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                hex = hex.replace(shorthand, (m, r, g, b) => r + r + g + g + b + b);
                const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                    r: parseInt(result[1], 16),
                    g: parseInt(result[2], 16),
                    b: parseInt(result[3], 16)
                } : null;
            }

            function interpolateColor(start, end, factor) {
                const res = {
                    r: Math.round(start.r + (end.r - start.r) * factor),
                    g: Math.round(start.g + (end.g - start.g) * factor),
                    b: Math.round(start.b + (end.b - start.b) * factor)
                };
                return `rgb(${res.r}, ${res.g}, ${res.b})`;
            }

            function createLetterGlitch(canvas) {
                const state = {
                    letters: [],
                    columns: 0,
                    rows: 0,
                    lastGlitchTime: Date.now()
                };

                function calculateGrid(width, height) {
                    state.columns = Math.ceil(width / charWidth);
                    state.rows = Math.ceil(height / charHeight);
                }

                function initializeLetters() {
                    const total = state.columns * state.rows;
                    state.letters = Array.from({ length: total }, () => {
                        const color = getRandomColor();
                        return {
                            char: getRandomChar(),
                            color,
                            targetColor: getRandomColor(),
                            colorProgress: 1
                        };
                    });
                }

                function resizeCanvas() {
                    const parent = canvas.parentElement;
                    if (!parent) return;

                    const rect = parent.getBoundingClientRect();
                    const dpr = window.devicePixelRatio || 1;

                    canvas.width = rect.width * dpr;
                    canvas.height = rect.height * dpr;
                    canvas.style.width = rect.width + 'px';
                    canvas.style.height = rect.height + 'px';

                    const ctx = canvas.getContext('2d');
                    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

                    calculateGrid(rect.width, rect.height);
                    initializeLetters();
                    drawLetters();
                }

                function drawLetters() {
                    const rect = canvas.getBoundingClientRect();
                    const ctx = canvas.getContext('2d');

                    ctx.fillStyle = '#020617';
                    ctx.fillRect(0, 0, rect.width, rect.height);

                    ctx.font = fontSize + 'px monospace';
                    ctx.textBaseline = 'top';

                    state.letters.forEach((letter, index) => {
                        const x = (index % state.columns) * charWidth;
                        const y = Math.floor(index / state.columns) * charHeight;
                        ctx.fillStyle = letter.color;
                        ctx.fillText(letter.char, x, y);
                    });
                }

                function updateLetters() {
                    if (!state.letters.length) return;
                    const updateCount = Math.max(1, Math.floor(state.letters.length * 0.05));

                    for (let i = 0; i < updateCount; i++) {
                        const index = Math.floor(Math.random() * state.letters.length);
                        const letter = state.letters[index];
                        if (!letter) continue;

                        letter.char = getRandomChar();
                        letter.targetColor = getRandomColor();

                        if (!smooth) {
                            letter.color = letter.targetColor;
                            letter.colorProgress = 1;
                        } else {
                            letter.colorProgress = 0;
                        }
                    }
                }

                function handleSmoothTransitions() {
                    let needsRedraw = false;
                    state.letters.forEach(letter => {
                        if (letter.colorProgress < 1) {
                            letter.colorProgress += 0.05;
                            if (letter.colorProgress > 1) letter.colorProgress = 1;

                            const startRgb = hexToRgb(letter.color);
                            const endRgb = hexToRgb(letter.targetColor);
                            if (startRgb && endRgb) {
                                letter.color = interpolateColor(startRgb, endRgb, letter.colorProgress);
                                needsRedraw = true;
                            }
                        }
                    });

                    if (needsRedraw) drawLetters();
                }

                function animate() {
                    const now = Date.now();
                    if (now - state.lastGlitchTime >= glitchSpeed) {
                        updateLetters();
                        drawLetters();
                        state.lastGlitchTime = now;
                    }

                    if (smooth) {
                        handleSmoothTransitions();
                    }

                    requestAnimationFrame(animate);
                }

                resizeCanvas();
                animate();

                let resizeTimeout;
                window.addEventListener('resize', () => {
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(resizeCanvas, 120);
                });
            }

            document.querySelectorAll('.letter-glitch').forEach(canvas => {
                createLetterGlitch(canvas);
            });
        });
    </script>
</body>
</html>
