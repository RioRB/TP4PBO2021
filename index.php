<?php

/******************************************
PRAKTIKUM DPBO
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Menambahkan data masukkan dari form
if(isset($_POST['add'])) {
	$otask->addData($_POST); // prosedur menambahkan data

	header("Location: index.php");
}

// Menghapus data tabel
if(isset($_GET['id_hapus'])) {
	$otask->delete($_GET['id_hapus']); // prosedur menghapus data

	unset($_GET['id_hapus']);

	header("Location: index.php");
}

// Mengubah salah satu isi atribut data (status check in)
if(isset($_GET['id_status'])) {
	$otask->update_status($_GET['id_status']); // prosedur mengubah isi atribut suatu data

	unset($_GET['id_status']);

	header("Location: index.php");
}

// Sorting data
if(isset($_GET['sort'])){
	$otask->sorting($_GET['sort']); // Memanggil prosedur sorting data
}

// Memanggil method getTask di kelas Task
else{
	$otask->getTask();
}
// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $tname, $taddress, $tnametrain, $tclass, $tdate, $tcheckin) = $otask->getResult()) {
	// Tampilan jika status check in nya sudah selesai
	if($tcheckin == "Sudah"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $taddress . "</td>
		<td>" . $tnametrain . "</td>
		<td>" . $tclass . "</td>
		<td>" . $tdate . "</td>
		<td>" . $tcheckin . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status check in nya blm selesai
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $taddress . "</td>
		<td>" . $tnametrain . "</td>
		<td>" . $tclass . "</td>
		<td>" . $tdate . "</td>
		<td>" . $tcheckin . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();