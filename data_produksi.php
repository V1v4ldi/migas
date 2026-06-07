<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>

<title>PetroManage | Input Data Produksi</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
                "outline-variant": "#c3c6d6",
                "primary": "#003d9b",
                "on-surface": "#191c1e",
                "on-surface-variant": "#434654"
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
.material-symbols-outlined {
    vertical-align: middle;
}
input {
    padding: 10px 14px !important;
}
input:focus {
    border-color: #003d9b !important;
    box-shadow: 0 0 0 2px rgba(0, 61, 155, 0.1) !important;
}
</style>
</head>

<body class="overflow-x-hidden pt-16">

<?php include 'navbar.php'; ?>

<main class="py-8 px-4 max-w-[1440px] mx-auto min-h-screen">

    <section class="bg-white rounded-2xl border border-outline-variant shadow-sm overflow-hidden">

        <div class="flex flex-col sm:flex-row justify-between sm:items-center p-6 border-b border-outline-variant/60 gap-4">
            <div>
                <h2 class="text-xl font-bold text-on-surface tracking-tight">
                    Data Produksi Tahunan
                </h2>
                <p class="text-sm text-on-surface-variant mt-1">
                    Input rincian volume produksi dan estimasi pendapatan kotor tahunan.
                </p>
            </div>
            <button
                id="openModal"
                class="flex items-center justify-center gap-1.5 bg-[#003d9b] hover:bg-[#002d75] text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-sm transition-all active:scale-95 duration-200 shrink-0 self-start sm:self-center">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Tambah Data
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[1000px]">
                <thead class="bg-[#edeef0] text-on-surface-variant text-xs font-bold uppercase tracking-wider">
                    <tr>
                        <th class="p-4 border-b border-outline-variant/60">Tahun</th>
                        <th class="p-4 border-b border-outline-variant/60">Produksi (bbl)</th>
                        <th class="p-4 border-b border-outline-variant/60">Income (USD)</th>
                        <th class="p-4 border-b border-outline-variant/60">OPEX</th>
                        <th class="p-4 border-b border-outline-variant/60">Depresiasi</th>
                        <th class="p-4 border-b border-outline-variant/60">Taxable Income</th>
                        <th class="p-4 border-b border-outline-variant/60">Tax</th>
                        <th class="p-4 border-b border-outline-variant/60">NCF</th>
                        <th class="p-4 border-b border-outline-variant/60 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody" class="text-sm font-medium text-on-surface-variant divide-y divide-outline-variant/20">
                    <tr>
                        <td colspan="9" class="text-center text-on-surface-variant/60 py-12 bg-slate-50/50">
                            <span class="material-symbols-outlined text-[32px] block mb-2 opacity-60">database_off</span>
                            Belum ada records data produksi.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between items-center p-6 border-t border-outline-variant/60 bg-slate-50">
            <div class="flex items-center gap-1.5 text-sm text-on-surface-variant">
                <span>Total Item Data:</span>
                <span id="totalData" class="font-bold text-on-surface bg-slate-200/60 px-2.5 py-0.5 rounded-md">0</span>
            </div>
            <button class="bg-[#003d9b] hover:bg-[#002d75] text-white px-6 py-2.5 rounded-xl font-bold text-sm shadow-sm hover:shadow-md transition-all active:scale-95 duration-200">
                Simpan
            </button>
        </div>

    </section>
</main>

<div id="modal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50 p-4 backdrop-blur-sm transition-all">
    <div class="bg-white rounded-2xl shadow-xl p-6 w-full max-w-md border border-outline-variant/40">
        <h2 class="text-lg font-bold text-on-surface tracking-tight mb-4">
            Tambah
        </h2>
        <div class="space-y-4">
            <div>
                <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">Tahun Proyek</label>
                <input id="tahun" type="number" placeholder="Contoh: 2026" class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all text-sm">
            </div>
            <div>
                <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">Jumlah Volume Produksi (bbl)</label>
                <input id="produksi" type="number" placeholder="Contoh: 850000" class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all text-sm">
            </div>
            <div>
                <label class="block mb-1.5 text-sm font-semibold text-on-surface-variant">Gross Income / Pendapatan (USD)</label>
                <input id="income" type="number" placeholder="Contoh: 7500000" class="w-full border border-outline-variant focus:border-[#003d9b] rounded-xl transition-all text-sm">
            </div>
        </div>
        <div class="flex justify-end gap-3 mt-6 pt-4 border-t border-outline-variant/40">
            <button id="closeModal" class="px-5 py-2.5 border border-outline-variant rounded-xl font-bold text-sm text-on-surface-variant hover:bg-slate-100 transition-all active:scale-95 duration-200">
                Batal
            </button>
            <button id="saveData" class="px-5 py-2.5 bg-[#003d9b] hover:bg-[#002d75] text-white rounded-xl font-bold text-sm shadow-sm transition-all active:scale-95 duration-200">
                Tambahkan
            </button>
        </div>
    </div>
</div>

<script>
const modal = document.getElementById('modal');

function updateTotalData() {
    const tableBody = document.getElementById('tableBody');
    let total = tableBody.querySelectorAll('tr:not(.empty-row)').length;
    
    if (tableBody.innerText.includes('Belum ada records')) {
        total = 0;
    }
    document.getElementById('totalData').textContent = total;
}

document.getElementById('openModal').addEventListener('click', () => {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
});

document.getElementById('closeModal').addEventListener('click', () => {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
});

document.getElementById('saveData').addEventListener('click', () => {
    const tahun = document.getElementById('tahun').value || '-';
    const produksi = document.getElementById('produksi').value ? parseFloat(document.getElementById('produksi').value).toLocaleString('en-US') : '-';
    const income = document.getElementById('income').value ? '$' + parseFloat(document.getElementById('income').value).toLocaleString('en-US') : '-';

    const tableBody = document.getElementById('tableBody');

    if (tableBody.innerText.includes('Belum ada records')) {
        tableBody.innerHTML = '';
    }

    const row = document.createElement('tr');
    row.classList.add('hover:bg-surface-container-low/50', 'transition-colors');

    row.innerHTML = `
        <td class="p-4 font-bold text-on-surface">${tahun}</td>
        <td class="p-4">${produksi}</td>
        <td class="p-4">${income}</td>
        <td class="p-4 text-on-surface-variant/40 font-normal">-</td>
        <td class="p-4 text-on-surface-variant/40 font-normal">-</td>
        <td class="p-4 text-on-surface-variant/40 font-normal">-</td>
        <td class="p-4 text-on-surface-variant/40 font-normal">-</td>
        <td class="p-4 text-on-surface-variant/40 font-normal">-</td>
        <td class="p-4 text-center">
            <button class="deleteRow text-on-surface-variant hover:text-red-600 font-bold flex items-center gap-0.5 mx-auto transition active:scale-95">
                <span class="material-symbols-outlined text-[16px]">delete</span> Hapus
            </button>
        </td>
    `;

    tableBody.appendChild(row);
    updateTotalData();

    document.getElementById('tahun').value = '';
    document.getElementById('produksi').value = '';
    document.getElementById('income').value = '';

    modal.classList.add('hidden');
    modal.classList.remove('flex');
});

document.addEventListener('click', function(e) {
    if (e.target.closest('.deleteRow')) {
        e.target.closest('tr').remove();
        const tbody = document.getElementById('tableBody');

        if (tbody.children.length === 0) {
            tbody.innerHTML = `
                <tr class="empty-row">
                    <td colspan="9" class="text-center text-on-surface-variant/60 py-12 bg-slate-50/50">
                        <span class="material-symbols-outlined text-[32px] block mb-2 opacity-60">database_off</span>
                        Belum ada records data produksi.
                    </td>
                </tr>
            `;
        }
        updateTotalData();
    }
});

document.querySelectorAll('button').forEach(btn => {
    btn.addEventListener('mousedown', () => { btn.style.transform = 'scale(0.96)'; });
    btn.addEventListener('mouseup', () => { btn.style.transform = 'scale(1)'; });
    btn.addEventListener('mouseleave', () => { btn.style.transform = 'scale(1)'; });
});
</script>

</body>
</html>