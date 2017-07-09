<?php

namespace App\Transformers;

use App\Laundry;
use League\Fractal\TransformerAbstract;

class LaundryTransformer extends TransformerAbstract
{
	public function transform(Laundry $laundry)
	{
		return [
			'id_laundry'			=> $laundry->id_laundry,
			'id_provinsi'			=> $laundry->id_provinsi,
			'id_kota'			=> $laundry->id_kota,
			'nama_laundry'			=> $laundry->nama_laundry,
			'no_telfon'				=> $laundry->no_telfon,
			'long'					=> $laundry->long,
			'lat'					=> $laundry->lat,
			'alamat'				=> $laundry->alamat,
			'nama_pemilik'			=> $laundry->nama_pemilik,
			'email'					=> $laundry->email,
			'password'				=> $laundry->password,
			'directory_foto'		=> $laundry->directory_foto,
			'nohp'					=> $laundry->nohp,
			'biaya_antar_jemput'	=> $laundry->biaya_antar_jemput,
		];
	}
}