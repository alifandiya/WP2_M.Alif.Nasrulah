<?php

class Contoh1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		echo "<h1>Perkenalkan, Semuanya!</h1>";
        echo "Nama Saya M Alif Nasrullah.";
		echo "<p>Saya tinggal di daerah Kota Bekasi Timur.</p>";
		echo "<p>Ini adalah tugas Web Programming 2 Semester 3.</p>";
		echo "<p>Di Universitas Bina Sarana Informatika, Bekasi, Cut Meutia.</p>";
	}
}
