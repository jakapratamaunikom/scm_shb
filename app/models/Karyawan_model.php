<?php
	// get all data karyawan
	function get_all_karyawan($koneksi, $config_db){
		$query = get_dataTable($config_db);
		$statement = $koneksi->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		// tutup_koneksi($koneksi);

		return $result;
	}

	// get data karyawan by id
	function get_data_by_id($koneksi, $id){
		$query = "SELECT * FROM karyawan WHERE id=:id";

		$statement = $koneksi->prepare($query);
		$statement->bindParam(':id', $id);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	// function insert
	function insertKaryawan($koneksi, $data){
		$query = "INSERT INTO karyawan ";
		$query .= "(no_induk, nik, npwp, nama, tempat_lahir, tgl_lahir, jk, alamat, telp, email, foto, jabatan, status)";
		$query .= "VALUES (:no_induk, :nik, :npwp, :nama, :tempat_lahir, :tgl_lahir, :jk, :alamat, :telp, :email, :foto, :jabatan, :status)";

		$statement = $koneksi->prepare($query);
		$statement->bindParam(':no_induk', $data['no_induk']);
		$statement->bindParam(':nik', $data['nik']);
		$statement->bindParam(':npwp', $data['npwp']);
		$statement->bindParam(':nama', $data['nama']);
		$statement->bindParam(':tempat_lahir', $data['tempat_lahir']);
		$statement->bindParam(':tgl_lahir', $data['tgl_lahir']);
		$statement->bindParam(':jk', $data['jk']);
		$statement->bindParam(':alamat', $data['alamat']);
		$statement->bindParam(':telp', $data['telp']);
		$statement->bindParam(':email', $data['email']);
		$statement->bindParam(':foto', $data['foto']);
		$statement->bindParam(':jabatan', $data['jabatan']);
		$statement->bindParam(':status', $data['status']);
		$result = $statement->execute();

		return $result;
	}

	// function update
	function updateKaryawan($koneksi, $data){
		// $data = setNull($data);
		$query = "UPDATE karyawan SET ";
		$query .= "nik=:nik, npwp=:npwp, nama=:nama, tempat_lahir=:tempat_lahir, tgl_lahir=:tgl_lahir, jk=:jk, ";
		$query .= "alamat=:alamat, telp=:telp, email=:email, jabatan=:jabatan WHERE id=:id";

		$statement = $koneksi->prepare($query);
		$statement->bindParam(':nik', $data['nik']);
		$statement->bindParam(':npwp', $data['npwp']);
		$statement->bindParam(':nama', $data['nama']);
		$statement->bindParam(':tempat_lahir', $data['tempat_lahir']);
		$statement->bindParam(':tgl_lahir', $data['tgl_lahir']);
		$statement->bindParam(':jk', $data['jk']);
		$statement->bindParam(':alamat', $data['alamat']);
		$statement->bindParam(':telp', $data['telp']);
		$statement->bindParam(':email', $data['email']);
		$statement->bindParam(':jabatan', $data['jabatan']);
		$statement->bindParam(':id', $data['id_karyawan']);
		$result = $statement->execute();

		return $result;
	}