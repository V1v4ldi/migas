<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PetroManage | Infrastructure Portal</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .chart-gradient {
            background: linear-gradient(180deg, rgba(0, 61, 155, 0.1) 0%, rgba(0, 61, 155, 0) 100%);
        }
    </style>
</head>
<body class="overflow-x-hidden">
<!-- TopNavBar -->
<?php include 'navbar.php'; ?>

<main class="pt-24 pb-12 px-margin-desktop max-w-container-max mx-auto min-h-screen">
<!-- Header Section -->
<section class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
<div>
<h1 class="text-headline-xl font-headline-xl text-on-surface mb-1">Helloo, Engineer</h1>
<p class="text-body-md font-body-md text-on-surface-variant">Real-time infrastructure analysis and production forecasting.</p>
</div>
<div class="flex items-center gap-3">

<button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md shadow-sm hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-[18px]">download</span>
                    Export PDF/Excel
                </button>
</div>
</section>
<!-- KPI Row -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<div class="bg-white p-6 rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined">oil_barrel</span>
</div>
<span class="text-label-md font-label-md text-green-600 bg-green-50 px-2 py-1 rounded-full">+5.2%</span>
</div>
<h3 class="text-on-surface-variant text-label-md font-label-md uppercase tracking-wider mb-1">Jumlah Produksi</h3>
<p class="text-headline-lg font-headline-lg text-on-surface">2,500 <span class="text-body-md font-body-md text-on-surface-variant">bbl/d</span></p>
</div>
<div class="bg-white p-6 rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-label-md font-label-md text-green-600 bg-green-50 px-2 py-1 rounded-full">+1.2%</span>
</div>
<h3 class="text-on-surface-variant text-label-md font-label-md uppercase tracking-wider mb-1">Harga Minyak Saat Ini</h3>
<p class="text-headline-lg font-headline-lg text-on-surface">$85.00 <span class="text-body-md font-body-md text-on-surface-variant">/bbl</span></p>
</div>
<div class="bg-white p-6 rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined">account_balance_wallet</span>
</div>
<span class="text-label-md font-label-md text-green-600 bg-green-50 px-2 py-1 rounded-full">+10%</span>
</div>
<h3 class="text-on-surface-variant text-label-md font-label-md uppercase tracking-wider mb-1">Total Pendapatan</h3>
<p class="text-headline-lg font-headline-lg text-on-surface">$450M</p>
</div>
<div class="bg-white p-6 rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined">trending_up</span>
</div>
<span class="text-label-md font-label-md text-green-600 bg-green-50 px-2 py-1 rounded-full">+8.5%</span>
</div>
<h3 class="text-on-surface-variant text-label-md font-label-md uppercase tracking-wider mb-1">Net Cash Flow</h3>
<p class="text-headline-lg font-headline-lg text-on-surface">$180M</p>
</div>
</section>
<!-- Analytics Grid -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
<!-- Decline Curve -->
<div class="lg:col-span-2 bg-white p-6 rounded-xl border border-outline-variant shadow-sm relative overflow-hidden">
<div class="flex justify-between items-center mb-8">
<h2 class="text-headline-md font-headline-md text-on-surface">Penurunan Produksi</h2>
<div class="flex items-center gap-4 text-label-sm font-label-sm">
<div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-primary"></span> Actual</div>
<div class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-outline"></span> Forecasted</div>
</div>
</div>
<div class="h-64 w-full relative">
<!-- Faux Line Chart Graphic -->
<div class="absolute inset-0 flex items-end justify-between px-2">
<div class="w-full h-full chart-gradient absolute bottom-0"></div>
<svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 800 200">
<path d="M0,80 Q100,60 200,90 T400,120 T600,150 T800,170" fill="none" stroke="#003d9b" stroke-linecap="round" stroke-width="3"></path>
<path d="M0,80 Q100,60 200,90 T400,120 T600,150 T800,170 V200 H0 Z" fill="url(#chartFill)" opacity="0.1"></path>
<defs>
<lineargradient id="chartFill" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#003d9b"></stop>
<stop offset="100%" stop-color="#fff"></stop>
</lineargradient>
</defs>
<circle cx="200" cy="90" fill="#003d9b" r="4"></circle>
</svg>
<!-- Tooltip -->
<div class="absolute left-[205px] top-[50px] bg-inverse-surface text-inverse-on-surface p-2 rounded shadow-lg text-label-sm pointer-events-none">
<p class="font-bold">Q3 2023</p>
<p>Prod: 2,420 bbl/d</p>
</div>
</div>
<!-- Axis Grid -->
<div class="absolute inset-0 border-b border-l border-outline-variant opacity-30 flex flex-col justify-between pointer-events-none">
<div class="border-t border-outline-variant w-full h-0"></div>
<div class="border-t border-outline-variant w-full h-0"></div>
<div class="border-t border-outline-variant w-full h-0"></div>
</div>
</div>
<div class="flex justify-between mt-4 text-label-sm font-label-sm text-on-surface-variant">
<span>2019</span><span>2020</span><span>2021</span><span>2022</span><span>2023</span><span>2024</span>
</div>
</div>
<!-- Economic Overview Donut -->
<div class="bg-white p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col">
<h2 class="text-headline-md font-headline-md text-on-surface mb-6">Ringkasan Ekonomi Lapangan</h2>
<div class="relative flex-1 flex items-center justify-center">
<div class="w-48 h-48 rounded-full border-[18px] border-primary-container flex items-center justify-center relative">
<div class="absolute inset-0 rounded-full border-[18px] border-primary border-t-transparent border-r-transparent transform rotate-45"></div>
<div class="text-center">
<p class="text-label-sm font-label-sm text-on-surface-variant uppercase">Total Assets</p>
<p class="text-headline-lg font-headline-lg font-bold">$1.2B</p>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-4 mt-6">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary"></span>
<span class="text-label-md font-label-md text-on-surface-variant">Profit (45%)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-primary-container"></span>
<span class="text-label-md font-label-md text-on-surface-variant">OPEX (20%)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-secondary"></span>
<span class="text-label-md font-label-md text-on-surface-variant">Tax (15%)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-tertiary-container"></span>
<span class="text-label-md font-label-md text-on-surface-variant">CAPEX (20%)</span>
</div>
</div>
</div>
</section>
<!-- Middle Stats Grid -->
<section class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant flex items-center gap-4">
<div class="p-2 bg-white rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">architecture</span>
</div>
<div>
<p class="text-label-sm font-label-sm text-on-surface-variant">Total CAPEX</p>
<p class="text-headline-md font-headline-md">$500M</p>
</div>
</div>
<div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant flex items-center gap-4">
<div class="p-2 bg-white rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">engineering</span>
</div>
<div>
<p class="text-label-sm font-label-sm text-on-surface-variant">Total OPEX</p>
<p class="text-headline-md font-headline-md">$120M</p>
</div>
</div>
<div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant flex items-center gap-4">
<div class="p-2 bg-white rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">database</span>
</div>
<div>
<p class="text-label-sm font-label-sm text-on-surface-variant">Remaining Reserves</p>
<p class="text-headline-md font-headline-md">15.5 M</p>
</div>
</div>
<div class="bg-surface-container-low p-4 rounded-xl border border-outline-variant flex items-center gap-4">
<div class="p-2 bg-white rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">calendar_today</span>
</div>
<div>
<p class="text-label-sm font-label-sm text-on-surface-variant">Project Life</p>
<p class="text-headline-md font-headline-md">12 Yrs</p>
</div>
</div>
</section>
<!-- Table and Summary Section -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Financial Summary Table -->
<div class="lg:col-span-2 bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden flex flex-col">
<div class="p-6 border-b border-outline-variant flex justify-between items-center">
<h2 class="text-headline-md font-headline-md text-on-surface">Financial Summary Table</h2>
<button class="text-primary text-label-md font-label-md flex items-center gap-1 hover:underline">
                        View Full Report <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</button>
</div>
<div class="overflow-x-auto custom-scrollbar">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low text-on-surface-variant text-label-md font-label-md">
<tr>
<th class="p-4 font-semibold border-b border-outline-variant">Tahun</th>
<th class="p-4 font-semibold border-b border-outline-variant">Produksi (Mbbl)</th>
<th class="p-4 font-semibold border-b border-outline-variant">Income ($M)</th>
<th class="p-4 font-semibold border-b border-outline-variant">Investasi Capital</th>
<th class="p-4 font-semibold border-b border-outline-variant">Investasi Non-Capital</th>
<th class="p-4 font-semibold border-b border-outline-variant">OPEX ($M)</th>
<th class="p-4 font-semibold border-b border-outline-variant">Despresiasi</th>
<th class="p-4 font-semibold border-b border-outline-variant">Taxable Income</th>
<th class="p-4 font-semibold border-b border-outline-variant">Tax</th>
<th class="p-4 font-semibold border-b border-outline-variant">Net Cash Flow ($M)</th>
</tr>
</thead>
<tbody class="text-body-md font-body-md divide-y divide-outline-variant/30">
<tr class="hover:bg-surface-container transition-colors">
<td class="p-4 font-medium text-on-surface">2023</td>
<td class="p-4">912.5</td>
<td class="p-4">$77.56</td>
<td class="p-4">$18.25</td>
<td class="p-4 text-green-600 font-semibold">$45.31</td>
<td class="p-4">$45.31</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="p-4 font-medium text-on-surface">2024</td>
<td class="p-4">895.0</td>
<td class="p-4">$76.07</td>
<td class="p-4">$17.90</td>
<td class="p-4 text-green-600 font-semibold">$44.17</td>
<td class="p-4">$89.48</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="p-4 font-medium text-on-surface">2025</td>
<td class="p-4">868.2</td>
<td class="p-4">$73.80</td>
<td class="p-4">$17.36</td>
<td class="p-4 text-green-600 font-semibold">$42.44</td>
<td class="p-4">$131.92</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="p-4 font-medium text-on-surface">2026</td>
<td class="p-4">840.5</td>
<td class="p-4">$71.44</td>
<td class="p-4">$16.81</td>
<td class="p-4 text-green-600 font-semibold">$40.63</td>
<td class="p-4">$172.55</td>
</tr>
<tr class="hover:bg-surface-container transition-colors">
<td class="p-4 font-medium text-on-surface">2027</td>
<td class="p-4">810.0</td>
<td class="p-4">$68.85</td>
<td class="p-4">$16.20</td>
<td class="p-4 text-green-600 font-semibold">$38.65</td>
<td class="p-4">$211.20</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Summary Metrics Card -->
<div class="bg-primary text-on-primary p-6 rounded-xl shadow-lg flex flex-col justify-between">
<div>
<h2 class="text-headline-md font-headline-md mb-6 border-b border-on-primary/20 pb-4">Indikator Ekonomi</h2>
<div class="space-y-6">
<div class="flex justify-between items-end border-b border-on-primary/10 pb-2">
<div>
<p class="text-on-primary/70 text-label-sm font-label-sm uppercase tracking-widest">NPV (10%)</p>
<p class="text-headline-lg font-headline-lg">$342.5 M</p>
</div>
<span class="material-symbols-outlined opacity-50">analytics</span>
</div>
<div class="flex justify-between items-end border-b border-on-primary/10 pb-2">
<div>
<p class="text-on-primary/70 text-label-sm font-label-sm uppercase tracking-widest">IRR</p>
<p class="text-headline-lg font-headline-lg">24.5%</p>
</div>
<span class="material-symbols-outlined opacity-50">show_chart</span>
</div>
<div class="flex justify-between items-end border-b border-on-primary/10 pb-2">
<div>
<p class="text-on-primary/70 text-label-sm font-label-sm uppercase tracking-widest">Payback Period</p>
<p class="text-headline-lg font-headline-lg">4.2 Yrs</p>
</div>
<span class="material-symbols-outlined opacity-50">history</span>
</div>
</div>
</div>
<div class="mt-8 pt-6 border-t border-on-primary/20 flex flex-col gap-4">
<div class="flex justify-between">
<span class="text-label-md font-label-md text-on-primary/80">Profitability Index</span>
<span class="text-label-md font-label-md font-bold">1.68x</span>
</div>
<div class="flex justify-between">
<span class="text-label-md font-label-md text-on-primary/80">Breakeven Price</span>
<span class="text-label-md font-label-md font-bold">$38.50/bbl</span>
</div>
</div>
</div>
</section>
</main>
<!-- Interactive script for demo micro-interactions -->
<script>
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => {
                btn.style.transform = 'scale(0.98)';
            });
            btn.addEventListener('mouseup', () => {
                btn.style.transform = 'scale(1)';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'scale(1)';
            });
        });
    </script>
</body></html>