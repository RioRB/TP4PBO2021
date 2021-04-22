<?php 

/******************************************
PRAKTIKUM DPBO
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_isi
		$query = "SELECT * FROM tb_isi";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Menambahkan data
	function addData($data){
		// Inisialisasi masukkan data dari form
		$tname = $data['tname'];
		$taddress = $data['taddress'];
		$tnametrain = $data['tnametrain'];
		$tclass = $data['tclass'];
		$tdate = $data['tdate'];
		$tcheckin = 'Belum';

		// Query menambahkan data
		$query = "INSERT INTO tb_isi (name_td, address_td, name_train_td, class_td, date_td, checkin_td) VALUES ('$tname', '$taddress', '$tnametrain', '$tclass', '$tdate', '$tcheckin')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	// Menghapus data
	function delete($data){
		$id = $data; // Mengambil id data yang akan dihapus

		// Query menghapus data
		$query = "DELETE FROM tb_isi WHERE id=$id";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Mengubah atrubut status check in
	function update_status($data){
		$id = $data; // Mengambil id data yang akan dipudate status check in nya

		// Query mengupdate attribut data
		$query = "UPDATE tb_isi SET checkin_td = 'Sudah'  WHERE id=$id";

		// Mengeksekusi query
		return $this->execute($query);
	}

	// Mensorting data
	function sorting($data){
		// // Query sorting berdasarkan attribut data yang dipilih
		$query = "SELECT * FROM tb_isi ORDER BY ".$data;

		// Mengeksekusi query
		return $this->execute($query);
		
	}
}



?>
