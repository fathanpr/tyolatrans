const text = document.querySelector(".sec-text");
const textLoad = () => {
    setTimeout(() => {
        text.textContent = "Tour Kota Majalengka";
    }, 0);
    setTimeout(() => {
        text.textContent = "Antar-Jemput Bandara";
    }, 4000);
    setTimeout(() => {
        text.textContent = "Drop-off Customer/Barang";
    }, 8000);
    setTimeout(() => {
        text.textContent = "Antar-Jemput Pengantin";
    }, 12000);
    setTimeout(() => {
        text.textContent = "Antar-Jemput Rumah Sakit";
    }, 16000); 
    setTimeout(() => {
        text.textContent = "Perjalanan Antar Kota";
    }, 18000); 
}
textLoad();
setInterval(textLoad, 12000);