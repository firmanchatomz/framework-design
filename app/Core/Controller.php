<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Core;

// -------------------------------------------------------------------------------------------------

class Controller
{
	private $link_error = '../app/Repository/error/404.php';
	protected $data 		= null;
	//Fungsi untuk memanggil halaman page
	public function view($view, $data= [])
	{
		if (!is_null($data))
			extract($data);
		if ( file_exists('../app/Views/'.$view.'.php') ) {
			require_once '../app/Views/'.$view.'.php';
		}else{
			require_once $this->link_error;
		}
	}

	//Fungsi untuk mengalihkan kehalaman lain
	public function redirect($link)
	{
		$path = base_url().$link;
		header("location: $path");
	}

	//Fungsi untuk mendefinisikan halaman header page
	public function setHeader($header)
	{
		$this->header 		= $header;
	}

	//Fungsi untuk mendefinisikan halaman footer page
	public function setFooter($footer)
	{
		$this->footer 		= $footer;
	}

	// Fungsi untuk mendefinisikan data
	public function setData($data)
	{
		$this->data 		= $data;
	}

	// Fungsi mengambil data yang disetting untuk tempate admin dan homepage
	public function getData()
	{
		return $this->data;
	}

	//Fungsi untuk memanggil method setheader
	public function getHeader($data=null)
	{
		if (!isset($this->header))
			warning('Link Header belum terdefinisi','$this->setheader');
		self::view($this->header, $data);
	}

	//Fungsi untuk memanggil method setfooter
	public function getFooter($data=null)
	{
		if (!isset($this->footer))
			warning('Link Footer belum terdefinisi','$this->setfooter');
		self::view($this->footer, $data);
	}

	//Fungsi untuk menampilkan halaman yang komplek (terdiri dari header, page dan footer)
	public function page($view,$data=NULL){
		self::getheader($this->data);
		self::view($view, $data);
		self::getfooter($this->data);
	}

	// Fungsi pemanggilan header dan footer dari template Admin
	public function adminPage($view, $data=[])
	{
		$template = [temp_header_admin(),temp_footer_admin()];
		$this->template($template, $view, $data);
	}

	// Fungsi pemanggilan header dan footer dari template Admin
	public function homePage($view, $data=[])
	{
		$template = [temp_header_home(),temp_footer_home()];
		$this->template($template, $view, $data);
	}

	public function template($template,$view,$data=[])
	{	
		if (!is_null($template[0]) && !is_null($template[1])) {
			$dir 	= '../app/Views/';
			if (file_exists($dir . $template[0] . '.php') AND file_exists($dir . $template[1] . '.php')) {
			 	if (file_exists('../app/Views/' . $view . '.php')) {
			 		self::view($template[0], self::getdata());
					self::view($view, $data);
					self::view($template[1], self::getdata());
			 	}else{
			 		require_once $this->link_error;
			 	}
			} else {
				warning('File Template tidak ada atau tidak sesuai','directory tamplate');
			}
		} else 
			warning('Tema Admin tidak di konfigurasi');
	}

	//Fungsi untuk menampilkan jendela Pop Up
	public function popup($pesan,$link){
		$popup = "<script language='javascript'>
	    		window.alert('".$pesan."');
	    		window.location.href='".base_url().$link."';
	    		</script>";
	    echo $popup;
	}
}