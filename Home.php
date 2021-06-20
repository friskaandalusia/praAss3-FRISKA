<?php

namespace App\Controllers;

use \App\Models\PaketModel;
use \App\Models\PenghuniModel;
use \App\Models\KaryawanModel;

class Home extends BaseController
{
	public function index()
	{
		$paketModel = new PaketModel();
		$paket = $paketModel->findAll();

		$data = [
			'title' => 'Daftar Paket',
			'paket' => $paket
		];

		return view('pages/home', $data);
	}

	public function penghuni()
	{
		$penghuniModel = new PenghuniModel();
		$penghuni = $penghuniModel->findAll();
		$data = [
			'title' => 'Daftar Penghuni',
			'penghuni' => $penghuni
		];
		return view('pages/penghuni', $data);
	}

	public function karyawan()
	{
		$karyawanModel = new KaryawanModel();
		$karyawan = $karyawanModel->findAll();
		$data = [
			'title' => 'Daftar Karyawan',
			'karyawan' => $karyawan
		];
		return view('pages/karyawan', $data);
	}

	public function tambahpaket()
	{
		$data = [
			'title' => 'Tambah Data Paket'
		];
		return view('pages/tambahpaket', $data);
	}

	public function tambahpenghuni()
	{
		$data = [
			'title' => 'Tambah Data Penghuni'
		];
		return view('pages/tambahpenghuni', $data);
	}
}
