
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_roti extends CI_Model {

	public function ambilroti(){
			$ambilroti = $this->db->join('kategori', 'kategori.kode_kategori = roti.kode_kategori')->get('roti')->result();

			return $ambilroti;
	}


	public function ambilkategori(){

			$ambilkategori = $this->db->get('kategori')->result();

			return $ambilkategori;
	}

	public function tambah($nama_file){

	if($nama_file == ""){

			$tambah = array(
				'nama_roti' => $this->input->post('nama_roti'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

	}else{

		$tambah = array(
				'nama_roti' => $this->input->post('nama_roti'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

	}
	return $this->db->insert('roti', $tambah);
	}

public function tampil_ubah_roti($kode_roti){
		return $this->db->join('kategori', 'kategori.kode_kategori = roti.kode_kategori')->where('kode_roti',$kode_roti)->get('roti')->row();

	}



public function update(){
			$ubah = array(
				'nama_roti' => $this->input->post('nama_roti'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

			return $this->db->where('kode_roti',$this->input->post('kode_roti'))->update('roti', $ubah);

}


public function update_ft($nama_file){
				$ubah = array(
				'nama_roti' => $this->input->post('nama_roti'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'), );

		return $this->db->where('kode_roti',$this->input->post('kode_roti'))->update('roti', $ubah);





}


public function hapus($kode_roti ){
	return $this->db->where('kode_roti',$kode_roti)->delete('roti');
}




public function ambilroticart($kode_roti){
	return $this->db->where('kode_roti',$kode_roti )->get('roti')->row();

}

}

/* End of file M_roti.php */
/* Location: ./application/models/M_roti.php */

?>
