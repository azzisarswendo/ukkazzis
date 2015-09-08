<?php

namespace Ukk_Azzis;

class Kuli {

    //untuk menjalankan aplikasi ukk_azzis
    public function jalan($dir_apl_ukk, $dir_lib_ukk){
        $app = $dir_apl_ukk;
        $this->konfig($dir_apl_ukk);
        $this->ambil($dir_lib_ukk . "/Ukk_Azzis");
        new Layar($app);
    }
    
    ///untuk pengambilan semua data aplikasi ukk_azzis
    private function ambil($dir_lib_ukk){
        $data = glob($dir_lib_ukk . "/*");
        foreach ($data as $lib){
            $kuli = explode($lib, "/");
            $kuli = $kuli[count($kuli) - 1] != "Kuli.php" ?  true : false;
            if(is_file($lib) && $kuli){
                require_once $lib;
            }
            elseif (is_dir($lib)) {
                $this->ambil($lib);
            }
        }
    }
    
    private function konfig($dir_apl_ukk){
        $dir_apl_ukk .= "/konfig/konfig.php";
        require_once $dir_apl_ukk;
    }
}
