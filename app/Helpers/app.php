<?php

// hak akses
function akses($akses=null)
{
	if ($_SESSION['user'] == 'siswa') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function datastaf($value='')
{
	$d['nama']	= 'Andri Lesmana';
	$d['username'] 	= 'andri';
	$d['password'] 	= 'andri2019';
	return $d;
}

function datasiswa($value='')
{
	$d['nis'] 	= '12665625';
	$d['nama']	= 'Santi Nuraeni';
	$d['tempat_lahir'] 	= 'Tasikmalaya';
	$d['tgl_lahir'] 	= '12/08/1996';
	$d['telp'] 	= '087675656565';
	$d['alamat'] 	= 'jl. kebangsaan timur no. 22';
	$d['kelas'] 	= 'X';

	return $d;
}

function datasiswaall($value='')
{
	$siswa[]		= ['12665625','Santi Nuraeni','Tasikmalaya','12/08/1996','087675656565','Jl. kebangsaan timur no. 22','X'];
	$siswa[]		= ['12665322','Agung Gunawan','Tasikmalaya','09/07/1996','081322564736','Jl. puspahiang ','X'];
	$siswa[]		= ['12665344','Andri Andiawan','Tasikmalaya','22/01/1997','081322776543','Jl. mitra batik ','X'];
	$siswa[]		= ['12665390','Yuli Yulianti','Tasikmalaya','03/05/1996','081322978645','Jl. sukarindik ','X'];
	$siswa[]		= ['12665400','Hanifa Agustin','Tasikmalaya','15/08/1996','085224536526','Jl. indihiang ','X'];

	return $siswa;
}

function datapembayaran($value='')
{
	$pembayaran[] = ['1','T001','16/07/2018','Juli','Rp. 100000',''];	
	$pembayaran[] = ['2','T089','17/08/2018','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['3','T110','13/09/2018','September','Rp. 100000',''];	
	$pembayaran[] = ['4','T160','17/10/2018','Oktober','Rp. 100000',''];	
	$pembayaran[] = ['5','T190','20/11/2018','Desember','Rp. 100000',''];	

	return $pembayaran;
}

function bulan($value='')
{
	$bulan = ['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'];

	return $bulan;
}

function laporanharian($value='')
{

	$pembayaran[] = ['1','T488','Santi Nuraeni','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['2','T489','Agung Gunawan','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['3','T490','Andri Andiawan','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['4','T491','Yuli Yulianti','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['5','T492','Hanifa Agustin','04/08/2019','Agustus','Rp. 100000',''];	

	return $pembayaran;
}



function laporanbulanan($value='')
{
		$pembayaran[] = ['1','T472','01/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['2','T473','01/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['3','T474','01/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['4','T475','01/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['5','T476','02/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['6','T478','02/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['7','T479','02/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['8','T480','02/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['9','T481','02/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['10','T482','03/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['11','T483','03/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['12','T484','03/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['13','T485','03/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['14','T486','03/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['15','T487','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['16','T488','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['17','T489','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['18','T490','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['19','T491','04/08/2019','Agustus','Rp. 100000',''];	
	$pembayaran[] = ['20','T492','04/08/2019','Agustus','Rp. 100000',''];	

	return $pembayaran;
}