<?php
//define folder aplikasi ukk
define("APLIKASI_UKK", realpath(dirname(__FILE__) . "/../aplikasi"));
define("APLIKASI_LIB_UKK", realpath(APLIKASI_UKK . "/../lib"));

//mengatur pengambilan folder pustaka / lib
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(APLIKASI_LIB_UKK),
)));

//mengambil semua class pada pustaka ukk_azzis
require_once("Ukk_Azzis/Kuli.php");

//menjalankan aplikasi ukk_azzis
$apl = new Ukk_Azzis\Kuli();
<<<<<<< HEAD
$apl->jalan(APLIKASI_UKK, APLIKASI_LIB_UKK);
=======
$apl->jalan(APLIKASI_UKK, APLIKASI_LIB_UKK);
>>>>>>> 108bd4de034fb9b52f07ba226e75cedf061f6d7a
