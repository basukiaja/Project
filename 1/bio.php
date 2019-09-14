<?php
function cetakBiodata(){
  //Deklarasi object biodata
	$biodata = array(
		'nama' => 'Basuki',
		'Umur' => '25 Tahun',
		'address' => 'Desa Kalapagunung Kec.Kramatmulya Kab.Kuningan Jawa Barat',
    //Bisa memasukkan array juga
		'hobbies' => ['Futsal'],
		'is_married' => ['Belum Menikah'],
		'University' => array('Universitas Kuningan' => 'Sarjana Komputer', 'Tahun Masuk- Tahun Keluar' => '2014-2019'),
    //Array of object, adalah sekumpulan object dalam sebuah array
		'skills' => [
			array('id' => 0, 'skill' => 'Adobe Premier'),
			array('id' => 2, 'skill' => 'Microsoft Excel')
		]
	);
  // Memanggil fungsi json_encode untuk merubah array yang dibuat tadi menjadi format json
	return json_encode([$biodata]);
}
// Tampilkan json
echo cetakBiodata();