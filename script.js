// Javasript: Alert sambutan saat halaman dimuat
window.onload = function() {
    alert("Selamat datang di Curriculum Vitae Fani Mulyana Nasution!");
};

// Tambahkan interaksi pada gambar galeri
document.addEventListener('DOMContentLoaded', function () {
    const galeriGambar = document.querySelectorAll('.container img');

    galeriGambar.forEach((img, index) => {
        img.addEventListener('click', () => {
            alert(`Anda mengklik gambar ke-${index + 1}`);
        });
    });
});
