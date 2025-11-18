<!DOCTYPE html>
<html lang="sv" x-data="pageState()" x-init="init()" :class="{ 'dark': dark }" x-bind:lang="lang">
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
                <div class="h-9 w-9 rounded-full overflow-hidden border border-slate-300 dark:border-slate-700 bg-slate-900" aria-hidden="true">
                    <div class="h-full w-full bg-linear-to-br from-fuchsia-500 via-sky-500 to-emerald-400"></div>
                </div>
                <div>
                    <p class="text-sm font-semibold tracking-wide">Valon Ahmeti</p>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <nav aria-label="Huvudnavigation" class="hidden md:flex gap-6 text-[11px] font-medium tracking-[0.2em] uppercase text-slate-500 dark:text-slate-300">
                    <a href="#hero" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">
                        <span x-show="isSv()" x-cloak>Start</span>
                        <span x-show="isEn()" x-cloak>Home</span>
                    </a>
                    <a href="#about" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">
                        <span x-show="isSv()" x-cloak>Introduktion</span>
                        <span x-show="isEn()" x-cloak>Introduction</span>
                    </a>
                    <a href="#projects" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">
                        <span x-show="isSv()" x-cloak>Projekt</span>
                        <span x-show="isEn()" x-cloak>Projects</span>
                    </a>
                    <a href="#skills" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">
                        <span x-show="isSv()" x-cloak>Kunskaper</span>
                        <span x-show="isEn()" x-cloak>Skills</span>
                    </a>
                    <a href="#contact" class="hover:text-fuchsia-500 dark:hover:text-fuchsia-400">
                        <span x-show="isSv()" x-cloak>Kontakt</span>
                        <span x-show="isEn()" x-cloak>Contact</span>
                    </a>
                </nav>

                {{-- Språkväxlare – EN knapp som växlar språk --}}
                <button
                    type="button"
                    @click="toggleLang()"
                    class="px-4 py-1.5 rounded-full border border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-900 text-xs font-medium text-slate-700 dark:text-slate-200 flex items-center gap-2"
                >
                    <span x-show="isSv()" x-cloak>English</span>
                    <span x-show="isEn()" x-cloak>Svenska</span>
                </button>
            </div>
        </div>
    </header>

    <main>

        {{-- HERO – LetterGlitch som bakgrund, clean mitten --}}
        <section id="hero" class="relative min-h-[90vh] py-24 md:py-28 flex items-center justify-center overflow-hidden">

            {{-- ANIMATION --}}
            <div class="absolute inset-0 -z-40">
                <div class="relative w-full h-full">
                    <canvas class="letter-glitch w-full h-full block"></canvas>
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
                        <span x-show="isSv()" x-cloak>Se projekt</span>
                        <span x-show="isEn()" x-cloak>View projects</span>
                    </a>
                    <a href="#about"
                       class="inline-flex items-center gap-3 px-8 py-3 rounded-full border border-slate-300/80 dark:border-slate-600 bg-white/85 dark:bg-white/5 text-[11px] tracking-[0.3em] uppercase text-slate-800 dark:text-slate-100 hover:border-fuchsia-500/70">
                        <span x-show="isSv()" x-cloak>Läs mer om mig</span>
                        <span x-show="isEn()" x-cloak>Learn more about me</span>
                    </a>
                </div>
            </div>
        </section>

        {{-- INTRODUKTION --}}
        <section id="about" class="bg-white dark:bg-slate-950 py-24 md:py-28">
            <div class="max-w-6xl mx-auto px-6">

                <div class="flex flex-col items-center mb-16">
                    <h2 class="text-sm md:text-base tracking-[0.45em] uppercase text-slate-600 dark:text-slate-300">
                        <span x-show="isSv()" x-cloak>Introduktion</span>
                        <span x-show="isEn()" x-cloak>Introduction</span>
                    </h2>
                    <div class="mt-4 h-px w-28 bg-linear-to-r from-fuchsia-500 via-sky-500 to-emerald-400 rounded-full"></div>
                </div>

                <div class="grid gap-14 md:grid-cols-[1.1fr,1.7fr] items-start">
                    <div class="text-xl leading-relaxed text-slate-800 dark:text-slate-100">
                        <p x-show="isSv()" x-cloak>
                            Fullstackutvecklare utbildad vid Lunds Tekniska Högskola, med fokus på moderna webbapplikationer.
                            Van vid att arbeta genom hela kedjan – från idé och krav till driftsatt lösning och vidareutveckling –
                            med stor vikt vid struktur, kvalitet och ett nära samarbete med användare och beställare.
                        </p>
                        <p x-show="isEn()" x-cloak>
                            Full-stack developer educated at Lund University Faculty of Engineering (LTH), with a focus on modern web applications.
                            Experienced in working across the entire lifecycle – from idea and requirements to deployment and continuous improvement –
                            with strong emphasis on structure, quality and close collaboration with users and stakeholders.
                        </p>
                    </div>

                    <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-300">
                        <p x-show="isSv()" x-cloak>
                            Mitt namn är <span class="font-semibold">Valon Ahmeti</span> och jag har ett starkt tekniskt intresse
                            och en tydlig problemlösningsdriv. Studierna vid Lunds Tekniska Högskola har gett mig en stabil grund
                            inom systemutveckling, samtidigt som jag hela tiden strävar efter att utvecklas och hitta effektiva,
                            hållbara lösningar.
                        </p>
                        <p x-show="isEn()" x-cloak>
                            My name is <span class="font-semibold">Valon Ahmeti</span> and I have a strong technical interest
                            and a clear drive for problem solving. My studies at Lund University Faculty of Engineering have given me a solid foundation
                            in software development, while I constantly strive to grow and find efficient and sustainable solutions.
                        </p>

                        <p x-show="isSv()" x-cloak>
                            Efter gymnasiet började jag arbeta som maskinoperatör, ett arbete jag hade under flera år.
                            Den erfarenheten har gett mig struktur, noggrannhet och en stark ansvarskänsla – egenskaper som är
                            direkt överförbara till utvecklingsarbetet. Det var också under den perioden som intresset för
                            programmering växte sig starkare och jag bestämde mig för att satsa fullt ut på utvecklaryrket.
                        </p>
                        <p x-show="isEn()" x-cloak>
                            After upper secondary school I started working as a machine operator, a job I had for several years.
                            That experience has given me structure, attention to detail and a strong sense of responsibility – qualities that are
                            directly transferable to software development. It was also during that time that my interest in programming grew stronger,
                            and I decided to fully commit to becoming a developer.
                        </p>

                        <p x-show="isSv()" x-cloak>
                            Som person är jag social, nyfiken och samarbetsinriktad. Jag trivs i team där jag både kan bidra med
                            mina kunskaper och samtidigt lära mig av andra. Jag uppskattar tydlig kommunikation, gillar att ställa
                            frågor och tycker om att ha kontakt med beställare och användare för att förstå behoven på djupet.
                        </p>
                        <p x-show="isEn()" x-cloak>
                            As a person I am social, curious and collaborative. I enjoy working in teams where I can contribute with
                            my knowledge and at the same time learn from others. I value clear communication, like to ask questions
                            and enjoy having direct contact with stakeholders and users to really understand their needs.
                        </p>

                        <p x-show="isSv()" x-cloak>
                            Jag har tidigare arbetat med egna kunder, bland annat genom att ta fram ett skräddarsytt
                            bokningssystem åt en frisörsalong med funktioner för både kunder och administratörer. I stället för
                            att använda färdiga komponenter valde jag att bygga en egen lösning, vilket gav bra insikt i hela
                            processen – från kravinsamling och design till implementation, testning och löpande förbättringar.
                        </p>
                        <p x-show="isEn()" x-cloak>
                            I have previously worked with my own clients, for example by building a tailor-made
                            booking system for a hair salon with features for both customers and administrators. Instead of
                            using pre-made components I chose to build a custom solution, which gave me deep insight into the whole
                            process – from requirements and design to implementation, testing and continuous improvements.
                        </p>

                        @php
                            $stack = [
                                'React', 'TypeScript', 'JavaScript',
                                'Next.js', 'Node.js',

                                'Java', 'Spring Boot', 'Spring Security', 'Spring Framework',

                                'REST API',
                                'HTML', 'CSS', 'Tailwind',

                                'SQL', 'PostgreSQL', 'MySQL', 'MongoDB', 'Firebase',

                                'CI/CD', 'GitHub', 'Playwright'
                            ];
                        @endphp

                        <div class="pt-6 mt-8 border-t border-slate-200 dark:border-slate-700">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full
                                        bg-slate-100/80 dark:bg-slate-900/70
                                        border border-slate-200 dark:border-slate-700 mb-4">
                                <span class="h-1.5 w-1.5 rounded-full bg-linear-to-r from-fuchsia-500 via-sky-500 to-emerald-400"></span>
                                <p class="text-[11px] md:text-xs tracking-[0.28em] uppercase font-semibold text-slate-600 dark:text-slate-200">
                                    <span x-show="isSv()" x-cloak>Tekniker &amp; verktyg</span>
                                    <span x-show="isEn()" x-cloak>Technologies &amp; tools</span>
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
                        <span x-show="isSv()" x-cloak>Utvalda projekt</span>
                        <span x-show="isEn()" x-cloak>Selected projects</span>
                    </p>
                    <div class="mt-4 h-px w-20 bg-slate-300 dark:bg-slate-700"></div>
                </div>

                <div class="grid gap-10 lg:grid-cols-3">
                    {{-- Frisörsalong – slideshow + galleria --}}
                    <article
                        class="bg-white dark:bg-[#05081a] rounded-2xl shadow-sm shadow-slate-200/70 dark:shadow-black/50 overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-xl hover:shadow-fuchsia-500/25 transition cursor-pointer"
                        @click="openGalleryFromSlide()"
                    >
                        {{-- Slideshow --}}
                        <div class="relative aspect-video overflow-hidden">
                            <img
                                :src="slideshowImages[slideshowIndex]"
                                class="absolute inset-0 w-full h-full object-cover"
                                x-transition.opacity.duration.1000ms
                                loading="lazy"
                                alt="Frisörsalong – skärmdump"
                            >

                            <div class="absolute inset-0 bg-linear-to-t from-black/40 via-black/10 to-transparent pointer-events-none"></div>

                            <div class="absolute bottom-3 right-3 flex gap-1">
                                <template x-for="(img, idx) in slideshowImages" :key="'dot-' + idx">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full border border-white/50"
                                        :class="slideshowIndex === idx ? 'bg-white' : 'bg-white/30'"
                                    ></span>
                                </template>
                            </div>
                        </div>

                        {{-- Text --}}
                        <div class="p-6 flex flex-col gap-2">
                            <h3 class="text-xs font-semibold tracking-[0.25em] uppercase text-slate-500 dark:text-slate-400">
                                <span x-show="isSv()" x-cloak>Frisörsalong · Bokningssystem</span>
                                <span x-show="isEn()" x-cloak>Hair salon · Booking system</span>
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                <span x-show="isSv()" x-cloak>
                                    Skräddarsytt bokningssystem med kalender, tjänster, priskategorier, adminpanel och kundvy –
                                    byggt som en modern webbapp med fokus på enkel, mobilanpassad användarupplevelse.
                                </span>
                                <span x-show="isEn()" x-cloak>
                                    Custom booking system with calendar, services, price categories, admin panel and customer view –
                                    built as a modern web app with focus on a simple, mobile-friendly user experience.
                                </span>
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
                                <span x-show="isSv()" x-cloak>Intern webbapplikation</span>
                                <span x-show="isEn()" x-cloak>Internal web application</span>
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                <span x-show="isSv()" x-cloak>
                                    Adminportal för interna processer: användare, roller, loggning, rapporter och statistik.
                                    Säkerhet med Spring Security och JWT, REST-API mot React-klient.
                                </span>
                                <span x-show="isEn()" x-cloak>
                                    Admin portal for internal processes: users, roles, logging, reports and statistics.
                                    Security with Spring Security and JWT, REST API exposed to a React client.
                                </span>
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
                                <span x-show="isSv()" x-cloak>Testautomation &amp; CI/CD</span>
                                <span x-show="isEn()" x-cloak>Test automation &amp; CI/CD</span>
                            </h3>
                            <p class="text-sm text-slate-700 dark:text-slate-300">
                                <span x-show="isSv()" x-cloak>
                                    Erfarenhet av Playwright, automatiserade tester och CI/CD-pipelines. Fokus på kvalitet,
                                    snabb feedback och stabila releaser.
                                </span>
                                <span x-show="isEn()" x-cloak>
                                    Experience with Playwright, automated tests and CI/CD pipelines. Focus on quality,
                                    fast feedback and stable releases.
                                </span>
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
                        <span x-show="isSv()" x-cloak>Kunskaper</span>
                        <span x-show="isEn()" x-cloak>Skills</span>
                    </h2>
                    <div class="mt-4 h-px w-20 bg-slate-300 dark:bg-slate-700"></div>
                </div>

                {{-- Light layout – övre tre kort --}}
                <div class="grid gap-12 md:grid-cols-3 dark:hidden">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🎨
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            <span x-show="isSv()" x-cloak>Frontend</span>
                            <span x-show="isEn()" x-cloak>Frontend</span>
                        </h3>
                        <p class="text-sm text-slate-600">
                            <span x-show="isSv()" x-cloak>
                                React.js, TypeScript, JavaScript, Next.js, HTML, CSS, Tailwind, AngularJS.
                                Fokus på responsiva och användarvänliga gränssnitt.
                            </span>
                            <span x-show="isEn()" x-cloak>
                                React.js, TypeScript, JavaScript, Next.js, HTML, CSS, Tailwind, AngularJS.
                                Focus on responsive and user-friendly interfaces.
                            </span>
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            ⚙️
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            <span x-show="isSv()" x-cloak>Backend &amp; API</span>
                            <span x-show="isEn()" x-cloak>Backend &amp; API</span>
                        </h3>
                        <p class="text-sm text-slate-600">
                            <span x-show="isSv()" x-cloak>
                                Java, Spring Boot, Spring Security, Spring Framework, Node.js, REST-API:er, JSON,
                                strukturerad systemutveckling och testning.
                            </span>
                            <span x-show="isEn()" x-cloak>
                                Java, Spring Boot, Spring Security, Spring Framework, Node.js, REST APIs, JSON,
                                structured software development and testing.
                            </span>
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🗄️
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            <span x-show="isSv()" x-cloak>Databaser</span>
                            <span x-show="isEn()" x-cloak>Databases</span>
                        </h3>
                        <p class="text-sm text-slate-600">
                            <span x-show="isSv()" x-cloak>
                                SQL, MySQL, PostgreSQL, MongoDB, Firebase, GitHub.
                                Stabil datahantering och strukturerade datamodeller.
                            </span>
                            <span x-show="isEn()" x-cloak>
                                SQL, MySQL, PostgreSQL, MongoDB, Firebase, GitHub.
                                Solid data handling and well-structured data models.
                            </span>
                        </p>
                    </div>
                </div>

                {{-- Light layout – nedersta två kort --}}
                <div class="mt-12 grid gap-12 md:grid-cols-2 max-w-3xl mx-auto dark:hidden">
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            📋
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            <span x-show="isSv()" x-cloak>Metodik &amp; arbetssätt</span>
                            <span x-show="isEn()" x-cloak>Methods &amp; ways of working</span>
                        </h3>
                        <p class="text-sm text-slate-600">
                            <span x-show="isSv()" x-cloak>
                                Scrum, Kanban, agil utveckling, CI/CD, projektplanering, kravinsamling, kunddialog
                                och kontinuerlig förbättring.
                            </span>
                            <span x-show="isEn()" x-cloak>
                                Scrum, Kanban, agile development, CI/CD, project planning, requirements gathering,
                                customer dialogue and continuous improvement.
                            </span>
                        </p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="h-14 w-14 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-4">
                            🌍
                        </div>
                        <h3 class="text-xs tracking-[0.25em] uppercase text-slate-600 mb-2">
                            <span x-show="isSv()" x-cloak>Språk</span>
                            <span x-show="isEn()" x-cloak>Languages</span>
                        </h3>
                        <p class="text-sm text-slate-600">
                            <span x-show="isSv()" x-cloak>Svenska, Engelska och Albanska.</span>
                            <span x-show="isEn()" x-cloak>Swedish, English and Albanian.</span>
                        </p>
                    </div>
                </div>

                {{-- Dark layout etc (oförändrat) --}}
                <div class="hidden dark:grid gap-6 md:grid-cols-3 mt-4">
                    @php
                        $skillCards = [
                            [
                                'index' => '01',
                                'title_sv' => 'Frontend',
                                'title_en' => 'Frontend',
                                'tag_sv'   => 'React · TypeScript · JavaScript',
                                'tag_en'   => 'React · TypeScript · JavaScript',
                                'body_sv'  => 'React.js · TypeScript · JavaScript · Next.js · HTML · CSS · Tailwind · AngularJS.',
                                'body_en'  => 'React.js · TypeScript · JavaScript · Next.js · HTML · CSS · Tailwind · AngularJS.',
                                'accent'   => 'from-fuchsia-500 to-sky-500',
                            ],
                            [
                                'index' => '02',
                                'title_sv' => 'Backend & API',
                                'title_en' => 'Backend & API',
                                'tag_sv'   => 'Java · Spring Boot · REST',
                                'tag_en'   => 'Java · Spring Boot · REST',
                                'body_sv'  => 'Java · Spring Boot · Spring Security · Spring Framework · Node.js · REST-API:er · JSON · säker backendutveckling.',
                                'body_en'  => 'Java · Spring Boot · Spring Security · Spring Framework · Node.js · REST APIs · JSON · secure backend development.',
                                'accent'   => 'from-sky-500 to-emerald-400',
                            ],
                            [
                                'index' => '03',
                                'title_sv' => 'Databaser',
                                'title_en' => 'Databases',
                                'tag_sv'   => 'SQL · Mongo · GitHub',
                                'tag_en'   => 'SQL · Mongo · GitHub',
                                'body_sv'  => 'SQL · PostgreSQL · MySQL · MongoDB · Firebase · GitHub.',
                                'body_en'  => 'SQL · PostgreSQL · MySQL · MongoDB · Firebase · GitHub.',
                                'accent'   => 'from-emerald-400 to-lime-300',
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
                                    <span x-show="isSv()" x-cloak>{{ $card['title_sv'] }}</span>
                                    <span x-show="isEn()" x-cloak>{{ $card['title_en'] }}</span>
                                </h3>
                                <p class="text-[11px] uppercase tracking-[0.18em] text-slate-400">
                                    <span x-show="isSv()" x-cloak>{{ $card['tag_sv'] }}</span>
                                    <span x-show="isEn()" x-cloak>{{ $card['tag_en'] }}</span>
                                </p>
                                <p class="text-sm text-slate-300 mt-2">
                                    <span x-show="isSv()" x-cloak>{{ $card['body_sv'] }}</span>
                                    <span x-show="isEn()" x-cloak>{{ $card['body_en'] }}</span>
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="hidden dark:grid mt-8 gap-6 md:grid-cols-2 max-w-3xl mx-auto">
                    <article class="relative bg-[#050314] border border-slate-800 rounded-2xl px-6 py-6 flex flex-col justify-between overflow-hidden group">
                        <div class="absolute inset-0 opacity-10 bg-linear-to-br from-sky-500 to-fuchsia-500 group-hover:opacity-20 transition"></div>
                        <div class="relative flex flex-col items-start gap-3">
                            <span class="text-[11px] tracking-[0.3em] uppercase text-fuchsia-400">
                                04
                            </span>
                            <h3 class="text-lg font-semibold tracking-wide">
                                <span x-show="isSv()" x-cloak>Metodik &amp; arbetssätt</span>
                                <span x-show="isEn()" x-cloak>Methods &amp; ways of working</span>
                            </h3>
                            <p class="text-sm text-slate-300 mt-1">
                                <span x-show="isSv()" x-cloak>
                                    Scrum, Kanban, agil utveckling, CI/CD, projektplanering, kravinsamling,
                                    kunddialog och kontinuerlig förbättring.
                                </span>
                                <span x-show="isEn()" x-cloak>
                                    Scrum, Kanban, agile development, CI/CD, project planning, requirements gathering,
                                    customer dialogue and continuous improvement.
                                </span>
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
                                <span x-show="isSv()" x-cloak>Språk</span>
                                <span x-show="isEn()" x-cloak>Languages</span>
                            </h3>
                            <p class="text-sm text-slate-300 mt-1">
                                <span x-show="isSv()" x-cloak>Svenska, Engelska och Albanska.</span>
                                <span x-show="isEn()" x-cloak>Swedish, English and Albanian.</span>
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- KONTAKT --}}
        <section id="contact" class="bg-[#010106] text-slate-100 py-24 md:py-28">
            <div class="max-w-3xl mx-auto px-6">
                <p class="text-xs tracking-[0.35em] uppercase mb-6 text-slate-400 text-center md:text-left">
                    <span x-show="isSv()" x-cloak>Kontakt</span>
                    <span x-show="isEn()" x-cloak>Contact</span>
                </p>
                <h2 class="text-2xl font-semibold mb-4 text-center md:text-left">
                    <span x-show="isSv()" x-cloak>Låter jag som en utvecklare som kan passa hos er?</span>
                    <span x-show="isEn()" x-cloak>Do I sound like a developer who could be a good fit for your team?</span>
                </h2>
                <p class="text-sm text-slate-300 mb-6 text-center md:text-left">
                    <span x-show="isSv()" x-cloak>
                        Hör gärna av er om ni vill veta mer, diskutera ett möjligt samarbete eller är nyfikna på
                        hur jag kan bidra i ert team. Jag berättar gärna mer om hur jag arbetar och vilka lösningar
                        jag kan hjälpa er att skapa.
                    </span>
                    <span x-show="isEn()" x-cloak>
                        Feel free to get in touch if you want to know more, discuss a possible collaboration or are curious about
                        how I can contribute to your team. I’m happy to talk more about how I work and what kind of solutions
                        I can help you build.
                    </span>
                </p>
                <div class="space-y-1 text-sm text-slate-200 text-center md:text-left">
                    <p>
                        <strong>
                            <span x-show="isSv()" x-cloak>Email:</span>
                            <span x-show="isEn()" x-cloak>Email:</span>
                        </strong>
                        <a href="mailto:Valonahmeti95@outlook.com" class="underline decoration-slate-500 hover:text-fuchsia-400">
                            Valonahmeti95@outlook.com
                        </a>
                        /
                        <a href="mailto:Valonahmeti97@icloud.com" class="underline decoration-slate-500 hover:text-fuchsia-400">
                            Valonahmeti97@icloud.com
                        </a>
                    </p>
                    <p>
                        <strong>
                            <span x-show="isSv()" x-cloak>Telefon:</span>
                            <span x-show="isEn()" x-cloak>Phone:</span>
                        </strong>
                        <a href="tel:+46737511890" class="underline decoration-slate-500 hover:text-fuchsia-400">
                            +46 73 751 18 90
                        </a>
                    </p>
                    <p>
                        <strong>
                            <span x-show="isSv()" x-cloak>Ort:</span>
                            <span x-show="isEn()" x-cloak>Location:</span>
                        </strong>
                        <span x-show="isSv()" x-cloak>Ängelholm, Skåne</span>
                        <span x-show="isEn()" x-cloak>Ängelholm, Skåne (Sweden)</span>
                    </p>
                </div>
            </div>
        </section>

    </main>

    <footer class="py-6 text-center text-xs text-slate-500 bg-black">
        © {{ date('Y') }} Valon Ahmeti – Fullstack Developer
    </footer>

    {{-- GALLERI-OVERLAY --}}
    <div
        x-show="galleryOpen"
        x-cloak
        x-transition.opacity
        class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md flex items-center justify-center px-4"
        @click.self="closeGallery()"
        @keydown.escape.window="closeGallery()"
    >
        <div class="relative max-w-5xl w-full mx-auto bg-[#020014] border border-slate-700 rounded-2xl shadow-2xl overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-800">
                <span class="text-xs tracking-[0.3em] uppercase text-slate-400">
                    <span x-show="isSv()" x-cloak>Frisörsalong · Galleri</span>
                    <span x-show="isEn()" x-cloak>Hair salon · Gallery</span>
                </span>
                <button
                    type="button"
                    class="text-[11px] tracking-[0.25em] uppercase text-slate-300 hover:text-fuchsia-400"
                    @click="closeGallery()"
                >
                    <span x-show="isSv()" x-cloak>Stäng</span>
                    <span x-show="isEn()" x-cloak>Close</span>
                </button>
            </div>

            <div class="relative bg-black flex items-center justify-center max-h-[80vh]">
                <img
                    :src="galleryImages[galleryIndex]"
                    class="max-h-[80vh] w-full object-contain"
                    :alt="'Bild ' + (galleryIndex + 1)"
                >

                <button
                    type="button"
                    class="absolute left-4 top-1/2 -translate-y-1/2 px-3 py-2 rounded-full bg-black/60 text-white text-xl hover:bg-black/80"
                    @click.stop="prevGallery()"
                >
                    ‹
                </button>
                <button
                    type="button"
                    class="absolute right-4 top-1/2 -translate-y-1/2 px-3 py-2 rounded-full bg-black/60 text-white text-xl hover:bg-black/80"
                    @click.stop="nextGallery()"
                >
                    ›
                </button>
            </div>
        </div>
    </div>

    {{-- LetterGlitch --}}
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

        function pageState() {
            return {
                dark: false,
                lang: localStorage.getItem('lang') || 'sv',

                // slideshow (utan databas-bilder)
                slideshowIndex: 0,
                slideshowTimer: null,
                slideshowImages: [
                    "/images/frisor/bild 2.png",
                    "/images/frisor/bild 3.png",
                    "/images/frisor/bild 4.png",
                    "/images/frisor/bild 5.png",
                    "/images/frisor/bild 6.png",
                    "/images/frisor/bild 7.png",
                    "/images/frisor/bild 8.png",
                    "/images/frisor/bild 9.png",
                    "/images/frisor/bild 10 skapade tider.png",
                    "/images/frisor/bild 11.png",
                    "/images/frisor/bild 12.png",
                    "/images/frisor/bild 13 icke inloggad vy.png",
                    "/images/frisor/bild 14.png",
                ],

                // galleri (alla bilder inkl databas)
                galleryOpen: false,
                galleryIndex: 0,
                galleryImages: [
                    "/images/frisor/bild 2.png",
                    "/images/frisor/bild 3.png",
                    "/images/frisor/bild 4.png",
                    "/images/frisor/bild 5.png",
                    "/images/frisor/bild 6.png",
                    "/images/frisor/bild 7.png",
                    "/images/frisor/bild 8.png",
                    "/images/frisor/bild 9.png",
                    "/images/frisor/bild 10 skapade tider.png",
                    "/images/frisor/bild 11.png",
                    "/images/frisor/bild 12.png",
                    "/images/frisor/bild 13 icke inloggad vy.png",
                    "/images/frisor/bild 14.png",
                    "/images/frisor/database bild 1.png",
                    "/images/frisor/database bild 2.png",
                ],

                // --------- INIT ---------
                init() {
                    // dark mode efter OS
                    const mql = window.matchMedia('(prefers-color-scheme: dark)');
                    this.dark = mql.matches;
                    if (mql.addEventListener) {
                        mql.addEventListener('change', (e) => { this.dark = e.matches; });
                    } else if (mql.addListener) {
                        mql.addListener((e) => { this.dark = e.matches; });
                    }

                    // start slideshow
                    this.startSlideshow();
                },

                // --------- SLIDESHOW ---------
                startSlideshow() {
                    if (this.slideshowTimer || this.slideshowImages.length <= 1) return;
                    this.slideshowTimer = setInterval(() => {
                        this.nextSlide();
                    }, 3000); // 3 sek
                },
                stopSlideshow() {
                    if (this.slideshowTimer) {
                        clearInterval(this.slideshowTimer);
                        this.slideshowTimer = null;
                    }
                },
                nextSlide() {
                    if (!this.slideshowImages.length) return;
                    this.slideshowIndex = (this.slideshowIndex + 1) % this.slideshowImages.length;
                },

                // --------- GALLERI ---------
                openGalleryFromSlide() {
                    if (!this.galleryImages.length) return;
                    this.galleryIndex = Math.min(this.slideshowIndex, this.galleryImages.length - 1);
                    this.galleryOpen = true;
                    this.stopSlideshow();
                    document.body.classList.add('overflow-hidden');
                },
                closeGallery() {
                    this.galleryOpen = false;
                    document.body.classList.remove('overflow-hidden');
                    this.startSlideshow();
                },
                nextGallery() {
                    if (!this.galleryImages.length) return;
                    this.galleryIndex = (this.galleryIndex + 1) % this.galleryImages.length;
                },
                prevGallery() {
                    if (!this.galleryImages.length) return;
                    this.galleryIndex = (this.galleryIndex - 1 + this.galleryImages.length) % this.galleryImages.length;
                },

                // --------- SPRÅK ---------
                setLang(newLang) {
                    this.lang = newLang;
                    localStorage.setItem('lang', newLang);
                },
                toggleLang() {
                    this.setLang(this.lang === 'sv' ? 'en' : 'sv');
                },
                isSv() { return this.lang === 'sv'; },
                isEn() { return this.lang === 'en'; },
            }
        }
    </script>
</body>
</html>
