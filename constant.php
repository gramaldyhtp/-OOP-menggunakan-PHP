<?php

/*define('NAMA', 'Gramaldy Hutapea');
echo NAMA;

echo "<br>";

const UMUR = 18;
echo UMUR;
*/

/*class Coba {
	const NAMA = 'Gramaldy';
}

echo Coba::NAMA;
*/

//echo __DIR__;


/*function coba() {
	return __FUNCTION__;
}

echo coba(); 
*/

class Coba {
	public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;

?>