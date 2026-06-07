<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>PetroManage | Parameter Ekonomi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
            }
          }
        }
      }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fb;
            color: #191c1e;
        }
        input, select {
            padding: 10px 14px !important;
        }
        input:focus, select:focus {
            border-color: #003d9b !important;
            box-shadow: 0 0 0 2px rgba(0, 61, 155, 0.1) !important;
        }
    </style>
</head>
<body class="pt-16">

<?php include 'navbar.php'; ?>

<main class="py-8 px-4 max-w-[1440px] mx-auto min-h-screen">


    <div class="bg-white rounded-2xl border border-outline-variant shadow-sm p-6 mb-6">
        <div class="flex items-start gap-4">
            <div class="p-3 bg-[#edeef0] text-on-surface-variant rounded-xl flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined text-[24px]">settings_accessibility</span>
            </div>
            <div>
                <h2 class="text-xl font-bold text-on-surface tracking-tight">
                    Input Parameter Ekonomi
                </h2>
                <p class="text-sm text-on-surface-variant mt-1">
                    Data investasi dialokasikan pada Tahun 0 (masa pengembangan awal), sementara parameter operasional diterapkan sepanjang umur keekonomian lapangan proyek.
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden flex flex-col justify-between">
            <div>
                <div class="p-6 border-b border-outline-variant/60 flex items-center gap-3 bg-[#edeef0]">
                    <span class="material-symbols-outlined text-on-surface-variant">account_balance</span>
                    <div>
                        <h3 class="text-base font-bold text-on-surface">Data Investasi</h3>
                        <p class="text-xs font-medium text-on-surface-variant">Biaya pengembangan modal awal lapangan</p>
                    </div>
                </div>

                <div class="p-6 space-y-5">
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Investasi Capital / CAPEX (USD)
                        </label>
                        <input
                            id="input-capex"
                            type="number"
                            placeholder="Contoh: 50000000"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Investasi Non-Capital (USD)
                        </label>
                        <input
                            id="input-non-capex"
                            type="number"
                            placeholder="Contoh: 12000000"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>
                    
                    <div class="pt-4 border-t border-dashed border-outline-variant/60">
                        <label class="block mb-1.5 text-sm font-bold text-[#003d9b]">
                            Total Investasi (USD)
                        </label>
                        <input
                            id="input-total-investasi"
                            type="text"
                            placeholder="0"
                            readonly
                            class="w-full bg-slate-50 border border-outline-variant rounded-xl font-bold text-[#003d9b] text-sm cursor-not-allowed">
                    </div>
                </div>
            </div>
            
            <div class="p-6 pt-0">
                <div class="bg-slate-50 border border-outline-variant/60 rounded-xl p-4 flex items-start gap-3">
                    <span class="material-symbols-outlined text-on-surface-variant text-[20px] mt-0.5">info</span>
                    <p class="text-xs text-on-surface-variant font-medium leading-relaxed">
                        Pengeluaran modal (CAPEX) akan terdepresiasi berdasarkan metode yang dipilih pada kolom parameter ekonomi di sebelah kanan.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">
            <div class="p-6 border-b border-outline-variant/60 flex items-center gap-3 bg-[#edeef0]">
                <span class="material-symbols-outlined text-on-surface-variant">analytics</span>
                <div>
                    <h3 class="text-base font-bold text-on-surface">Parameter Ekonomi</h3>
                    <p class="text-xs font-medium text-on-surface-variant">Variabel kalkulasi instrumen PSC & cash flow</p>
                </div>
            </div>

            <div class="p-6 space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Kenaikan OPEX (%) (Setelah 5 Tahun Awal)
                        </label>
                        <input
                            type="number"
                            placeholder="Contoh: 3"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Tarif Pajak Kontraktor (%)
                        </label>
                        <input
                            type="number"
                            placeholder="Contoh: 22"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Laju Decline Produksi (%/th)
                        </label>
                        <input
                            type="number"
                            placeholder="Contoh: 10"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>

                    <div>
                        <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                            Umur Proyek (Tahun)
                        </label>
                        <input
                            type="number"
                            placeholder="Contoh: 20"
                            class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all placeholder-slate-400 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">
                        Metode Depresiasi Aset
                    </label>
                    <select class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all text-sm text-on-surface-variant font-medium">
                        <option>Garis Lurus (Straight Line)</option>
                        <option>Saldo Menurun (Declining Balance)</option>
                    </select>
                </div>
            </div>
        </div>

    </div>

    <div class="flex justify-end gap-3 mt-6">
        <button class="px-5 py-2.5 border border-outline-variant rounded-xl font-bold text-sm text-on-surface-variant hover:bg-slate-100 transition-all active:scale-95 duration-200">
            Edit Data
        </button>
        <button class="bg-[#003d9b] hover:bg-[#002d75] text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-sm hover:shadow-md transition-all active:scale-95 duration-200">
            Simpan Parameter
        </button>
    </div>

</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const capexInput = document.getElementById('input-capex');
        const nonCapexInput = document.getElementById('input-non-capex');
        const totalInput = document.getElementById('input-total-investasi');

        function calculateTotal() {
            const capex = parseFloat(capexInput.value) || 0;
            const nonCapex = parseFloat(nonCapexInput.value) || 0;
            const total = capex + nonCapex;
            totalInput.value = total > 0 ? total.toLocaleString('en-US') : '';
        }

        capexInput.addEventListener('input', calculateTotal);
        nonCapexInput.addEventListener('input', calculateTotal);

        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => { btn.style.transform = 'scale(0.96)'; });
            btn.addEventListener('mouseup', () => { btn.style.transform = 'scale(1)'; });
            btn.addEventListener('mouseleave', () => { btn.style.transform = 'scale(1)'; });
        });
    });
</script>
</body>
</html>
