function validasi(){
	var NIK = document.getElementById("NIK").value;
	var nama = document.getElementById("nama").value;
	var NIS = document.getElementById("NIS").value;
	var Asal = document.getElementById("Asal").value;
	var Nilai = document.getElementById("Nilai").value;
	if(NIK != "" && nama != "" && NIS != "" && Asal !="" && Nilai !=""){
			return true;
	}else{
		alert('Silahkan isi data dengan lengkap..!');
	}
}