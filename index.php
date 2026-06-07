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
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
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
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c3c6d6;
            border-radius: 10px;
        }
        .animate-fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .animate-fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="overflow-x-hidden pt-16">

<?php include 'navbar.php'; ?>

<main class="py-8 px-margin-desktop max-w-container-max mx-auto min-h-screen">
    
    <section class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8 animate-fade-up">
        <div>
            <h1 class="text-headline-xl font-bold text-on-surface tracking-tight">Dashboard Keekonomian Lapangan Migas</h1>
            <p class="text-body-md text-on-surface-variant">Real-time indicators, production decline curves, and contract analysis.</p>
        </div>
        <div class="flex items-center gap-3 shrink-0">
            <button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2.5 rounded-xl font-semibold text-body-md shadow-md hover:bg-primary-container transition-all hover:shadow-lg active:scale-95 duration-200">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Export Report
            </button>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300 animate-fade-up">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-[24px]">oil_barrel</span>
                </div>
                <span class="text-label-md font-bold text-primary bg-primary/5 px-2.5 py-1 rounded-full flex items-center gap-0.5">
                </span>
            </div>
            <h3 class="text-on-surface-variant text-label-md font-bold uppercase tracking-wider mb-1">Total Produksi Harian</h3>
            <p class="text-headline-xl font-bold text-on-surface tracking-tight">
                <span class="count-up" data-target="2500">0</span> <span class="text-body-lg font-normal text-on-surface-variant">bbl/d</span>
            </p>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300 animate-fade-up">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-[24px]">attach_money</span>
                </div>
                <span class="text-label-md font-bold text-primary bg-primary/5 px-2.5 py-1 rounded-full flex items-center gap-0.5">
                </span>
            </div>
            <h3 class="text-on-surface-variant text-label-md font-bold uppercase tracking-wider mb-1">ICP / Harga Minyak</h3>
            <p class="text-headline-xl font-bold text-on-surface tracking-tight">
                $<span class="count-up" data-target="85">0</span>.00 <span class="text-body-lg font-normal text-on-surface-variant">/bbl</span>
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300 animate-fade-up">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-[24px]">account_balance_wallet</span>
                </div>
            </div>
            <h3 class="text-on-surface-variant text-label-md font-bold uppercase tracking-wider mb-1">Total Investasi</h3>
            <p class="text-headline-xl font-bold text-on-surface tracking-tight">
                $<span class="count-up" data-target="450">0</span>M
            </p>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300 animate-fade-up">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-[24px]">insights</span>
                </div>
                <span class="text-label-md font-bold text-primary bg-primary/5 px-2.5 py-1 rounded-full flex items-center gap-0.5">
                </span>
            </div>
            <h3 class="text-on-surface-variant text-label-md font-bold uppercase tracking-wider mb-1">Net Cash Flow Cumulative</h3>
            <p class="text-headline-xl font-bold text-on-surface tracking-tight">
                $<span class="count-up" data-target="180">0</span>M
            </p>
        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-outline-variant shadow-sm relative overflow-hidden flex flex-col justify-between animate-fade-up">
            <div>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-headline-md font-bold text-on-surface">Kurva Decline Produksi</h2>
                        <p class="text-body-md text-on-surface-variant">Forecast vs Actual Production Rate (bbl/d)</p>
                    </div>
                    <div class="flex items-center gap-4 text-label-md font-medium">
                        <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-primary"></span> Actual</div>
                        <div class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full border border-dashed border-primary/60 bg-transparent"></span> Forecasted</div>
                    </div>
                </div>
                <div class="h-64 w-full relative mt-4">
                    <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                        <div class="border-t border-outline-variant/40 w-full h-0"></div>
                        <div class="border-t border-outline-variant/40 w-full h-0"></div>
                        <div class="border-t border-outline-variant/40 w-full h-0"></div>
                        <div class="border-t border-outline-variant/40 w-full h-0"></div>
                    </div>
                    <div class="absolute inset-0 px-2">
                        <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 800 200">
                            <defs>
                                <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                    <stop offset="0%" stop-color="#003d9b" stop-opacity="0.15"></stop>
                                    <stop offset="100%" stop-color="#003d9b" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                            <path d="M0,50 Q150,60 300,90 T600,140 T800,165" fill="none" stroke="#003d9b" stroke-linecap="round" stroke-width="3"></path>
                            <path d="M600,140 T800,165" fill="none" stroke="#003d9b" stroke-dasharray="5,5" stroke-linecap="round" stroke-width="2" opacity="0.6"></path>
                            <path d="M0,50 Q150,60 300,90 T600,140 T800,165" fill="url(#chartGradient)"></path>
                            <circle class="cursor-pointer group" cx="300" cy="90" fill="#003d9b" r="6" stroke="#fff" stroke-width="2"></circle>
                        </svg>
                        <div class="absolute left-[315px] top-[45px] bg-inverse-surface text-inverse-on-surface p-3 rounded-xl shadow-xl text-label-sm pointer-events-none backdrop-blur-sm bg-opacity-95 border border-outline/20">
                            <p class="font-bold text-white mb-0.5">Kondisi Q3 2025</p>
                            <p class="text-surface-variant">Prod: 2,420 bbl/d</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mt-4 text-label-md font-semibold text-on-surface-variant px-2 border-t border-outline-variant/30 pt-3">
                <span>2023</span><span>2024</span><span>2025</span><span>2026</span><span>2027</span><span>2028</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-outline-variant shadow-sm flex flex-col justify-between animate-fade-up">
            <div>
                <h2 class="text-headline-md font-bold text-on-surface">Struktur Biaya Proyek</h2>
                <p class="text-body-md text-on-surface-variant mb-6">Persentase alokasi pengeluaran umur lapangan</p>
            </div>
            <div class="relative flex-1 flex items-center justify-center my-2">
                <div class="w-44 h-44 rounded-full border-[16px] border-primary-container/10 flex items-center justify-center relative">
                    <div class="absolute inset-0 rounded-full border-[16px] border-primary border-t-transparent border-r-transparent transform rotate-45"></div>
                    <div class="absolute inset-0 rounded-full border-[16px] border-primary-fixed-dim border-b-transparent border-l-transparent transform -rotate-12"></div>
                    <div class="text-center">
                        <p class="text-label-sm font-bold text-on-surface-variant uppercase tracking-wider">Total Capex/Opex</p>
                        <p class="text-headline-lg font-bold text-on-surface">$1.2B</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3 mt-6 border-t border-outline-variant/30 pt-4">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary shrink-0"></span>
                    <span class="text-label-md font-medium text-on-surface-variant truncate">CAPEX (45%)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary-fixed-dim shrink-0"></span>
                    <span class="text-label-md font-medium text-on-surface-variant truncate">OPEX (30%)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-primary-container shrink-0"></span>
                    <span class="text-label-md font-medium text-on-surface-variant truncate">Non-Capital (15%)</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-outline-variant shrink-0"></span>
                    <span class="text-label-md font-medium text-on-surface-variant truncate">Tax & Govt (10%)</span>
                </div>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6 animate-fade-up">
        <div class="bg-white p-5 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300">
            <p class="text-label-sm font-bold text-on-surface-variant uppercase tracking-wider mb-1">NPV (@10%)</p>
            <p class="text-headline-md font-bold text-primary mb-1.5">$84.62M</p>
            <span class="text-[11px] font-semibold text-primary bg-primary/5 px-2 py-0.5 rounded-full">Layak (NPV &gt; 0)</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300">
            <p class="text-label-sm font-bold text-on-surface-variant uppercase tracking-wider mb-1">IRR</p>
            <p class="text-headline-md font-bold text-primary mb-1.5">24.15%</p>
            <span class="text-[11px] font-semibold text-primary bg-primary/5 px-2 py-0.5 rounded-full">IRR &gt; WACC (12%)</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300">
            <p class="text-label-sm font-bold text-on-surface-variant uppercase tracking-wider mb-1">POT (Pay Out Time)</p>
            <p class="text-headline-md font-bold text-primary mb-1.5">3.2 Tahun</p>
            <span class="text-[11px] font-semibold text-primary bg-primary/5 px-2 py-0.5 rounded-full">Target: &lt; 5 Tahun</span>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300">
            <p class="text-label-sm font-bold text-on-surface-variant uppercase tracking-wider mb-1">Profitability Index</p>
            <p class="text-headline-md font-bold text-primary mb-1.5">1.38</p>
            <span class="text-[11px] font-semibold text-primary bg-primary/5 px-2 py-0.5 rounded-full">Menguntungkan (&gt;1)</span>
        </div>
    </section>

    <section class="animate-fade-up">
        <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden flex flex-col">
            <div class="p-6 border-b border-outline-variant/60 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                <div>
                    <h2 class="text-headline-md font-bold text-on-surface">Tabel Ringkasan</h2>
                </div>
                <button class="text-primary text-label-md font-bold flex items-center gap-1 hover:text-primary-container transition-colors self-start sm:self-center">
                    Lihat Laporan Lengkap <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </button>
            </div>
            
            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full text-left border-collapse min-w-[1000px]">
                    <thead class="bg-surface-container-low text-on-surface-variant text-label-md font-bold uppercase tracking-wider">
                        <tr>
                            <th class="p-4 border-b border-outline-variant">Tahun</th>
                            <th class="p-4 border-b border-outline-variant">Produksi (Mbbl)</th>
                            <th class="p-4 border-b border-outline-variant">Gross Income ($M)</th>
                            <th class="p-4 border-b border-outline-variant">Investasi CAPEX</th>
                            <th class="p-4 border-b border-outline-variant">Non-Capital</th>
                            <th class="p-4 border-b border-outline-variant">OPEX ($M)</th>
                            <th class="p-4 border-b border-outline-variant">Depresiasi</th>
                            <th class="p-4 border-b border-outline-variant">Taxable Income</th>
                            <th class="p-4 border-b border-outline-variant">Pajak ($M)</th>
                            <th class="p-4 border-b border-outline-variant">Net Cash Flow ($M)</th>
                        </tr>
                    </thead>
                    <tbody class="text-body-md font-medium text-on-surface-variant divide-y divide-outline-variant/20">
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="p-4 font-bold text-on-surface">2023</td>
                            <td class="p-4">912.5</td>
                            <td class="p-4">$77.56</td>
                            <td class="p-4">$18.25</td>
                            <td class="p-4">$5.00</td>
                            <td class="p-4">$12.40</td>
                            <td class="p-4">$4.56</td>
                            <td class="p-4">$37.35</td>
                            <td class="p-4">$14.94</td>
                            <td class="p-4 text-primary font-bold">+$22.41</td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="p-4 font-bold text-on-surface">2024</td>
                            <td class="p-4">895.0</td>
                            <td class="p-4">$76.07</td>
                            <td class="p-4">$12.00</td>
                            <td class="p-4">$4.50</td>
                            <td class="p-4">$13.10</td>
                            <td class="p-4">$5.10</td>
                            <td class="p-4">$41.37</td>
                            <td class="p-4">$16.55</td>
                            <td class="p-4 text-primary font-bold">+$24.82</td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="p-4 font-bold text-on-surface">2025</td>
                            <td class="p-4">868.2</td>
                            <td class="p-4">$73.80</td>
                            <td class="p-4">$8.00</td>
                            <td class="p-4">$3.20</td>
                            <td class="p-4">$14.20</td>
                            <td class="p-4">$4.80</td>
                            <td class="p-4">$43.60</td>
                            <td class="p-4">$17.44</td>
                            <td class="p-4 text-primary font-bold">+$26.16</td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="p-4 font-bold text-on-surface">2026</td>
                            <td class="p-4">840.5</td>
                            <td class="p-4">$71.44</td>
                            <td class="p-4">$0.00</td>
                            <td class="p-4">$2.10</td>
                            <td class="p-4">$15.50</td>
                            <td class="p-4">$3.90</td>
                            <td class="p-4">$49.94</td>
                            <td class="p-4">$19.98</td>
                            <td class="p-4 text-primary font-bold">+$29.96</td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="p-4 font-bold text-on-surface">2027</td>
                            <td class="p-4">810.0</td>
                            <td class="p-4">$68.85</td>
                            <td class="p-4">$0.00</td>
                            <td class="p-4">$1.50</td>
                            <td class="p-4">$16.80</td>
                            <td class="p-4">$3.20</td>
                            <td class="p-4">$47.35</td>
                            <td class="p-4">$18.94</td>
                            <td class="p-4 text-primary font-bold">+$28.41</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const animElements = document.querySelectorAll('.animate-fade-up');
        animElements.forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('show');
            }, index * 100); 
        });

        const counters = document.querySelectorAll('.count-up');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const speed = target / 50; 
            
            const updateCount = () => {
                const count = +counter.innerText;
                if (count < target) {
                    counter.innerText = Math.ceil(count + speed);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target.toLocaleString('en-US');
                }
            };
            updateCount();
        });

        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => { btn.style.transform = 'scale(0.96)'; });
            btn.addEventListener('mouseup', () => { btn.style.transform = 'scale(1)'; });
            btn.addEventListener('mouseleave', () => { btn.style.transform = 'scale(1)'; });
        });
    });
</script>
</body>
</html>