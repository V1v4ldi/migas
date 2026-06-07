<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>PetroManage | Infrastructure Portal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-fixed": "#adecff",
                    "on-primary-container": "#c4d2ff",
                    "on-primary-fixed-variant": "#0040a2",
                    "error-container": "#ffdad6",
                    "primary-container": "#0052cc",
                    "inverse-primary": "#b2c5ff",
                    "primary-fixed": "#dae2ff",
                    "outline-variant": "#c3c6d6",
                    "on-tertiary-fixed-variant": "#004e5d",
                    "on-secondary": "#ffffff",
                    "surface-variant": "#e1e2e4",
                    "tertiary-container": "#006476",
                    "tertiary": "#004b58",
                    "surface-tint": "#0c56d0",
                    "outline": "#737685",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#5dd6f3",
                    "on-primary-fixed": "#001848",
                    "secondary-fixed-dim": "#b7c7e7",
                    "on-error": "#ffffff",
                    "on-secondary-container": "#52617d",
                    "surface-container-high": "#e7e8ea",
                    "on-tertiary": "#ffffff",
                    "primary": "#003d9b",
                    "on-tertiary-container": "#70e2ff",
                    "on-surface": "#191c1e",
                    "error": "#ba1a1a",
                    "secondary-container": "#ceddfe",
                    "on-background": "#191c1e",
                    "on-surface-variant": "#434654",
                    "primary-fixed-dim": "#b2c5ff",
                    "surface-bright": "#f8f9fb",
                    "inverse-on-surface": "#f0f1f3",
                    "on-secondary-fixed": "#0b1c34",
                    "on-secondary-fixed-variant": "#384762",
                    "secondary": "#505f7b",
                    "surface-container-highest": "#e1e2e4",
                    "background": "#f8f9fb",
                    "surface-container": "#edeef0",
                    "on-tertiary-fixed": "#001f26",
                    "surface-container-lowest": "#ffffff",
                    "on-primary": "#ffffff",
                    "secondary-fixed": "#d6e3ff",
                    "surface-dim": "#d9dadc",
                    "surface": "#f8f9fb",
                    "inverse-surface": "#2e3132",
                    "surface-container-low": "#f3f4f6"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "container-max": "1440px",
                    "base": "8px",
                    "margin-desktop": "32px"
            },
            "fontFamily": {
                    "label-sm": ["Inter"],
                    "headline-xl": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "label-sm": ["11px", {"lineHeight": "14px", "fontWeight": "500"}],
                    "headline-xl": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-lg": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
            }
          },
        },
      }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
            color: #191c1e;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>
<body class="pt-16">

<header class="bg-[#081F5C] border-b border-white/10 shadow-md fixed top-0 w-full z-50">
    <div class="flex items-center justify-between w-full px-margin-desktop h-16 max-w-container-max mx-auto gap-8">
        
        <div class="flex items-center shrink-0">
            <span class="text-headline-lg font-headline-lg font-bold text-white tracking-tight">PetroManage</span>
        </div>
        
        <div class="hidden md:flex items-center justify-center flex-1 h-full">
            <nav id="nav-menu" class="flex items-center gap-4 relative h-full">
                <div id="sliding-line" class="absolute bottom-0 h-[3px] bg-cyan-400 rounded-full transition-all duration-300 ease-out pointer-events-none opacity-0"></div>

                <a data-active="true" class="nav-item px-4 h-full flex items-center text-white font-semibold text-label-md transition-colors duration-200 hover:text-cyan-300" href="index.php">
                    Dashboard
                </a>
                
                <div class="relative group h-full flex items-center">
                    <button class="nav-item px-4 h-full flex items-center gap-1 text-slate-200 font-semibold text-label-md transition-colors duration-200 hover:text-white group-hover:text-white focus:outline-none">
                        Data
                        <span class="material-symbols-outlined text-[16px] transition-transform duration-300 group-hover:rotate-180">keyboard_arrow_down</span>
                    </button>
                    
                    <div class="absolute left-1/2 -translate-x-1/2 top-[100%] hidden group-hover:block bg-[#0c2975] border border-white/10 rounded-xl shadow-xl py-2 w-52 mt-0 z-50 transform origin-top transition-all animate-[fadeIn_0.2s_ease-out]">
                        <a href="data_produksi.php" class="flex items-center gap-2 mx-2 px-3 py-2.5 rounded-lg text-body-md text-slate-100 hover:bg-[#123894] hover:text-cyan-300 transition-all font-medium">
                            <span class="material-symbols-outlined text-[18px]">analytics</span>
                            Data Produksi
                        </a>
                        <a href="parameter_ekonomi.php" class="flex items-center gap-2 mx-2 px-3 py-2.5 rounded-lg text-body-md text-slate-100 hover:bg-[#123894] hover:text-cyan-300 transition-all font-medium">
                            <span class="material-symbols-outlined text-[18px]">payments</span>
                            Parameter Ekonomi
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="hidden lg:flex items-center justify-end shrink-0">
            <div class="relative w-64">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">search</span>
                <input class="w-full pl-10 pr-4 py-1.5 bg-white/10 border border-white/20 focus:border-cyan-400 rounded-full text-body-md font-body-md text-white focus:outline-none focus:ring-2 focus:ring-cyan-400/20 transition-all placeholder-slate-400" placeholder="Search data..." type="text"/>
            </div>
        </div>

    </div>
</header>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translate(-50%, -4px); }
    to { opacity: 1; transform: translate(-50%, 0); }
}
.animate-\[fadeIn_0\.2s_ease-out\] {
    animation: fadeIn 0.2s ease-out forwards;
}
</style>

<script>
    const navMenu = document.getElementById('nav-menu');
    const slidingLine = document.getElementById('sliding-line');
    const navItems = document.querySelectorAll('.nav-item');

    function moveLineTo(element) {
        if (!element) return;
        
        const navRect = navMenu.getBoundingClientRect();
        const itemRect = element.getBoundingClientRect();

        const leftPosition = itemRect.left - navRect.left;
        const width = itemRect.width;

        slidingLine.style.left = `${leftPosition}px`;
        slidingLine.style.width = `${width}px`;
        slidingLine.style.opacity = '1';
    }

    function resetLineToActive() {
        const activeItem = document.querySelector('.nav-item[data-active="true"]');
        if (activeItem) {
            moveLineTo(activeItem);
        } else {
            slidingLine.style.opacity = '0';
        }
    }

    navItems.forEach(item => {
        item.addEventListener('mouseenter', () => moveLineTo(item));
        
        item.addEventListener('click', (e) => {
            navItems.forEach(i => i.removeAttribute('data-active'));
            item.setAttribute('data-active', 'true');
        });
    });

    navMenu.addEventListener('mouseleave', resetLineToActive);

    function checkCurrentPage() {
        const currentPath = window.location.pathname.split("/").pop();
        let matched = false;

        navItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href === currentPath) {
                navItems.forEach(i => i.removeAttribute('data-active'));
                item.setAttribute('data-active', 'true');
                matched = true;
            }
        });

        if (!matched && (currentPath === 'data_produksi.php' || currentPath === 'parameter_ekonomi.php')) {
            navItems.forEach(i => i.removeAttribute('data-active'));
            const inputDataBtn = document.querySelector('button.nav-item');
            if (inputDataBtn) inputDataBtn.setAttribute('data-active', 'true');
        }

        resetLineToActive();
    }

    window.addEventListener('DOMContentLoaded', checkCurrentPage);
    window.addEventListener('resize', resetLineToActive);

    document.querySelectorAll('button, .nav-item').forEach(btn => {
        btn.addEventListener('mousedown', () => { btn.style.transform = 'scale(0.97)'; });
        btn.addEventListener('mouseup', () => { btn.style.transform = 'scale(1)'; });
        btn.addEventListener('mouseleave', () => { btn.style.transform = 'scale(1)'; });
    });
</script>
</body>
</html>