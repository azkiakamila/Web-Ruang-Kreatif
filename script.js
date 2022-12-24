var jumlah;
var sisi1;
var sisi2;
var tinggi;
function hitung() {
	sisi1 = parseFloat(document.getElementById("ipt_sisi1").value);
    sisi2 = parseFloat(document.getElementById("ipt_sisi2").value);
    tinggi = parseFloat(document.getElementById("ipt_tinggi").value);
	jumlah = (2*(sisi1+sisi2)*tinggi)/12;
	document.getElementById('opt_jumlah').value = jumlah;
}